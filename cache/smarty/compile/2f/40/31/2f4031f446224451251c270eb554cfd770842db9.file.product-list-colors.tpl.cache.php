<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:20:07
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/product-list-colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:641171054549069c71c8d83-07412308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4031f446224451251c270eb554cfd770842db9' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/product-list-colors.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '641171054549069c71c8d83-07412308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors_list' => 0,
    'color' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549069c71f4df1_04742989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549069c71f4df1_04742989')) {function content_549069c71f4df1_04742989($_smarty_tpl) {?>

<ul class="color_to_pick_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
		<li>
			<a
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['color']->value['id_product'],null,null,null,null,null,$_smarty_tpl->tpl_vars['color']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"
			id="color_<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_product_attribute']);?>
"
			class="color_pick"
			style="background: <?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
;">
			</a>
		</li>
	<?php } ?>
</ul><?php }} ?>
