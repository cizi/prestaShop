<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 15:32:09
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:722823894548afc69f1f241-29494592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d7124e2affcce481c0a22d03ea08c7600aab74a' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1418393082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722823894548afc69f1f241-29494592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548afc69f2c928_60036116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548afc69f2c928_60036116')) {function content_548afc69f2c928_60036116($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
