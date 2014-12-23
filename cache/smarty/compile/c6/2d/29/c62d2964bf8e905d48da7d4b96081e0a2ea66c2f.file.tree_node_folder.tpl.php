<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:23:01
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82384989854895465d5b523-18278049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62d2964bf8e905d48da7d4b96081e0a2ea66c2f' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1418285270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82384989854895465d5b523-18278049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54895465d65c98_25199504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54895465d65c98_25199504')) {function content_54895465d65c98_25199504($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
