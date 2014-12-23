<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:29:11
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:807458686548955d7f2b0c9-44519233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac35ae30ce026ffc49bbefc0ab6b37099d40145' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/localization/content.tpl',
      1 => 1418285194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807458686548955d7f2b0c9-44519233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548955d8002100_43437032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548955d8002100_43437032')) {function content_548955d8002100_43437032($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
