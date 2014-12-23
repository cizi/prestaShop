<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:15:58
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300450600549068ce0b96b9-04895135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961ae3f649342d69d5f938570e5dedf719f52857' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300450600549068ce0b96b9-04895135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549068ce0d1547_35955024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549068ce0d1547_35955024')) {function content_549068ce0d1547_35955024($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<i class="fa fa-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</div><?php }} ?>
