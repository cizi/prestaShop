<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:13:33
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posstaticblocks/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20962363265490683d6dbfa6-96055320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8802d4559c02c1bc68151212c3bd0e3ff45f0725' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posstaticblocks/block.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20962363265490683d6dbfa6-96055320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'staticblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490683d707e66_51098494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490683d707e66_51098494')) {function content_5490683d707e66_51098494($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
	  <?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
		  <p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp4=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp4),$_smarty_tpl);?>
 </p>
		
	  <?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

	  <?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

	   <?php }?>
     <?php } ?><?php }} ?>
