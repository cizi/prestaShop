<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:42:03
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/pdf/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433457795547dc1abde2a12-79599894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8e88675c9fa180c478121b0da0659c763d90e2' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/pdf/footer.tpl',
      1 => 1417524601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433457795547dc1abde2a12-79599894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'available_in_your_account' => 0,
    'shop_address' => 0,
    'shop_phone' => 0,
    'shop_fax' => 0,
    'shop_details' => 0,
    'free_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547dc1abe3f890_64184644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dc1abe3f890_64184644')) {function content_547dc1abe3f890_64184644($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?>
<table>
	<tr>
		<td style="text-align: center; font-size: 6pt; color: #444">
            <?php if ($_smarty_tpl->tpl_vars['available_in_your_account']->value){?>
                <?php echo smartyTranslate(array('s'=>'An electronic version of this invoice is available in your account. To access it, log in to our website using your e-mail address and password (which you created when placing your first order).','pdf'=>'true'),$_smarty_tpl);?>
             
    			<br />
            <?php }?>
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_address']->value, 'htmlall', 'UTF-8');?>
<br />

			<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)||!empty($_smarty_tpl->tpl_vars['shop_fax']->value)){?>
				<?php echo smartyTranslate(array('s'=>'For more assistance, contact Support:','pdf'=>'true'),$_smarty_tpl);?>
<br />
				<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)){?>
					Tel: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_phone']->value, 'htmlall', 'UTF-8');?>

				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['shop_fax']->value)){?>
					Fax: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_fax']->value, 'htmlall', 'UTF-8');?>

				<?php }?>
				<br />
			<?php }?>
            
            <?php if (isset($_smarty_tpl->tpl_vars['shop_details']->value)){?>
                <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_details']->value, 'htmlall', 'UTF-8');?>
<br />
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['free_text']->value)){?>
    			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['free_text']->value, 'htmlall', 'UTF-8');?>
<br />
            <?php }?>
		</td>
	</tr>
</table>

<?php }} ?>