<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:41:05
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/stats/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1405015178547dc171d26a91-17738141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd09c233a8bd10fcbf064dd7d0c2aaac8b20c55ce' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/stats/menu.tpl',
      1 => 1417523838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405015178547dc171d26a91-17738141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'module' => 0,
    'module_instance' => 0,
    'current' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547dc171d5fe79_74861963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dc171d5fe79_74861963')) {function content_547dc171d5fe79_74861963($_smarty_tpl) {?>
<div id="container">
	<div class="sidebar navigation">
	<h3><?php echo smartyTranslate(array('s'=>'Navigation'),$_smarty_tpl);?>
</h3>
		<ul class="categorieList">
		<?php if (count($_smarty_tpl->tpl_vars['modules']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value[$_smarty_tpl->tpl_vars['module']->value['name']]){?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['module_instance']->value[$_smarty_tpl->tpl_vars['module']->value['name']]->displayName;?>
</a>
					</li>
				<?php }?>
			<?php } ?>
		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'No module has been installed.'),$_smarty_tpl);?>

		<?php }?>
		</ul>



<?php }} ?>