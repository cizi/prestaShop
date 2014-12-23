<?php /*%%SmartyHeaderCode:16032171085490683e3b4c93-13860309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ba5048115551f001cabedf3743949ae8e33ca1' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockcontact/nav.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16032171085490683e3b4c93-13860309',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549808872c6257_57026324',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549808872c6257_57026324')) {function content_549808872c6257_57026324($_smarty_tpl) {?>
<div class="header_links_wrap">
	<ul class="ul_header_links_wrap">
		<li class="li_header_links_wrap">
			<div class="my-account-header">
				<a href="#">My Account
					<i class="fa fa-chevron-down"></i>
				</a>
			</div>
			<ul id="header_links">
								<li class="first"><a class="link-myaccount" href="http://presta.solco.cz/cs/my-account" title="My account">My account</a></li>
				
				<li><a class="link-wishlist wishlist_block" href="http://presta.solco.cz/cs/module/blockwishlist/mywishlist" title="My wishlist">My wishlist</a></li>
				<li class="my-compare">
					<form method="post" action="http://presta.solco.cz/cs/products-comparison" class="compare-form">
						<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare" disabled="disabled">
							<span>My Compare (<strong class="total-compare-val">0</strong>)</span>
						</button>
						<input type="hidden" name="compare_product_count" class="compare_product_count" value="0" />
						<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
					</form>
				</li>
				<li><a class="link-mycart" href="http://presta.solco.cz/cs/order" title="My cart">My cart</a></li>
										<li class="last"><a class="link-login" href="http://presta.solco.cz/cs/my-account" title="Login"  rel="nofollow">Login</a></li>
								
			</ul>
		</li>
	</ul>
</div>	<?php }} ?>
