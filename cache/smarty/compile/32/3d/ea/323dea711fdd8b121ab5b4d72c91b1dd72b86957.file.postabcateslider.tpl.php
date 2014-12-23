<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:15:58
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/postabcateslider/postabcateslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70442243549068ce242da1-47876174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '323dea711fdd8b121ab5b4d72c91b1dd72b86957' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/postabcateslider/postabcateslider.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70442243549068ce242da1-47876174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_effect' => 0,
    'productCates' => 0,
    'productCate' => 0,
    'count' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549068ce54df67_45361417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549068ce54df67_45361417')) {function content_549068ce54df67_45361417($_smarty_tpl) {?><script type="text/javascript">

$(document).ready(function() {

	$(".tab_category").hide();
	$(".tab_category:first").show(); 

	$("ul.tab_cates_pre li").click(function() {
		$("ul.tab_cates_pre li").removeClass("active");
		$(this).addClass("active");
		$(".tab_category").hide();
		$(".tab_category").removeClass("animate1 <?php echo $_smarty_tpl->tpl_vars['tab_effect']->value;?>
");
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab) .addClass("animate1 <?php echo $_smarty_tpl->tpl_vars['tab_effect']->value;?>
");
		$("#"+activeTab).fadeIn(); 
	});
});

</script>

<div class="tab-category-container">
		<div class="container-inner">
			<div class="tab-category">
				<div class="title-tab-category">
					<div class ='cate_title'>
						<h2><?php echo smartyTranslate(array('s'=>'BEST OFFERS','mod'=>'postabcateslider'),$_smarty_tpl);?>
</h2>
					</div>
				
					<ul class="tab_cates_pre tab-category-title"> 
						<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['productCate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productCate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productCate']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productCate']->iteration=0;
 $_smarty_tpl->tpl_vars['productCate']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->key => $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->_loop = true;
 $_smarty_tpl->tpl_vars['productCate']->iteration++;
 $_smarty_tpl->tpl_vars['productCate']->index++;
 $_smarty_tpl->tpl_vars['productCate']->first = $_smarty_tpl->tpl_vars['productCate']->index === 0;
 $_smarty_tpl->tpl_vars['productCate']->last = $_smarty_tpl->tpl_vars['productCate']->iteration === $_smarty_tpl->tpl_vars['productCate']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['first'] = $_smarty_tpl->tpl_vars['productCate']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['last'] = $_smarty_tpl->tpl_vars['productCate']->last;
?>
							<li rel="tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['postabcateslider']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['postabcateslider']['last']) {?>last_item<?php } else { ?><?php }?> <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?> active <?php }?>"> 
								<span class="tab-categories tab<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
">
									<span><?php echo $_smarty_tpl->tpl_vars['productCate']->value['name'];?>
</span>
								</span>
							</li>
								<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
						<?php } ?>	
					</ul>
				</div> <!-- title-tab-category -->
			
				<div class="tab-container tabcategory-content"> 
				<?php  $_smarty_tpl->tpl_vars['productCate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productCate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productCate']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productCate']->iteration=0;
 $_smarty_tpl->tpl_vars['productCate']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->key => $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->_loop = true;
 $_smarty_tpl->tpl_vars['productCate']->iteration++;
 $_smarty_tpl->tpl_vars['productCate']->index++;
 $_smarty_tpl->tpl_vars['productCate']->first = $_smarty_tpl->tpl_vars['productCate']->index === 0;
 $_smarty_tpl->tpl_vars['productCate']->last = $_smarty_tpl->tpl_vars['productCate']->iteration === $_smarty_tpl->tpl_vars['productCate']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['first'] = $_smarty_tpl->tpl_vars['productCate']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['last'] = $_smarty_tpl->tpl_vars['productCate']->last;
?>
					 <div id="tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
" class="tab_category"> 
							<div class="productTabCategory">
									<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCate']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['postabcateslider']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['postabcateslider']['index']%2==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['postabcateslider']['first']) {?>
									      <div class="wrap-item">
									     <?php }?>
											<div class="item">
											<div class="item-inner">
												<div class="item-inner-top">
													<div class="row">
													<div class="box-image col-md-6 col-sm-6 col-sms-12">
														<a class ="bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_tabcategory product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
															<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
														</a>
													</div><!-- box-image -->
													<div class="box-content col-md-6 col-sm-6 col-sms-12">
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
													<div class="button-container">
													<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
													<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
														<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
															<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp2."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
																<i class="fa fa-shopping-cart"></i>
																<span><?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
															</a>
														<?php } else { ?>
															<a class="ajax_add_to_cart_button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$product.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
																<i class="fa fa-shopping-cart"></i>
																<span><?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
															</a>
														<?php }?>						
													<?php } else { ?>
														<span class="button ajax_add_to_cart_button btn btn-default disabled">
															<i class="fa fa-shopping-cart"></i>
															<span><?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'postabcateslider'),$_smarty_tpl);?>
</span>
														</span>
													<?php }?>
												<?php }?>
													</div> <!-- button cart -->
													</div><!-- box-content -->	
													</div>
												</div> <!-- item-inner-top -->					
											</div> <!-- item-inner -->

										</div>
										<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['postabcateslider']['iteration']%2==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['postabcateslider']['last']) {?>
										      </div>
										     <?php }?>
							
									<?php } ?>
								</div>
							</div>
				<?php } ?>	
				 </div> <!-- .tab_container -->
				 <a class="btn-slider prev prevtabcate1"><i class="icon-angle-left"></i></a>
				<a class="btn-slider next nexttabcate1"><i class="icon-angle-right"></i></a>
			</div>
		</div>
</div>
<script type="text/javascript"> 

    $(document).ready(function() {
    var owl = $(".productTabCategory");
    owl.owlCarousel({
    items : <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['min_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
<?php } else { ?>4<?php }?>,
    itemsDesktop : [1199,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // betweem 900px and 601px
    itemsTablet: [600,2], //2 items between 600 and 0
    itemsMobile : [480,1] ,// itemsMobile disabled - inherit from itemsTablet option
	autoPlay : <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow']==0) {?>false <?php } else { ?>true<?php }?>
    });
    // Custom Navigation Events
    $(".nexttabcate1").click(function(){
    owl.trigger('owl.next');
    })
    $(".prevtabcate1").click(function(){
    owl.trigger('owl.prev');
    })  
    });
</script><?php }} ?>
