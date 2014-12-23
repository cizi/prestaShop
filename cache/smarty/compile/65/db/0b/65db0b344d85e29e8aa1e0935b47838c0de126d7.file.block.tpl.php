<?php /* Smarty version Smarty-3.1.19, created on 2014-12-22 12:55:42
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/posstaticblocks/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132967734549806be84ad37-97959064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65db0b344d85e29e8aa1e0935b47838c0de126d7' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/posstaticblocks/block.tpl',
      1 => 1418749944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132967734549806be84ad37-97959064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'staticblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549806be977411_44248140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549806be977411_44248140')) {function content_549806be977411_44248140($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
     <?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
	  <?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
		  <p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp1),$_smarty_tpl);?>
 </p>
		
	  <?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

	  <?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

	   <?php }?>
     <?php } ?>
<?php }?><?php }} ?>
