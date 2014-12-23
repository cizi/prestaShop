<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:13:33
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11075672615490683d67f4c2-12877997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe42d8e0a60acd3c46657230744d3fbd2393f861' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal/views/templates/hook/column.tpl',
      1 => 1418747020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11075672615490683d67f4c2-12877997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490683d691038_41143292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490683d691038_41143292')) {function content_5490683d691038_41143292($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>
