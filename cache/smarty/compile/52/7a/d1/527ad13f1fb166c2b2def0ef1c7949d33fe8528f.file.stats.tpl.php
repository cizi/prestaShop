<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:41:06
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:863536545547dc17204f8f6-35582602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527ad13f1fb166c2b2def0ef1c7949d33fe8528f' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/stats/stats.tpl',
      1 => 1417523838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '863536545547dc17204f8f6-35582602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547dc17206f7f9_51398726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dc17206f7f9_51398726')) {function content_547dc17206f7f9_51398726($_smarty_tpl) {?>

<div>
	<?php if ($_smarty_tpl->tpl_vars['module_name']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active){?>
			<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
	<?php }?>
</div>
</div>
</div>


<?php }} ?>