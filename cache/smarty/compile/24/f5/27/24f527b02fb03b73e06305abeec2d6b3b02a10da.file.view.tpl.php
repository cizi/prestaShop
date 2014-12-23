<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 19:29:38
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/supply_orders/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085796949547f56924d5973-07733766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f527b02fb03b73e06305abeec2d6b3b02a10da' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/supply_orders/helpers/view/view.tpl',
      1 => 1417523848,
      2 => 'file',
    ),
    'de26a75cd9d682b4f442c197a4c68b9749237af3' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/helpers/view/view.tpl',
      1 => 1417523865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2085796949547f56924d5973-07733766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547f569263a652_60757114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f569263a652_60757114')) {function content_547f569263a652_60757114($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<div class="leadin"></div>


	<div style="margin-top: 20px;">
		<fieldset>
			<legend><?php if (isset($_smarty_tpl->tpl_vars['is_template']->value)&&$_smarty_tpl->tpl_vars['is_template']->value==1){?> <?php echo smartyTranslate(array('s'=>'Template'),$_smarty_tpl);?>
 <?php }?><?php echo smartyTranslate(array('s'=>'General information'),$_smarty_tpl);?>
</legend>
			<table style="width: 400px;" classe="table">
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Creation date:'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_creation_date']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Supplier:'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_supplier_name']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Last update:'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_last_update']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Delivery expected:'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_expected']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Warehouse:'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_warehouse']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Currency:'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_currency']->value->name;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Global discount rate:'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_discount_rate']->value;?>
 %</td>
				</tr>
			</table>
		</fieldset>
	</div>

	<div style="margin-top: 20px;">
		<fieldset>
			<legend><?php if (isset($_smarty_tpl->tpl_vars['is_template']->value)&&$_smarty_tpl->tpl_vars['is_template']->value==1){?> <?php echo smartyTranslate(array('s'=>'Template'),$_smarty_tpl);?>
 <?php }?><?php echo smartyTranslate(array('s'=>'Products:'),$_smarty_tpl);?>
</legend>
			<?php echo $_smarty_tpl->tpl_vars['supply_order_detail_content']->value;?>

		</fieldset>
	</div>

	<div style="margin-top: 20px;">
		<fieldset>
			<legend><?php if (isset($_smarty_tpl->tpl_vars['is_template']->value)&&$_smarty_tpl->tpl_vars['is_template']->value==1){?> <?php echo smartyTranslate(array('s'=>'Template'),$_smarty_tpl);?>
 <?php }?><?php echo smartyTranslate(array('s'=>'Summary'),$_smarty_tpl);?>
</legend>
			<table style="width: 400px;" classe="table">
				<tr>
					<th><?php echo smartyTranslate(array('s'=>'Designation'),$_smarty_tpl);?>
</th>
					<th width="100px"><?php echo smartyTranslate(array('s'=>'Value'),$_smarty_tpl);?>
</th>
				</tr>
				<tr>
					<td bgcolor="#000000"></td>
					<td bgcolor="#000000"></td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Total (tax excl.)'),$_smarty_tpl);?>
</td>
					<td align="right"><?php echo $_smarty_tpl->tpl_vars['supply_order_total_te']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Discount'),$_smarty_tpl);?>
</td>
					<td align="right"><?php echo $_smarty_tpl->tpl_vars['supply_order_discount_value_te']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Total with discount (tax excl.)'),$_smarty_tpl);?>
</td>
					<td align="right"><?php echo $_smarty_tpl->tpl_vars['supply_order_total_with_discount_te']->value;?>
</td>
				</tr>
				<tr>
					<td bgcolor="#000000"></td>
					<td bgcolor="#000000"></td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Total Tax'),$_smarty_tpl);?>
</td>
					<td align="right"><?php echo $_smarty_tpl->tpl_vars['supply_order_total_tax']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Total (tax incl.)'),$_smarty_tpl);?>
</td>
					<td align="right"><?php echo $_smarty_tpl->tpl_vars['supply_order_total_ti']->value;?>
</td>
				</tr>
				<tr>
					<td bgcolor="#000000"></td>
					<td bgcolor="#000000"></td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Total to pay.'),$_smarty_tpl);?>
</td>
					<td align="right"><?php echo $_smarty_tpl->tpl_vars['supply_order_total_ti']->value;?>
</td>
				</tr>
			</table>
		</fieldset>
	</div>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }elseif(isset($_GET['controller'])){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>