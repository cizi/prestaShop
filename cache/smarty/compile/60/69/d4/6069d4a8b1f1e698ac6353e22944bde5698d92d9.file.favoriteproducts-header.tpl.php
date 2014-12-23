<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:08:42
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1218152832547db9dab73f97-78342882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6069d4a8b1f1e698ac6353e22944bde5698d92d9' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1417524495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1218152832547db9dab73f97-78342882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db9dac55226_91862641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db9dac55226_91862641')) {function content_547db9dac55226_91862641($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false));?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>