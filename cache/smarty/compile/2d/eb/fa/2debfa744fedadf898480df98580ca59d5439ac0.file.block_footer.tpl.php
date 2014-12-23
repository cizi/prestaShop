<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:15:58
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posstaticfooter/block_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316506210549068ce70ff05-10692815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2debfa744fedadf898480df98580ca59d5439ac0' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posstaticfooter/block_footer.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316506210549068ce70ff05-10692815',
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
  'unifunc' => 'content_549068ce753ec3_35125383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549068ce753ec3_35125383')) {function content_549068ce753ec3_35125383($_smarty_tpl) {?><div class="footer-static row">
	<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
			<p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp3=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp3),$_smarty_tpl);?>
 </p>
		      
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

		<?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
		      <?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

		 <?php }?>
	<?php } ?>
</div>

<?php }} ?>
