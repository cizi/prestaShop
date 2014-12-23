<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 19:22:54
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/suppliers/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1931899397547f54fe004ff5-32782074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7fdcda9da4f7a1a0042c9db6a6b866c4fd673d' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/suppliers/helpers/view/view.tpl',
      1 => 1417523846,
      2 => 'file',
    ),
    'de26a75cd9d682b4f442c197a4c68b9749237af3' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/helpers/view/view.tpl',
      1 => 1417523865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931899397547f54fe004ff5-32782074',
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
  'unifunc' => 'content_547f54fe1cfdb3_99608225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f54fe1cfdb3_99608225')) {function content_547f54fe1cfdb3_99608225($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<div class="leadin"></div>



<h2><?php echo $_smarty_tpl->tpl_vars['supplier']->value->name;?>
</h2>

<h3><?php echo smartyTranslate(array('s'=>'Number of products:'),$_smarty_tpl);?>
 <?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
</h3>
<table border="0" cellpadding="0" cellspacing="0" class="table" width="100%">
	<tr>
		<th><?php echo smartyTranslate(array('s'=>'Product name'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Attribute name'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Supplier Reference'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Wholesale price'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Reference'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'EAN13'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'UPC'),$_smarty_tpl);?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['stock_management']->value&&$_smarty_tpl->tpl_vars['shopContext']->value!=Shop::CONTEXT_ALL){?><th class="right"><?php echo smartyTranslate(array('s'=>'Available Quantity'),$_smarty_tpl);?>
</th><?php }?>
	</tr>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<?php if (!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()){?>
		<tr>
			<td><a href="?tab=AdminProducts&id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
&updateproduct&token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminProducts'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></td>
			<td><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
</td>
			<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->product_supplier_reference)){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_supplier_reference;?>
<?php }?></td>
			<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->product_supplier_price_te)){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_supplier_price_te;?>
<?php }?></td>
			<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->reference)){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
<?php }?></td>
			<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->ean13)){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value->ean13;?>
<?php }?></td>
			<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->upc)){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value->upc;?>
<?php }?></td>
			<?php if ($_smarty_tpl->tpl_vars['stock_management']->value&&$_smarty_tpl->tpl_vars['shopContext']->value!=Shop::CONTEXT_ALL){?><td class="right" width="150"><?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
</td><?php }?>
		</tr>
	<?php }else{ ?>
		<?php  $_smarty_tpl->tpl_vars['product_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_product_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->combination; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_attribute']->key => $_smarty_tpl->tpl_vars['product_attribute']->value){
$_smarty_tpl->tpl_vars['product_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product_attribute']->value = $_smarty_tpl->tpl_vars['product_attribute']->key;
?>
			<tr <?php if ($_smarty_tpl->tpl_vars['id_product_attribute']->value%2){?>class="alt_row"<?php }?> >
				<td><a href="?tab=AdminProducts&id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
&updateproduct&token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminProducts'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></td>
				<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['attributes'])){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['attributes'];?>
<?php }?></td>
				<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_reference'])){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_reference'];?>
<?php }?></td>
				<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_price_te'])){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_price_te'];?>
<?php }?></td>
				<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['reference'])){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['reference'];?>
<?php }?></td>
				<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['ean13'])){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['ean13'];?>
<?php }?></td>
				<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['upc'])){?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['upc'];?>
<?php }?></td>
				<?php if ($_smarty_tpl->tpl_vars['stock_management']->value&&$_smarty_tpl->tpl_vars['shopContext']->value!=Shop::CONTEXT_ALL){?><td class="right"><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['quantity'];?>
</td><?php }?>
			</tr>
		<?php } ?>
	<?php }?>
<?php } ?>
</table>


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