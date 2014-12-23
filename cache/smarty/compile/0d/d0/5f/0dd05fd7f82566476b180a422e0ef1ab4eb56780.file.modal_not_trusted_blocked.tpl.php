<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:53
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1152435035489545d20fd46-63049463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd05fd7f82566476b180a422e0ef1ab4eb56780' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl',
      1 => 1418285202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152435035489545d20fd46-63049463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5489545d22f4d4_40385291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489545d22f4d4_40385291')) {function content_5489545d22f4d4_40385291($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['module_name'] = new Smarty_variable('<strong><span class="module-name-placeholder"></span></strong>', null, 0);?>
<div class="modal-body">
	<div class="alert alert-danger">
		<h4><?php echo smartyTranslate(array('s'=>'The module "%s" could not be securely identified by PrestaShop.','sprintf'=>$_smarty_tpl->tpl_vars['module_name']->value),$_smarty_tpl);?>
</h4>
		<p>
			<?php echo smartyTranslate(array('s'=>'This generally happens when the module is not distributed through our official marketplace, PrestaShop Addons - or when your server failed to communicate with PrestaShop Addons.'),$_smarty_tpl);?>

			<?php echo smartyTranslate(array('s'=>'Since you did not download the module from PrestaShop Addons, we cannot assert that the module is safe (i.e. that it is not adding some undisclosed functionality like backdoors, ads, hidden links, spam, etc.).'),$_smarty_tpl);?>

		</p>
	</div>
	<h3><?php echo smartyTranslate(array('s'=>'What Should I Do?'),$_smarty_tpl);?>
</h3>
	<p><?php echo smartyTranslate(array('s'=>'You can look for similar modules on the official marketplace.'),$_smarty_tpl);?>
 <a class="catalog-link" target="_blank" href="#"><?php echo smartyTranslate(array('s'=>'Click here to browse PrestaShop Addons.'),$_smarty_tpl);?>
</a></p>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Back to safety'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
