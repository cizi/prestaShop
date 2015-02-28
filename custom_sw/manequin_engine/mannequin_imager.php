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

$file_tmp = $_FILES['file']['tmp_name'];
$id_product = filter_input(INPUT_POST, 'id_product');
$id_leyer = filter_input(INPUT_POST, 'image_layer');
$suffix = "manneq";
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

$file_target = '../../img/man/'.$id_leyer."-".$id_product."-".$suffix.".".$extension;
$file_location_for_db = 'img/man/'.$id_leyer."-".$id_product."-".$suffix.".".$extension;
File::Upload($file_tmp,$file_target);

// insert
$data = array(
    'id' => '',
    'id_product'  => $id_product,
    'path' => $file_location_for_db,
    'layer' => $id_leyer,
);

$res = dibi::query('INSERT INTO `ps_custom_maneq_image`', $data);
echo ($res === 1) ? $res : 0;

?>
