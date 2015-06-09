<?php

require_once(dirname(__FILE__) . '../../../config/config.inc.php');
require_once(dirname(__FILE__) . '../../../init.php');

function foldImagePath($rootUrl, $idImage) {
    $pathPrefix = $rootUrl . "img/p/";
    $pathSuffix = "-small_default.jpg";
    for ($i = 0; $i < strlen($idImage); $i++) {
        $pathPrefix .= substr($idImage, $i, 1) . "/";
    }
    $path = $pathPrefix . $idImage . $pathSuffix;
    return $path;
}

function getData() {
    if (Tools::getValue('cart') > 0) {
        $output = array();
        $cart = new CartCore(Tools::getValue('cart'));
        $result = $cart->getManequineById(Tools::getValue('cart'), Tools::getValue('id_lang'));
        foreach ($result as $n => $row) {
            $product = new ProductCore($row['id_product']);
            $price = $product->getPrice();
            $front = array(
                'id_record' => $row['id'],
                'id_product' => $row['id_product'],
                'front_image_path' => $row['front_image'],
                'layer' => $row['layer'],
                'front_image' => $row['front_image'],
                'name' => $row['name'],
                'product_image' => foldImagePath(Tools::getValue('url'), $row['id_image']),
                'price' => $price,
                'selected_attribute' => $row['id_product_attribute'],
                'id_cart' => Tools::getValue('cart'),
                'currency' => Currency::getCurrencyInstance($default_country->id_currency ? (int)$default_country->id_currency : Configuration::get('PS_CURRENCY_DEFAULT'))->iso_code
            );
            $back = array('back_image_path' => '');
            $result_back = $cart->getManequineBackImage($row['id_product']);
            foreach ($result_back as $n => $bc) {
                $back = array('back_image_path' => $bc['back_image']);
            }
            $all_sizes = "";
            $sizes = $product->getAttributeCombinations(Tools::getValue('id_lang'));
            foreach ($sizes as $key => $value) {
                $all_sizes .= $value["id_product_attribute"] . "-" . $value['attribute_name'] . "|";
            }
            $all_sizes = (strlen($all_sizes) > 0) ? substr($all_sizes, 0, strlen($all_sizes) - 1) : '';
            $sizes = array('sizes' => $all_sizes);
            $output[] = array_merge($front, $back, $sizes);
        }
        die(Tools::jsonEncode($output));
    } else {
        die(Tools::jsonEncode(0));
    }
}

function removeData() {
    if (Tools::getValue('id_record') > 0 && Tools::getValue('id_cart') > 0) {
        $cart = new CartCore(Tools::getValue('id_cart'));
        $result = $cart->deleteManequineId(Tools::getValue('id_record'),Tools::getValue('id_cart'));
        return $result;
    } else {
        return 0;
    }
}

switch (Tools::getValue('method')) {
    case 'getdata' :
        getData();
        break;
    case 'remove' :
        removeData();
        break;
    default:
        exit;
}