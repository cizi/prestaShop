<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 13:57:06
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1200125095547db722971489-50364803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '626adc1d7aec7863b5c7cb668ae765b94ebf3fe7' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/mobile/page-title.tpl',
      1 => 1417524650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1200125095547db722971489-50364803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db7229a08a8_48759730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db7229a08a8_48759730')) {function content_547db7229a08a8_48759730($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>