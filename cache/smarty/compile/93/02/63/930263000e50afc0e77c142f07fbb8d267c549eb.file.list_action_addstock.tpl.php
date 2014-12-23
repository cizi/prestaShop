<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:23:02
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198336150554895466ac9d62-45571728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '930263000e50afc0e77c142f07fbb8d267c549eb' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1418285266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198336150554895466ac9d62-45571728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54895466ad9de7_65453108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54895466ad9de7_65453108')) {function content_54895466ad9de7_65453108($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
