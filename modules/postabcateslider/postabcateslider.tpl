<script type="text/javascript">

$(document).ready(function() {

	$(".tab_category").hide();
	$(".tab_category:first").show(); 

	$("ul.tab_cates li").click(function() {
		$("ul.tab_cates li").removeClass("active");
		$(this).addClass("active");
		$(".tab_category").hide();
		$(".tab_category").removeClass("animate1 {$tab_effect}");
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab) .addClass("animate1 {$tab_effect}");
		$("#"+activeTab).fadeIn(); 
	});
});

</script>

<div class="tab-category-container-slider">
	<div class="container">
		<div class="container-inner">
			<div class="tab-category">
<!-- 				{if $title}
					<div class ='cate_title'>
						<h2>{l s='New Arrivals' mod='postabcategory'}</h2>
					</div>
				{/if}
				<p class="des-tab">{l s='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua' mod='postabcategory'}</p>
				 -->
				<div class="tab_cates"> 
				{foreach from=$productCates item=productCate name=posTabCategory}
						<h2 class="title_cate" > {$productCate.name}</h2>
						<div class="block"> 
							<div  class="content"> 
									<div class="productTabCategorySlider_{$productCate.id} row">
											{foreach from=$productCate.product item=product name=posTabCategory}
												
												<div class="item">
													<div class="item-inner">
													<a class ="bigpic_{$product.id_product}_tabcategory product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}">
													<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
														{if isset($product.new) && $product.specific_prices} 
															{if $product.specific_prices}<span class="sale">{l s='Sale'}</span>{/if}
														{else}
														{if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
														{if $product.specific_prices}<span class="sale">{l s='Sale'}</span>{/if}
														{/if}								
													</a>
													<h5 class="product-name"><a href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5>
													{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<div class="price-box"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></div>{else}<div style="height:21px;"></div>{/if}
													<div class="actions">
														<div class="acctions-inner">
														{if ($product.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $product.available_for_order AND !isset($restricted_country_mode) AND $product.minimal_quantity == 1 AND $product.customizable != 2 AND !$PS_CATALOG_MODE}
															{if ($product.quantity > 0 OR $product.allow_oosp)}
															<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart')|escape:'html'}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='postabcategory'}">{l s='Add to cart' mod='postabcategory'}</a>
																{else}
																	<span class="exclusive">{l s='Add to cart' mod='postabcategory'}</span>
																{/if}
															{else}
															<div style="height:23px;"></div>
														{/if}
														<ul class="add-to-links">
															<li><a class="lnk_more" href="{$product.link|escape:'html'}" title="{l s='View Detail' mod='postabcategory'}">{l s='View Detail' mod='postabcategory'}</a></li>
															<li><a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1,'tabcategory'); return false;" class="add-wishlist wishlist_button" title="{l s='Add to Wishlist' mod='postabcategory'}" href="#">{l s='Add to Wishlist' mod='postabcategory'}</a></li>
															
															
														</ul>
													</div>
													</div>
													</div>
												</div>
											{/foreach}
									</div>
									<a class="prevtabcate_{$productCate.id}"><i class="icon-angle-left"></i></a>
									<a class="nexttabcate_{$productCate.id}"><i class="icon-angle-right"></i></a>		
								<script type="text/javascript"> 
									$(document).ready(function() {
									var owl = $(".productTabCategorySlider_{$productCate.id}");
									owl.owlCarousel({
									items : {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}4{/if},
									itemsDesktop : [1000,3],
									itemsDesktopSmall : [900,2], 
									itemsTablet: [600,2], 
									itemsMobile : [480,1],
									autoPlay : {if $slideOptions.show_arrow == 0}false {else}true{/if}
									});
									$(".nexttabcate_{$productCate.id}").click(function(){
									owl.trigger('owl.next');
									})
									$(".prevtabcate_{$productCate.id}").click(function(){
									owl.trigger('owl.prev');
									})  
									});
								</script>
							</div>
						</div> <!-- .tab_container -->
						
				{/foreach}	
				</div>
			
				
			</div>
		</div>
	</div>
</div>
