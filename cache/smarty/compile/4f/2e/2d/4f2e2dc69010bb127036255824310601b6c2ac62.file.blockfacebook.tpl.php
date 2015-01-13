<?php /* Smarty version Smarty-3.1.19, created on 2015-01-12 10:50:20
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93832034554b398dc6ce286-59702008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '93832034554b398dc6ce286-59702008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b398dc6e1864_07033280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b398dc6e1864_07033280')) {function content_54b398dc6e1864_07033280($_smarty_tpl) {?>
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
