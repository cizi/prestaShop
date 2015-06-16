<?php
/*
*
 * *
 *  Adam Budik
*/
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
if ( isset($_POST['ajax_manequine_display']) || isset($_GET['ajax_manequine_display']))
{

	if (Tools::getValue('ajax_manequine_display') == 'collapse')
	{
		Context::getContext()->cookie->ajax_manequine_display = 'collapsed';
		die ('collapse status of the blockcart module updated in the cookie');
	}
	if (Tools::getValue('ajax_manequine_display') == 'expand')
	{
		Context::getContext()->cookie->ajax_manequine_display = 'expanded';
		die ('expand status of the blockcart module updated in the cookie');
	}
	die ('ERROR : bad status setted. Only collapse or expand status of the blockcart module are available.');
}
else die('ERROR : No status setted.');

