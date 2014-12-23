<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:54
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default-bootstrap/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1206245995489545ec5c239-97038055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7a995ef3b9eda62320bc54a23903275cc80c896' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default-bootstrap/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1418286026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206245995489545ec5c239-97038055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5489545ec6cf66_92962505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489545ec6cf66_92962505')) {function content_5489545ec6cf66_92962505($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
