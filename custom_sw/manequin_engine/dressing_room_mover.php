<?php
/* This script is in charge of putting and removing clothes
 * from and in the dressing room (table).
 * 
 * Script is called by JS (ajax) on the background.
 * 
 * ------ REVISION HISTORY --------
 *  3-FEB-2015 - Jan Cimler
 *             - initial release
 */

require_once '../../config/settings.inc.php';
require_once '../dibi/vendor/autoload.php';
require_once './inc/db.inc.php';

// validated input
$id_customer = filter_input(INPUT_POST, 'id');
$id_product = filter_input(INPUT_POST, 'id_product');
$action_shortcut = filter_input(INPUT_POST, 'action');
$id_record = filter_input(INPUT_POST, 'id_record');
$id_lang = (filter_input(INPUT_POST, 'id_lang')) ? filter_input(INPUT_POST, 'id_lang') : 2;
$web_root = filter_input(INPUT_POST, 'root_url');
$product_price = filter_input(INPUT_POST, 'price');

if (empty($action_shortcut)) return 1;

switch ($action_shortcut) {
    case "insert":         // inserting
        if (empty($id_customer) || empty($id_product)) return 1;
        echo insert_in_dressing_room($id_customer, $id_product, $product_price);
        break;
    case "remove":
        if (empty($id_record)) return 1;
        echo remove_from_dressing_room($id_record);
        break;
    case "list":
        if (empty($id_customer) || empty($web_root)) return 1;
        echo json_encode(list_dressing_room($id_customer, $id_lang, $web_root));
        break;
}

return;

function insert_in_dressing_room($customer, $product, $formatted_price)
{
    // valid if the entry exists already
    $res = dibi::query('SELECT id FROM `ps_custom_maneq` WHERE `id_customer`=%s AND ', $customer, '`id_product`=%i', $product);
    if (count($res) > 0) // if exist not add again
    {
        return 1;
    }

    // insert
    $data = array(
        'id' => '',
        'id_customer' => $customer,
        'id_product' => $product,
        'product_price' => $formatted_price
    );
    $res = dibi::query('INSERT INTO `ps_custom_maneq`', $data);
    return ($res === 1) ? $res : 0;
}


function remove_from_dressing_room($id_rec)
{
    if ($id_rec == "") return 0;
    $result = dibi::query('DELETE FROM `ps_custom_maneq` WHERE `id`=%i', $id_rec);
    return ($result === 1) ? $result : 0;
}

function list_dressing_room($customer, $lang, $web_root)
{
    $output = array();
    // get front image
    $result = dibi::query('SELECT `ps_custom_maneq`.`id`,`ps_custom_maneq`.`id_product`,`path` as front_image,`layer`, `ps_product_lang`.`name`, `ps_image`.`id_image`, `ps_custom_maneq`.`product_price`  '
        . 'FROM `ps_custom_maneq` '
        . 'INNER JOIN `ps_custom_maneq_image` ON `ps_custom_maneq`.`id_product`=`ps_custom_maneq_image`.`id_product` '
        . 'LEFT JOIN `ps_product_lang` ON `ps_custom_maneq`.`id_product` = `ps_product_lang`.`id_product` '
        . 'LEFT JOIN `ps_image` ON `ps_custom_maneq`.`id_product` = `ps_image`.`id_product` '
        . 'WHERE `id_customer`=%s', $customer, ' AND `front_image`=%i ', 1, ' AND '
        . '`ps_product_lang`.`id_lang` = %i', $lang, ' AND '
        . '`ps_image`.`cover` = %i', 1);
    foreach ($result as $n => $row) {
        $front = array(
            'id_record' => $row['id'],
            'id_product' => $row['id_product'],
            'front_image_path' => $row['front_image'],
            'layer' => $row['layer'],
            'front_image' => $row['front_image'],
            'name' => $row['name'],
            'product_image' => foldImagePath($web_root, $row['id_image']),
            'price' => $row['product_price']
        );

        // get back image
        $back = array('back_image_path' => '');
        $result_back = dibi::query('SELECT `path` as `back_image`,`layer` as `back_layer` FROM `ps_custom_maneq_image` WHERE `front_image`=%i', 0, ' AND `id_product`=%i', $row['id_product']);
        foreach ($result_back as $n => $bc) {
            $back = array('back_image_path' => $bc['back_image']);
        }

        // all sizes for product
        $result_sizes = dibi::query('SELECT `ps_attribute_impact`.`id_attribute`, `ps_attribute_lang`.`name` '
            . 'FROM `ps_attribute_impact` '
            . 'LEFT JOIN `ps_attribute_lang` ON `ps_attribute_impact`.`id_attribute` = `ps_attribute_lang`.`id_attribute` '
            . 'WHERE `ps_attribute_impact`.`id_product` = %i ', $row['id_product'], ' AND '
            . '`ps_attribute_lang`.`id_lang` = %i', $lang);
        $all_sizes = "";
        foreach ($result_sizes as $size) {
            $all_sizes .= $size['id_attribute'] . "-" . $size['name'] . "|";
        }
        // remove last pipe char if any records in
        $all_sizes = (strlen($all_sizes) > 0) ? substr($all_sizes, 0, strlen($all_sizes) - 1) : '';
        $sizes = array('sizes' => $all_sizes);

        $output[] = array_merge($front, $back, $sizes);
    }

    // return
    if (empty($output)) {
        return 0;
    } else {
        return $output;
    }
}

function foldImagePath($rootUrl, $idImage)
{
    $pathPrefix = $rootUrl . "img/p/";
    $pathSuffix = "-small_default.jpg";
    for ($i = 0; $i < strlen($idImage); $i++) {
        $pathPrefix .= substr($idImage, $i, 1) . "/";
    }
    $path = $pathPrefix . $idImage . $pathSuffix;
    return $path;
}

?>
