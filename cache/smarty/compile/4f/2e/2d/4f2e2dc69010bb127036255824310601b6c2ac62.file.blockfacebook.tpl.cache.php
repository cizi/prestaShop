<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 15:14:19
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1312281275548954e9d6e543-56279902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f2e2dc69010bb127036255824310601b6c2ac62' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blockfacebook/blockfacebook.tpl',
      1 => 1418393091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1312281275548954e9d6e543-56279902',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548954e9d84ad4_02532668',
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548954e9d84ad4_02532668')) {function content_548954e9d84ad4_02532668($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
