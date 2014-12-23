<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 14:02:14
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1281290110548ae7561b2387-41096479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d8da250eea9a9bc8bb0a59c34acc943babc2fa' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1418285206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1281290110548ae7561b2387-41096479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_state' => 0,
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548ae7561ee6e2_12411374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ae7561ee6e2_12411374')) {function content_548ae7561ee6e2_12411374($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&(($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->invoice)||$_smarty_tpl->tpl_vars['order']->value->invoice_number)) {?>
		<a class="btn btn-default" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ((($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->delivery)||$_smarty_tpl->tpl_vars['order']->value->delivery_number)) {?>
		<a class="btn btn-default"  target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span><?php }} ?>
