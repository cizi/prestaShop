<?php

    // Init
    $sql = array();

    // Create Table in Database
    $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_sequence` (
                      `id_pos_sequence` int(10) NOT NULL AUTO_INCREMENT,
                      `bgimage` longtext NOT NULL,
					  `image` longtext NOT NULL,
                      `image2` longtext NOT NULL,
					  `active` int NOT NULL,
					  `animate` varchar(250) NOT NULL,
					  `kind_effect` int NOT NULL,
                      `porder` int NOT NULL,
                    PRIMARY KEY (`id_pos_sequence`)
                    ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';
					
    $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_sequence_lang` (
						`id_pos_sequence` int(11) unsigned NOT NULL,
						`id_lang` int(11) unsigned NOT NULL,
						`title1` varchar(250) NOT NULL,
						`title2` varchar(250) NOT NULL,
						`link` varchar(250) NOT NULL DEFAULT "#",
						`description` longtext NOT NULL,
                        PRIMARY KEY (`id_pos_sequence`,`id_lang`)
                    ) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';
   					

    $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_sequence_shop` (
                        `id_pos_sequence` int(11) unsigned NOT NULL,
                        `id_shop` int(11) unsigned NOT NULL,
                        PRIMARY KEY (`id_pos_sequence`,`id_shop`)
                    ) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';
   
    $doc = new DOMDocument();
    $file = _PS_MODULE_DIR_ . DS . 'possequence' . DS . 'sql' . DS . 'slideshow.xml';
    $doc->load($file);
    $blocks = $doc->getElementsByTagName("sequence");
    foreach ($blocks as $block) {
        $ids = $block->getElementsByTagName("id_pos_sequence");
        $id = $ids->item(0)->nodeValue;
        $actives = $block->getElementsByTagName("active");
        $active = $actives->item(0)->nodeValue;
		$kind_effects = $block->getElementsByTagName("kind_effect");
        $kind_effect = $kind_effects->item(0)->nodeValue;
        $porders = $block->getElementsByTagName("porder");
        $porder = $porders->item(0)->nodeValue;
        //  echo $id.'-'.$title.'-'.$description.'-'.$link.'-'.$porder; echo "<br>";
        $sql[] = "INSERT INTO `" . _DB_PREFIX_ . "pos_sequence` (`id_pos_sequence`, `porder`,`active`,`kind_effect`) 
           VALUES('".$id."','".$porder."','".$active."','".$kind_effect."');";
    }
	
	 $blocklangs = $doc->getElementsByTagName("sequence_lang");
    foreach ($blocklangs as $blocklang) {
        $ids = $blocklang->getElementsByTagName("id_pos_sequence");
        $id = $ids->item(0)->nodeValue;
		$id_langs = $blocklang->getElementsByTagName("id_lang");
        $id_lang = $id_langs->item(0)->nodeValue;  
        $titles = $blocklang->getElementsByTagName("title1");
        $title = $titles->item(0)->nodeValue;
		$title2s = $blocklang->getElementsByTagName("title2");
        $title2 = $title2s->item(0)->nodeValue;
        $links = $blocklang->getElementsByTagName("link");
        $link = $links->item(0)->nodeValue;
        $descriptions = $blocklang->getElementsByTagName("description");
        $description = $descriptions->item(0)->nodeValue;
        //  echo $id.'-'.$title.'-'.$description.'-'.$link.'-'.$porder; echo "<br>";
        $sql[] = "INSERT INTO `" . _DB_PREFIX_ . "pos_sequence_lang` (`id_pos_sequence`,`id_lang`,`title1`,`title2`, `link`, `description`) 
           VALUES('".$id."','".$id_lang."','".$title."','".$title2."','".$link."','".$description."');";
    }

    $blockshops = $doc->getElementsByTagName("sequence_shop");
    foreach ($blockshops as $blockshop) {
        $ids = $blockshop->getElementsByTagName("id_pos_sequence");
        $id = $ids->item(0)->nodeValue;
        $id_shops = $blockshop->getElementsByTagName("id_shop");
        $id_shop = $id_shops->item(0)->nodeValue;
        //echo $id.'-'.$id_shop;
        $sql[] = "INSERT INTO `" . _DB_PREFIX_ . "pos_sequence_shop`(`id_pos_sequence`, `id_shop`) 
                VALUES('" . $id . "','" . $id_shop . "')";
    }