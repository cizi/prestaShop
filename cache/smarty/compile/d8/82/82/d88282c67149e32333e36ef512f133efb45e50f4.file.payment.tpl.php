<?php /* Smarty version Smarty-3.1.14, created on 2014-12-08 21:18:31
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1704107138548607979830b3-33568351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88282c67149e32333e36ef512f133efb45e50f4' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1417524392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1704107138548607979830b3-33568351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'this_path_bw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54860797a51ba0_41403802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54860797a51ba0_41403802')) {function content_54860797a51ba0_41403802($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path_bw']->value;?>
bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="49"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p><?php }} ?>