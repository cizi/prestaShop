<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 13:57:01
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1133564668547db71d08da54-58128755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd79a0d42cd67f3d934916ee8e1bcb5302608bd0' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/category-count.tpl',
      1 => 1417524604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1133564668547db71d08da54-58128755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db71d0bb7f3_03683009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db71d0bb7f3_03683009')) {function content_547db71d0bb7f3_03683009($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>