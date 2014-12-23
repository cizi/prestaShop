<?php /* Smarty version Smarty-3.1.14, created on 2014-12-08 21:18:31
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal/views/templates/hook/express_checkout_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210116159554860797ac8fd9-20554578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1659f9fea9cf3068686fa853ba7ac92b9ab817b8' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal/views/templates/hook/express_checkout_payment.tpl',
      1 => 1417647811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210116159554860797ac8fd9-20554578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_mobile' => 0,
    'base_dir_ssl' => 0,
    'PayPal_lang_code' => 0,
    'logos' => 0,
    'PayPal_payment_method' => 0,
    'PayPal_integral' => 0,
    'PayPal_content' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54860797bb16a5_51742953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54860797bb16a5_51742953')) {function content_54860797bb16a5_51742953($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (@constant('_PS_VERSION_')>=1.6){?>

<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module paypal">
			<a href="javascript:void(0)" onclick="$('#paypal_payment_form').submit();" id="paypal_process_payment" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
				<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
					<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_dir_ssl']->value, 'htmlall', 'UTF-8');?>
modules/paypal/img/logos/express_checkout_mobile/CO_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_lang_code']->value, 'htmlall', 'UTF-8');?>
_orange_295x43.png" />
				<?php }else{ ?>
					<?php if (isset($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'])&&$_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_integral']->value){?>
						<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'], 'htmlall', 'UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], 'htmlall', 'UTF-8');?>
" height="48px" />
					<?php }else{ ?>
						<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'], 'htmlall', 'UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], 'htmlall', 'UTF-8');?>
" />
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'];?>

				<?php }?>
				
			</a>
		</p>
    </div>
</div>

<style>
	p.payment_module.paypal a 
	{
		padding-left:17px;
	}
</style>
<?php }else{ ?>
<p class="payment_module">
	<a href="javascript:void(0)" onclick="$('#paypal_payment_form').submit();" id="paypal_process_payment" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
		<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/img/logos/express_checkout_mobile/CO_<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
_orange_295x43.png" />
		<?php }else{ ?>
			<?php if (isset($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'])&&$_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_integral']->value){?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], 'htmlall', 'UTF-8');?>
" height="48px" />
			<?php }else{ ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], 'htmlall', 'UTF-8');?>
" />
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'];?>

		<?php }?>
		
	</a>
</p>

<?php }?>

<form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post">
	<input type="hidden" name="express_checkout" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_payment_type']->value, 'htmlall', 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_current_page']->value, 'htmlall', 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value, 'htmlall', 'UTF-8');?>
" />
</form><?php }} ?>