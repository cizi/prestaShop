<?php /* Smarty version Smarty-3.1.14, created on 2014-12-04 21:12:26
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3011550625480c02a741a22-62525611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12348870a4636d18f236523797baa1bf5cbfb17f' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1417523863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3011550625480c02a741a22-62525611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5480c02a7e2d35_34712217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5480c02a7e2d35_34712217')) {function content_5480c02a7e2d35_34712217($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>