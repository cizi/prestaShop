<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 14:08:45
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:766144469548ae8dda8aa24-37829313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7554b7db5feeea978e24c87dafca42a7bd9b88e' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1418285271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766144469548ae8dda8aa24-37829313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548ae8ddab0767_73178463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ae8ddab0767_73178463')) {function content_548ae8ddab0767_73178463($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>
