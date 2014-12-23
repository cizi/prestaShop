<?php /* Smarty version Smarty-3.1.14, created on 2014-12-08 21:18:31
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/cashondelivery/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12568731254860797a671d4-02983407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '620ed06bfc1fb44d9ec096ecdbd90f95cc98f1e7' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1417524479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12568731254860797a671d4-02983407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'this_path_cod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54860797a89534_88203909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54860797a89534_88203909')) {function content_54860797a89534_88203909($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path_cod']->value;?>
cashondelivery.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" style="float:left;" />
		<br /><?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

		<br /><?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>

		<br style="clear:both;" />
	</a>
</p><?php }} ?>