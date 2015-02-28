<?php
class File
{
	 public static function Upload($sourceFile, $targetFile)
	 {
	  if(is_uploaded_file($sourceFile))
	  {
	   if(!file_exists($sourceFile))
	   {
	    throw new Exception("Nepodarilo se najít soubor $sourceFile.");      
	   }
   
      if(!move_uploaded_file($sourceFile, $targetFile))
   	  {
	    throw new Exception("Nepodarilo se presunout uploadovaný soubor z $sourceFile do $targetFile.");      
      }
	 }
	  else
	 {
	  throw new Exception("Nepodarilo se nahrát soubor $sourceFile jako $targetFile.");      
	  }
	 }
 
	 public static function Copy($sourceFile, $targetFile)
	 {
	  if(!file_exists($sourceFile))
	  {
	   throw new Exception("Nepodarilo se najít zdrojový soubor $sourceFile.");      
	  }
	  else
	  {
	     if(!copy($sourceFile, $targetFile))
    	 {
		    throw new Exception("Nepodarilo se zkopírovat soubor z $sourceFile do $targetFile.");      
	     }
 	  }
 	}
 
	 public static function Exists($sourceFile)
	 {
	  if(file_exists($sourceFile))
	  {
	   return true;      
	  }
	  else
	  {
	   return false;
	  }
 	}
}
?>
