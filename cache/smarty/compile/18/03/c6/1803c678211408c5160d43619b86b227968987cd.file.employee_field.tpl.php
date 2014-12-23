<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 14:25:49
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712228838548aecdd3adf27-47143883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1803c678211408c5160d43619b86b227968987cd' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1418285195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712228838548aecdd3adf27-47143883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548aecdd3b7345_65590957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548aecdd3b7345_65590957')) {function content_548aecdd3b7345_65590957($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
