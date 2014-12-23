<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:56
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/attachments/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275485167548954600bb976-07448603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c452517a292c805379e100d99519edad87802b' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/attachments/list_action_delete.tpl',
      1 => 1418285157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275485167548954600bb976-07448603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'href' => 0,
    'id' => 0,
    'product_attachements' => 0,
    'product_list' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548954600f39e7_98898567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548954600f39e7_98898567')) {function content_548954600f39e7_98898567($_smarty_tpl) {?>
<script>
function confirmProductAttached(productList)
{
	var confirm_text = "<?php echo smartyTranslate(array('s'=>'This attachment is associated with the following products:'),$_smarty_tpl);?>
";
	if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
'))
		return confirm(confirm_text + product_list);
	return false;
}
</script>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="<?php if (isset($_smarty_tpl->tpl_vars['product_attachements']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true)])) {?>return confirmProductAttached('<?php echo $_smarty_tpl->tpl_vars['product_list']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true)];?>
')<?php } else { ?>return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')<?php }?>">
	<img src="../img/admin/delete.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
</a><?php }} ?>
