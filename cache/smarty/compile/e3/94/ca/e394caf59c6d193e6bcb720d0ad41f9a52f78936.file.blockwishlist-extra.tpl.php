<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:18:03
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6178363945490694b510b77-19187167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e394caf59c6d193e6bcb720d0ad41f9a52f78936' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6178363945490694b510b77-19187167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490694b5264f9_77428727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490694b5264f9_77428727')) {function content_5490694b5264f9_77428727($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i>
		<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
