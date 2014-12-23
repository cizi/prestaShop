<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:55
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/orders/form_customization_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11850900565489545f58d472-76807169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19246a8b2d666160bbad6bda2106cc460a36c8e' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/orders/form_customization_feedback.tpl',
      1 => 1418285205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11850900565489545f58d472-76807169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'customization_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5489545f5afdb0_76480107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489545f5afdb0_76480107')) {function content_5489545f5afdb0_76480107($_smarty_tpl) {?>
<html>
<head>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
		<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
</head>
<body>
	<script type="text/javascript">
	<?php if ($_smarty_tpl->tpl_vars['customization_errors']->value) {?>
		parent.customization_errors = true;
	<?php } else { ?>
		parent.customization_errors = false;
		parent.$('#products_err', window.parent.document).hide();
	<?php }?>
	var id_selected_product = parent.$('#id_product option:selected').val();
	if (parent.searchProducts())
	{
		parent.$('#products_err', window.parent.document).html('<?php echo $_smarty_tpl->tpl_vars['customization_errors']->value;?>
');
		parent.$('#id_product option[value="'+id_selected_product+'"]').attr('selected', true);
		parent.$('#id_product').change();
	}
	</script>
	</body>
</html>
<?php }} ?>
