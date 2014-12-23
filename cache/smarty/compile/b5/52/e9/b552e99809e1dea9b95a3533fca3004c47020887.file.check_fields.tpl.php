<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:34:56
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/products/multishop/check_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:428856318547dc00071a8a1-84925846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b552e99809e1dea9b95a3533fca3004c47020887' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/products/multishop/check_fields.tpl',
      1 => 1417523823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '428856318547dc00071a8a1-84925846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'product_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547dc0007316b1_86726406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dc0007316b1_86726406')) {function content_547dc0007316b1_86726406($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value){?>
	<label style="float: none">
		<input type="checkbox" style="vertical-align: text-bottom" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', this.checked); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()" />
		<?php echo smartyTranslate(array('s'=>'Check/uncheck all. (If you are editing this page for several shops, some fields like "name" or "price" are may be disabled. You will need check these fields in order to edit them)'),$_smarty_tpl);?>

	</label>
<?php }?><?php }} ?>