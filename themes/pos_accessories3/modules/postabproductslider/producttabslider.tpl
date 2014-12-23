
<script type="text/javascript">

$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		$(".tab_content").removeClass("animate1 {$tab_effect}");
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab) .addClass("animate1 {$tab_effect}");
		$("#"+activeTab).fadeIn(); 
	});
});

</script>
{if $page_name == 'index'}	
<div class="product-tabs-slider products-slide-owl list-products">
	<div class ='cate_title'>
		<h2>{l s='Our Favourites' mod='postabproductslider'}</h2>
	</div>
	<ul class="tabs"> 
	{$count=0}
	{foreach from=$productTabslider item=productTab name=posTabProduct}
		<li class="tab_{$productTab.id} {if $smarty.foreach.posTabProduct.first}first_item{elseif $smarty.foreach.posTabProduct.last}last_item{else}{/if} {if $count==0} active {/if}" rel="tab_{$productTab.id}">
			<span class="tab-categories tab_{$productTab.id}">
				<span>{$productTab.name}</span>
			</span>
		</li>
			{$count= $count+1}
	{/foreach}	
	</ul>

	<div class="tab_container"> 
	{foreach from=$productTabslider item=productTab name=posTabProduct}
		<div id="tab_{$productTab.id}" class="tab_content">
			<div class="productTabContent product_list productContent">
			{foreach from=$productTab.productInfo item=product name=posFeatureProducts}
				<div class="{if $smarty.foreach.posFeatureProducts.first}first_item{elseif $smarty.foreach.posFeatureProducts.last}last_item{else}of-tablet-line{/if} item-inner">
					<div class="wrap-item">
						<div class="item">
											<div class="item-inner">
												<div class="item-inner-box">
													
														{if $product.specific_prices}<span class="sale">{l s='Sale' mod='postabproductslider'}</span>{/if}
														
														{if isset($product.new) && $product.new == 1}<span class="new">{l s='New' mod='postabproductslider'}</span>{/if}
														

													<div class="item-inner-top">
														<a class ="bigpic_{$product.id_product}_tabcategory product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}">
														<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
														</a>
														<ul class="add-to-links">
															<li class="first">
															{hook h='displayProductListFunctionalButtons' product=$product}
															</li>
															{if isset($comparator_max_item) && $comparator_max_item}
															<li class="last">
																<a class="add_to_compare fa-compare" href="{$product.link|escape:'html':'UTF-8'}" data-id-product="{$product.id_product}" title="Add to Compare">
																	<i class="fa fa-retweet"></i>
																	<span>{l s='Add to Compare' mod='postabproductslider'}</span></a>
															</li>
															{/if}			
														</ul><!-- add-to-links -->
													</div><!-- item-inner-top -->
													
													<h2 class="product-name"><a href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h2>

													<!-- Review -->
													{hook h='displayProductListReviews' product=$product}
													<!--- -->

													{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
													<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
														{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction}
																<span class="old-price product-price">
																{displayWtPrice p=$product.price_without_reduction}
																</span> 
																
														{/if}
														
														{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
															<span itemprop="price" class="price product-price">
																{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
															</span>
															<meta itemprop="priceCurrency" content="{$priceDisplay}" />
														{/if}
														
														
													</div> <!-- content_price-->
												{/if}

												</div> <!-- item-inner-box -->

												<div class="actions">
													<div class="actions-inner">
													<div class="button-container">
													{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
													{if ($product.allow_oosp || $product.quantity > 0)}
														{if isset($static_token)}
															<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
																<i class="fa fa-shopping-cart"></i>
																<span>{l s='Add to Cart' mod='postabproductslider'}</span>
															</a>
														{else}
															<a class="ajax_add_to_cart_button" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
																<i class="fa fa-shopping-cart"></i>
																<span>{l s='Add to Cart' mod='postabproductslider'}</span>
															</a>
														{/if}						
													{else}
														<span class="button ajax_add_to_cart_button btn btn-default disabled">
															<i class="fa fa-shopping-cart"></i>
															<span>{l s='Add to Cart' mod='postabproductslider'}</span>
														</span>
													{/if}
												{/if}
													</div> <!-- button cart -->
													{if isset($quick_view) && $quick_view}
														<a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}" title="Quick View" rel="{$product.link|escape:'html':'UTF-8'}">
															<i class="fa fa-search-plus"></i>
															<span>{l s='Quick view' mod='postabproductslider'}</span>
															</a>
													{/if}
													</div>	
												</div> <!-- actions -->
											</div> <!-- item-inner -->
											
						</div> <!-- item -->
					</div>	
				</div>
			{/foreach}
			</div>
				
	</div>

	{/foreach}	
	<a class="btn-slider prev prevproductTab"><i class="icon-angle-left"></i></a>
	<a class="btn-slider next nextproductTab"><i class="icon-angle-right"></i></a>
</div> <!-- .tab_container -->
</div>
{addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
		{addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
		{addJsDef comparator_max_item=$comparator_max_item}
		{addJsDef comparedProductsIds=$compared_products}
{/if}
<script type="text/javascript"> 
    $(document).ready(function() {
		 
		var owl = $(".productTabContent");
		 
		owl.owlCarousel({
		items :{$slideOptions.min_item},
		itemsDesktop : [1200,{$slideOptions.items_desktop}],
		itemsDesktopSmall : [768,{$slideOptions.items_desktop_Small}], 
		itemsTablet: [600,{$slideOptions.items_tablet}], 
		itemsMobile : [480,{$slideOptions.items_mobile}]
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
