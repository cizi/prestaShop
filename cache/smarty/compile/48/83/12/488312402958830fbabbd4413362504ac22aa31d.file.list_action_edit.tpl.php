<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:11:05
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929207387547dba691ea026-16843241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '488312402958830fbabbd4413362504ac22aa31d' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1417523862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929207387547dba691ea026-16843241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547dba691f6b07_80496299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dba691f6b07_80496299')) {function content_547dba691f6b07_80496299($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>