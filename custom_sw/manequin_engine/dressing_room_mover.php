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

// DB settings & connecting
dibi::connect(array(
    'driver'   => 'mysql',
    'host'     => _DB_SERVER_,
    'username' => _DB_USER_,
    'password' => _DB_PASSWD_,
    'database' => _DB_NAME_,
    'charset'  => 'utf8',
));


// validated input
$id_customer = filter_input(INPUT_GET,'id');
$id_product = filter_input(INPUT_GET,'id_product');

if (empty($id_customer) || empty($id_product))
{
    echo 0; 
    return;
}
else 
{
    echo insert_in_dressing_room($id_customer, $id_product);
    return;
}

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
    $res = dibi::query('INSERT INTO ps_custom_maneq', $data);
    return ($res === 1) ? $res : 0;
}

?>