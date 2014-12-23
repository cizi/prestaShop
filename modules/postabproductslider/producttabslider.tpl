
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
	<ul class="tabs"> 
	{$count=0}
	{foreach from=$productTabslider item=productTab name=posTabProduct}
		<li class="{if $smarty.foreach.posTabProduct.first}first_item{elseif $smarty.foreach.posTabProduct.last}last_item{else}{/if} {if $count==0} active {/if}" rel="tab_{$productTab.id}"  >
			{$productTab.name}
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
				<div class="item">
					<a class = "bigpic_{$product.id_product}_tabproduct product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}">
						<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
						{if isset($product.new) && $product.specific_prices} 
							{if $product.specific_prices}<span class="sale">{l s='Sale' mod='postabproduct'}</span>{/if}
						{else}
						{if isset($product.new) && $product.new == 1}<span class="new">{l s='New' mod='postabproduct'} </span>{/if}
						{if $product.specific_prices}<span class="sale">{l s='Sale' mod='postabproduct'}</span>{/if}
						{/if}								
					</a>
					<h5 class="product-name"><a class="product-name" href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5>
					{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
						<div class="price-box">
							<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
							<meta itemprop="priceCurrency" content="{$priceDisplay}" />
							{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
								<span class="old-price product-price">
									{displayWtPrice p=$product.price_without_reduction}
								</span>
							{/if}
						</div>
					{/if}					
					<div class="actions">
						<ul class="add-to-links">
							{if isset($quick_view) && $quick_view}
							<li><a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}" rel="{$product.link|escape:'html':'UTF-8'}">
								<span>{l s='Quick view'}</span>
								</a></li>
							{/if}						
							<li>
								<a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1,'tabproduct'); return false;" class="add-wishlist wishlist_button" href="#">{l s='Add to Wishlist' mod='postabproduct'}</a>
							</li>
						</ul>
									{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
										{if ($product.allow_oosp || $product.quantity > 0)}
											{if isset($static_token)}
												<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
													{l s='Add to cart'}
												</a>
											{else}
												<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
													{l s='Add to cart'}
												</a>
											{/if}						
										{else}
											<span class="button ajax_add_to_cart_button btn btn-default disabled">
												{l s='Add to cart'}
											</span>
										{/if}
									{/if}
					</div>
					<div class="pos_bxslider">
						{hook h ='imgmore' product=$product }
					</div>
				</div>
				</div>
			
			{/foreach}
			</div>
				
	</div>

	{/foreach}	
	<a class="prevproductTab"><i class="icon-angle-left"></i></a>
	<a class="nextproductTab"><i class="icon-angle-right"></i></a>
</div> <!-- .tab_container -->
</div>
{/if}
<script type="text/javascript"> 
    $(document).ready(function() {
		 
		var owl = $(".productTabContent");
		 
		owl.owlCarousel({
		items :{$slideOptions.min_item},
		itemsDesktop : [1200,{$slideOptions.items_desktop}],
		itemsDesktopSmall : [768,{$slideOptions.items_desktop_Small}], 
		itemsTablet: [600,{$slideOptions.items_tablet}], 
		itemsMobile : [360,{$slideOptions.items_mobile}]
		});
		 
		// Custom Navigation Events
		$(".nextproductTab").click(function(){
		owl.trigger('owl.next');
		})
		$(".prevproductTab").click(function(){
		owl.trigger('owl.prev');
		})     
    });

</script>
<style type='text/css'>
	.slider_item {
		width:{$slideOptions.p_width}px !important; 
	  }
	@-moz-document url-prefix() { 
	  .slider_item {
		width:{$slideOptions.p_width}px !important; 
	  }
	}
</style>