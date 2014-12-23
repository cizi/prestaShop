<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:24:26
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/cronjobs/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58771153154906acace6563-89724589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2782e352461f58518e9bf377d04784a41f2ed6' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/cronjobs/views/templates/admin/configure.tpl',
      1 => 1418750656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58771153154906acace6563-89724589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54906acae35ea1_38580351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54906acae35ea1_38580351')) {function content_54906acae35ea1_38580351($_smarty_tpl) {?>

<div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>'What does this module do?','mod'=>'cronjobs'),$_smarty_tpl);?>
</h3>
	<p>
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
/logo.png" class="pull-left" id="cronjobs-logo" />
		<?php echo smartyTranslate(array('s'=>'Originally, cron is a Unix system tool that provides time-based job scheduling: you can create many cron jobs, which are then run periodically at fixed times, dates, or intervals.','mod'=>'cronjobs'),$_smarty_tpl);?>

		<br/>
		<?php echo smartyTranslate(array('s'=>'This module provides you with a cron-like tool: you can create jobs which will call a given set of secure URLs to your PrestaShop store, thus triggering updates and other automated tasks.','mod'=>'cronjobs'),$_smarty_tpl);?>

	</p>
</div>
<?php }} ?>
