<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:53
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3024525525489545d6443e1-19950497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f600cc7058184aef402f838a6f15b35081c8c740' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment_return.tpl',
      1 => 1418286014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3024525525489545d6443e1-19950497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5489545d6c44d1_41280795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489545d6c44d1_41280795')) {function content_5489545d6c44d1_41280795($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok') {?>
	<div class="box">
		<p class="cheque-indent">
			<strong class="dark"><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'bankwire'),$_smarty_tpl);?>
</strong>
		</p>
		<?php echo smartyTranslate(array('s'=>'Please send us a bank wire with','mod'=>'bankwire'),$_smarty_tpl);?>

		<br />- <?php echo smartyTranslate(array('s'=>'Amount','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="price"> <strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br />- <?php echo smartyTranslate(array('s'=>'Name of account owner','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireOwner']->value) {?><?php echo $_smarty_tpl->tpl_vars['bankwireOwner']->value;?>
<?php } else { ?>___________<?php }?></strong>
		<br />- <?php echo smartyTranslate(array('s'=>'Include these details','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireDetails']->value) {?><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
<?php } else { ?>___________<?php }?></strong>
		<br />- <?php echo smartyTranslate(array('s'=>'Bank name','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireAddress']->value) {?><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
<?php } else { ?>___________<?php }?></strong>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)) {?>
			<br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d in the subject of your bank wire','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<?php } else { ?>
			<br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<?php }?>		<br /><?php echo smartyTranslate(array('s'=>'An email has been sent with this information.','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /> <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive payment.','mod'=>'bankwire'),$_smarty_tpl);?>
</strong>
		<br /><?php echo smartyTranslate(array('s'=>'If you have questions, comments or concerns, please contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'expert customer support team. ','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</div>
<?php } else { ?>
	<p class="alert alert-warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'expert customer support team. ','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>
