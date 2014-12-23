<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 13:57:01
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:833889573547db71d0c24e2-43821368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c224424ed0bdcc8085f0ed42d9588f4434d8af' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/product-compare.tpl',
      1 => 1417524609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '833889573547db71d0c24e2-43821368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'paginationId' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db71d103090_69467929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db71d103090_69467929')) {function content_547db71d103090_69467929($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<?php if (!isset($_smarty_tpl->tpl_vars['paginationId']->value)||$_smarty_tpl->tpl_vars['paginationId']->value==''){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
//]]>
</script>
<?php }?>
	<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" onsubmit="true">
		<p>
		<input type="submit" id="bt_compare<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)){?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="button bt_compare" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>