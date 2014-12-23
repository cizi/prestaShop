<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:59
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1585360748548954633bd582-34593073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7c0a19cbcdd657446cac555a76794c99a0755f' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1418285253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1585360748548954633bd582-34593073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548954633c9bc4_74551296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548954633c9bc4_74551296')) {function content_548954633c9bc4_74551296($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
