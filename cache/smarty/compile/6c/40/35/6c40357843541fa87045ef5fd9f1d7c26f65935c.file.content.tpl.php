<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:46:47
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1023450139547dc2c7142ed0-61553337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c40357843541fa87045ef5fd9f1d7c26f65935c' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1417523786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1023450139547dc2c7142ed0-61553337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547dc2c716c498_31311158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dc2c716c498_31311158')) {function content_547dc2c716c498_31311158($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>