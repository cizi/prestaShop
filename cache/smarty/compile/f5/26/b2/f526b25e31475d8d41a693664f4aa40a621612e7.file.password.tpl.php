<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 13:57:10
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/mobile/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085031243547db7260debf7-86395758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f526b25e31475d8d41a693664f4aa40a621612e7' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/mobile/password.tpl',
      1 => 1417524651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2085031243547db7260debf7-86395758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation' => 0,
    'email' => 0,
    'request_uri' => 0,
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db72617dcd1_03236118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db72617dcd1_03236118')) {function content_547db72617dcd1_03236118($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div data-role="content" id="content">
	<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==1){?>
	<p class="success"><?php echo smartyTranslate(array('s'=>'Your password has been successfully reset and a confirmation has been sent to your email address:'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
</p>
	<?php }elseif(isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==2){?>
	<p class="success"><?php echo smartyTranslate(array('s'=>'A confirmation email has been sent to your address:'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
</p>
	<?php }else{ ?>
	<p><?php echo smartyTranslate(array('s'=>'Please enter the email address you used to register. We will then send you a new password. '),$_smarty_tpl);?>
</p>
	<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['request_uri']->value, 'htmlall', 'UTF-8');?>
" method="post" class="std" id="form_forgotpassword">
		<fieldset>
			<label for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
</label>
			<input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['email'], 'htmlall', 'UTF-8'));?>
<?php }?>" />
			<input type="submit" class="button" data-theme="a" value="<?php echo smartyTranslate(array('s'=>'Retrieve Password'),$_smarty_tpl);?>
" />
		</fieldset>
	</form>
	<?php }?>
	<p class="clear">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Login'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/my-account.gif" alt="<?php echo smartyTranslate(array('s'=>'Return to Login'),$_smarty_tpl);?>
" class="icon" /></a><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>
</a>
	</p>
</div><!-- /content -->
<?php }} ?>