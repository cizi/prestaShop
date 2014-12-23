<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 17:47:29
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6834473135490622130f368-35468438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c2456645a633506758e1539233efa0bbb77863a' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl',
      1 => 1418747020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6834473135490622130f368-35468438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490622134aa60_04460303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490622134aa60_04460303')) {function content_5490622134aa60_04460303($_smarty_tpl) {?>

<form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])) {?><input type="hidden" name="id_product" value="<?php echo intval($_GET['id_product']);?>
" /><?php }?>
	<!-- Change dynamicaly when the form is submitted -->
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="id_p_attr" value="" />
	<input type="hidden" name="express_checkout" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_payment_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_current_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
</form>

<?php }} ?>
