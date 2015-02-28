<?php
/* This script iuploading images for mannequin
 * 
 * Script is called by JS (ajax) on the background.
 * 
 * ------ REVISION HISTORY --------
 *  28-FEB-2015 - Jan Cimler
 *             - initial release
 */

require_once '../../config/settings.inc.php';
require_once '../dibi/vendor/autoload.php';
require_once './inc/db.inc.php';
require_once './inc/file.class.php';

$id_prod = filter_input(INPUT_POST, 'id_product');
$action = filter_input(INPUT_POST, 'action');
$id_rec = filter_input(INPUT_POST, 'id_rec');

if (empty($action))
{
    echo 0;
}
else
{
    switch ($action)
    {
        case "get":
            echo get_mannequin_image($id_prod);
        break;
        case "remove":
            echo discard_mannequin_image($id_rec);
        break;
    }
}


function get_mannequin_image($id_product)
{
    if (empty($id_product)) return 0;
    $output = array();
    $result = dibi::query('SELECT `id`, `path` FROM `ps_custom_maneq_image` WHERE `id_product`=%i', $id_product);
    foreach ($result as $n => $row) 
    {
        $output[] = array('id_record' => $row['id'], 'image_path' => $row['path']);
    }
    
    // return
    if (empty($output))
    {
        return 0;
    }
    else
    {
        return json_encode($output);
    }
}

function discard_mannequin_image($id_record)
{
    if (empty($id_record)) return 0;
    
    $image_file = dibi::query('SELECT path FROM `ps_custom_maneq_image` WHERE `id`=%i', $id_record)->fetchSingle();
    $result = dibi::query('DELETE FROM `ps_custom_maneq_image` WHERE `id`=%i', $id_record);
    
    if ($result)
    {
        unlink('../../'.$image_file);
        return $result;
    }
    return 0;
}
?>
