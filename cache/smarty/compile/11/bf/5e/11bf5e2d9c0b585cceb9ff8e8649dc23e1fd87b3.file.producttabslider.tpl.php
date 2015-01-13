<?php /* Smarty version Smarty-3.1.19, created on 2015-01-12 10:50:21
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/postabproductslider/producttabslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32893012754b398dd7146d6-19324767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11bf5e2d9c0b585cceb9ff8e8649dc23e1fd87b3' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/postabproductslider/producttabslider.tpl',
      1 => 1421055142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32893012754b398dd7146d6-19324767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_effect' => 0,
    'page_name' => 0,
    'productTabslider' => 0,
    'productTab' => 0,
    'count' => 0,
    'product' => 0,
    'link' => 0,
    'comparator_max_item' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'quick_view' => 0,
    'compared_products' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b398dda0a137_07242119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b398dda0a137_07242119')) {function content_54b398dda0a137_07242119($_smarty_tpl) {?>
<script type="text/javascript">

$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		$(".tab_content").removeClass("animate1 <?php echo $_smarty_tpl->tpl_vars['tab_effect']->value;?>
");
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab) .addClass("animate1 <?php echo $_smarty_tpl->tpl_vars['tab_effect']->value;?>
");
		$("#"+activeTab).fadeIn(); 
	});
});

</script>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>	
<div class="product-tabs-slider products-slide-owl list-products">
	<div class ='cate_title'>
		<h2><?php echo smartyTranslate(array('s'=>'Our Favourites','mod'=>'postabproductslider'),$_smarty_tpl);?>
</h2>
	</div>
	<ul class="tabs"> 
	<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['productTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTabslider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productTab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productTab']->iteration=0;
 $_smarty_tpl->tpl_vars['productTab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productTab']->key => $_smarty_tpl->tpl_vars['productTab']->value) {
$_smarty_tpl->tpl_vars['productTab']->_loop = true;
 $_smarty_tpl->tpl_vars['productTab']->iteration++;
 $_smarty_tpl->tpl_vars['productTab']->index++;
 $_smarty_tpl->tpl_vars['productTab']->first = $_smarty_tpl->tpl_vars['productTab']->index === 0;
 $_smarty_tpl->tpl_vars['productTab']->last = $_smarty_tpl->tpl_vars['productTab']->iteration === $_smarty_tpl->tpl_vars['productTab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['first'] = $_smarty_tpl->tpl_vars['productTab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['last'] = $_smarty_tpl->tpl_vars['productTab']->last;
?>
		<li class="tab_<?php echo $_smarty_tpl->tpl_vars['productTab']->value['id'];?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabProduct']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabProduct']['last']) {?>last_item<?php } else { ?><?php }?> <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?> active <?php }?>" rel="tab_<?php echo $_smarty_tpl->tpl_vars['productTab']->value['id'];?>
">
			<span class="tab-categories tab_<?php echo $_smarty_tpl->tpl_vars['productTab']->value['id'];?>
">
				<span><?php echo $_smarty_tpl->tpl_vars['productTab']->value['name'];?>
</span>
			</span>
		</li>
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
	<?php } ?>	
	</ul>

	<div class="tab_container"> 
	<?php  $_smarty_tpl->tpl_vars['productTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTabslider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productTab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productTab']->iteration=0;
 $_smarty_tpl->tpl_vars['productTab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productTab']->key => $_smarty_tpl->tpl_vars['productTab']->value) {
$_smarty_tpl->tpl_vars['productTab']->_loop = true;
 $_smarty_tpl->tpl_vars['productTab']->iteration++;
 $_smarty_tpl->tpl_vars['productTab']->index++;
 $_smarty_tpl->tpl_vars['productTab']->first = $_smarty_tpl->tpl_vars['productTab']->index === 0;
 $_smarty_tpl->tpl_vars['productTab']->last = $_smarty_tpl->tpl_vars['productTab']->iteration === $_smarty_tpl->tpl_vars['productTab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['first'] = $_smarty_tpl->tpl_vars['productTab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['last'] = $_smarty_tpl->tpl_vars['productTab']->last;
?>
		<div id="tab_<?php echo $_smarty_tpl->tpl_vars['productTab']->value['id'];?>
" class="tab_content">
			<div class="productTabContent product_list productContent">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTab']->value['productInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<div class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['last']) {?>last_item<?php } else { ?>of-tablet-line<?php }?> item-inner">
					<div class="wrap-item">
						<div class="item">
											<div class="item-inner">
												<div class="item-inner-box">
													
														<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']) {?><span class="sale"><?php echo smartyTranslate(array('s'=>'Sale','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span><?php }?>
														
														<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?><span class="new"><?php echo smartyTranslate(array('s'=>'New','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span><?php }?>
														

													<div class="item-inner-top">
														<a class ="bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_tabcategory product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
														<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
														</a>
														<ul class="add-to-links">
															<li class="first">
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

															</li>
															<?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
															<li class="last">
																<a class="add_to_compare fa-compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="Add to Compare">
																	<i class="fa fa-retweet"></i>
																	<span><?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span></a>
															</li>
															<?php }?>			
														</ul><!-- add-to-links -->
													</div><!-- item-inner-top -->
													
													<h2 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h2>

													<!-- Review -->
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

													<!--- -->

													<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
													<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
														<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']) {?>
																<span class="old-price product-price">
																<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

																</span> 
																
														<?php }?>
														
														<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
															<span itemprop="price" class="price product-price">
																<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
															</span>
															<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
														<?php }?>
														
														
													</div> <!-- content_price-->
												<?php }?>

												</div> <!-- item-inner-box -->

												<div class="actions">
													<div class="actions-inner">
													<div class="button-container">
													<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
													<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
														<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
															<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp5=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp5."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
																<i class="fa fa-shopping-cart"></i>
																<span><?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span>
															</a>
														<?php } else { ?>
															<a class="ajax_add_to_cart_button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$product.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
																<i class="fa fa-shopping-cart"></i>
																<span><?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span>
															</a>
														<?php }?>						
													<?php } else { ?>
														<span class="button ajax_add_to_cart_button btn btn-default disabled">
															<i class="fa fa-shopping-cart"></i>
															<span><?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span>
														</span>
													<?php }?>
												<?php }?>
													</div> <!-- button cart -->
													<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
														<a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="Quick View" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
															<i class="fa fa-search-plus"></i>
															<span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'postabproductslider'),$_smarty_tpl);?>
</span>
															</a>
													<?php }?>
													</div>	
												</div> <!-- actions -->
											</div> <!-- item-inner -->
											
						</div> <!-- item -->
					</div>	
				</div>
			<?php } ?>
			</div>
				
	</div>

	<?php } ?>	
	<a class="btn-slider prev prevproductTab"><i class="icon-angle-left"></i></a>
	<a class="btn-slider next nextproductTab"><i class="icon-angle-right"></i></a>
</div> <!-- .tab_container -->
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<?php }?>
<script type="text/javascript"> 
    $(document).ready(function() {
		 
		var owl = $(".productTabContent");
		 
		owl.owlCarousel({
		items :<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
,
		itemsDesktop : [1200,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_desktop'];?>
],
		itemsDesktopSmall : [768,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_desktop_Small'];?>
], 
		itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_tablet'];?>
], 
		itemsMobile : [480,<?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['items_mobile'];?>
]
		});
		 
		// Custom Navigation Events
		$(".nextproductTab").click(function(){
		owl.trigger('owl.next');
		})
		$(".prevproductTab").click(function(){
		owl.trigger('owl.prev');
		})     
    });
    $(document).ready(function(){
    $("item-inner").hover(function(event){
        $('#navigation li').removeClass();
        $(this).parent().addClass('active');
        event.preventDefault();
    });
});
</script>
<?php }} ?>
