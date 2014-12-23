<?php
  /*
  2014-12-19 - initial release
  
  Script makes
  - backup script for creating DB backup which is send on an email like an attachement
  - zip and copying user files like pictures, themes etc. to the FTP  
  */
  
  // config and DB connection
  require_once("../config/settings.inc.php");
  require_once('../custom_sw/PHPMailer-master/class.phpmailer.php');
  $mysqli = new mysqli(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);
  if ($mysqli->connect_errno) die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);  
  
  // requiremnt variables
  // paths
  $temp_folder = "../temp/";
  $temp_file_db = $temp_folder."DB_dump_temp.sql";
  $db_filename = $temp_folder.date("Y-d-m_Hi")."_db_backup.zip"; 
  // FTP
  $ftp_server = "93.91.50.150";
  $ftp_user = "backup_agent";
  $ftp_pass = "backup_666";
  $ftp_folder = "backups/presta.solco.cz/";
  $folders_to_backups = array("crons","config","themes","custom_sw","img","modules","css");
  $ftp_filename = date("Y-d-m_Hi" )."_all_presta_backup.zip";
  $folders_to_zip = array("");
  
  // email
  $backup_send_to = "cizi@email.cz";
  
  // DB backup - start
  $tables = array();
  $return = "";
	$result = $mysqli->query('SHOW TABLES');
	while($row = $result->fetch_row())
	{
		$tables[] = $row[0];
	} 
  
  //cycle through
	foreach($tables as $table)
	{
		$result = $mysqli->query('SELECT * FROM '.$table);
		$num_fields = $result->field_count; 
		
		$return.= 'DROP TABLE '.$table.';';
    $res = $mysqli->query('SHOW CREATE TABLE '.$table);
    if (empty($res)) continue;
		$row2 = $res->fetch_row(); // mysql_fetch_row($mysqli->query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = $result->fetch_row())
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
  //save file
  $handle = fopen($temp_file_db,'w+');
  fwrite($handle,$return);
  fclose($handle);
  $to_zip[] = $temp_file_db;
  add_to_zip($to_zip,$db_filename,TRUE);            // zipping files
  email_with_att($db_filename,"Solco, SQL dump");   // sending email with attachment
  delete_files_or_folder($db_filename);             // deleting file from temp
  $mysqli->close();
  // DB backup end
  
  
  
  // folders backup - start
  $ftp_filename_full_temp = $temp_folder.$ftp_filename;
  $items_to_zip = array();
  foreach ($folders_to_backups as $item_folder)
  {
    $root_path = str_replace("crons", "", __DIR__).$item_folder;
    if (is_dir($root_path))
    {     
            $items_to_zip = array_merge($items_to_zip,dir_to_array($root_path));
    }
    else
    {
      $items_to_zip[$root_path] = $root_path;
    }
  }  
  add_to_zip($items_to_zip,$ftp_filename_full_temp); 
  // set up basic connection
  $conn_id = ftp_connect($ftp_server);
  $login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);
  ftp_pasv($conn_id, true);

  // upload a file
  $upload_result = ftp_put($conn_id, $ftp_folder.$ftp_filename, $ftp_filename_full_temp, FTP_BINARY);
  if (true)//($upload_result) 
  {
   delete_files_or_folder($ftp_filename_full_temp);
  } 
  else 
  {
    //email_with_att("","There was a problem while uploading to FTP. The backup is still in 'temp' directory");
    echo "There was a problem while uploading to FTP";
  } 
  // close the connection
  ftp_close($conn_id);
  // folders backup - end
  
  
  /**
   * function add to zip files/folders from $to_zip array
   *      
   * @param array $to_zip files/folders to zip
   * @param string $destination_zip target zip file
   * @param boolena [$delete_to_zip_files] delete files after zip    
   * @return boolean   
   */
  function add_to_zip(array $to_zip, $destination_zip, $delete_to_zip_files = FALSE)
  {
    $zip = new ZipArchive;
    if ($zip->open($destination_zip, ZipArchive::CREATE)) 
    {
      // add files/folders to zip
      foreach ($to_zip as $file_to_zip)
      {
        if (!file_exists($file_to_zip)) continue;
        $zip->addFile($file_to_zip);
      }
      $zip->close();
      
      // delete files/folder if wanted
      if ($delete_to_zip_files)
      {
        foreach ($to_zip as $file_to_zip)
        {
          delete_files_or_folder($file_to_zip);
        }
      }
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }
  
  /**
   * function send email with attachment
   *      
   * @param string $attachment path to file
   * @return boolean   
   */  
  function email_with_att($attachment,$email_body)
  {
    $email = new PHPMailer();
    $email->From      = "cizi@email.cz";
    $email->FromName  = 'cizi';
    $email->Subject   = 'SQL dump solco' ;
    $email->Body      = $email_body;
    $email->AddAddress( 'cizi@email.cz' );
    
    if (!empty($attachment))
    {
        $email->AddAttachment( $attachment, $attachment);
    }
   
    return $email->Send();
  }
  
  /**
   * Function calls recursively and deleteing content of folders, it means files
   *      
   * @param string $path to file
   * @return array of undeleted items   
   */
  function delete_files_or_folder($path)
  {
    $return = array();
    if (is_dir($path))
    {
      if ($dh = opendir($dir))
      {
        while (($file = readdir($dh)) !== false)
        {
          $ret = delete_files_or_folder($file);
          $result = array_merge($return, $ret);
        }
        closedir($dh);
      }
    }
    else
    { 
      if (file_exists($path) && is_file($path))
      {
        if(!unlink($path))
        {
          $return[] = $path;
        }
      }
      else
      { 
        $return[] = $path; 
      }
    }
    return $return;
  }
 
  /**
   * Function calls recursively and return array of of paths from all subdirectories
   *      
   * @param string $dir which is folder or file
   * @return array of files with absolute path   
   */ 
  function dir_to_array($dir) 
  {    
   $result = array(); 

   $cdir = scandir($dir); 
   foreach ($cdir as $key => $value) 
   { 
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . "/" . $value)) 
         { 
            $result = array_merge($result, dir_to_array($dir . "/" . $value)); 
         } 
         else 
         { 
            $key = $dir."/".$value; 
            $result[$key] = $dir."/".$value; 
         } 
      } 
   } 
   return $result; 
} 
?>
