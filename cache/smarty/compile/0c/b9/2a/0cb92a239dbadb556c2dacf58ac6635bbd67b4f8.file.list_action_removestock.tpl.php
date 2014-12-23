<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:23:02
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21326015775489546663a469-43408970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cb92a239dbadb556c2dacf58ac6635bbd67b4f8' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1418285267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21326015775489546663a469-43408970',
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
  'unifunc' => 'content_54895466651088_42408212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54895466651088_42408212')) {function content_54895466651088_42408212($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
