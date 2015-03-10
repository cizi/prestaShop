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
$id_customer = filter_input(INPUT_POST,'id');
$id_product = filter_input(INPUT_POST,'id_product');
$action_shortcut = filter_input(INPUT_POST,'action');
$id_record = filter_input(INPUT_POST,'id_record');

if (empty($action_shortcut)) return 1;

switch ($action_shortcut) 
{
    case "insert":         // inserting
        if (empty($id_customer) || empty($id_product)) return 1;
        echo insert_in_dressing_room($id_customer, $id_product);
        break;
    case "remove":
        if (empty($id_record)) return 1;
        echo remove_from_dressing_room($id_record);
        break;
    case "list":
        if (empty($id_customer)) return 1;
        echo json_encode(list_dressing_room($id_customer));
        break;
}

return;

function insert_in_dressing_room($customer, $product)
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
        'id_product'  => $product,
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

function list_dressing_room($customer)
{
    $output = array();
    // get front image
    $front = array('id_record' => '', 'id_product' => '', 'front_image_path' => '', 'layer' => '', 'front_image' => '');
    $result = dibi::query('SELECT `ps_custom_maneq`.`id`,`ps_custom_maneq`.`id_product`,`path` as front_image,`layer` '
            . 'FROM `ps_custom_maneq` '
                . 'INNER JOIN `ps_custom_maneq_image` ON `ps_custom_maneq`.`id_product`=`ps_custom_maneq_image`.`id_product` '
            . 'WHERE `id_customer`=%s', $customer, ' AND `front_image`=%i', 1);
    foreach ($result as $n => $row) 
    {
        $front = array('id_record' => $row['id'], 'id_product' => $row['id_product'], 'front_image_path' => $row['front_image'], 'layer' => $row['layer'], 'front_image' => $row['front_image']);
    }
    
    // get back image
    $back = array('back_image_path' => '');
    $result = dibi::query('SELECT `ps_custom_maneq`.`id`,`ps_custom_maneq`.`id_product`,`path` as back_image,`layer` '
            . 'FROM `ps_custom_maneq` '
                . 'INNER JOIN `ps_custom_maneq_image` ON `ps_custom_maneq`.`id_product`=`ps_custom_maneq_image`.`id_product` '
            . 'WHERE `id_customer`=%s', $customer, ' AND `front_image`=%i', 0);
    foreach ($result as $n => $row) 
    {
        $back = array('back_image_path' => $row['back_image']);
    }
    
    $output[] = array_merge($front, $back);
    
    // return
    if (empty($output))
    {
        return 0;
    }
    else
    {
        return $output;
    }
    
}
?>
