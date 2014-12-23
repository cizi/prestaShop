<div class="pos-feature-product">
	<div class="pos-feature-product-title"><h2>{l s='Featured Products' mod='posfeatureproduct'}</h2></div>
	{if count($products)>1}
		<ul class="bxslider">
			{foreach from=$products item=product name=posFeatureProducts}
				<li class=" feature-productslider-item ajax_block_product {if $smarty.foreach.posFeatureProducts.first}first_item{elseif $smarty.foreach.posFeatureProducts.last}last_item{else}item{/if}">
					<div class="item-inner">
						<div class="box-item">
							<a href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
							{if isset($product.new) && $product.specific_prices} 
							{if $product.specific_prices}<span class="sale">{l s='Sale'}</span>{/if}
							{else}
							{if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
							{/if}
							</a>
							<h2 class="product-name"><a href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h2>
							<div class="review-price">
								{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
									<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
										<div class="price-box">
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction}
											<span class="old-price product-price">
												{displayWtPrice p=$product.price_without_reduction}
											</span>
												{if $product.specific_prices.reduction_type == 'percentage'}
													<!-- <span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span> -->
												{/if}
										{/if}
										{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
											<span itemprop="price" class="price product-price">
												{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
											</span>
											<meta itemprop="priceCurrency" content="{$priceDisplay}" />
														
										{/if}
										</div>			
									</div> <!-- content_price-->
								{/if}
									{hook h='displayProductListReviews' product=$product}
							</div><!-- review-price-->
					
					<div class="actions">
							<div class="actions-inner">
								<div class="button-container">
												{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
													{if ($product.allow_oosp || $product.quantity > 0)}
														{if isset($static_token)}
															<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
																<span>{l s='Add to cart' mod='posfeatureproduct'}</span>
															</a>
														{else}
															<a class="ajax_add_to_cart_button" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
																<span>{l s='Add to cart' mod='posfeatureproduct'}</span>
															</a>
														{/if}						
													{else}
														<span class="button ajax_add_to_cart_button btn btn-default disabled">
															<span>{l s='Add to cart' mod='posfeatureproduct'}</span>
														</span>
													{/if}
												{/if}
								</div>
								<ul class="add-to-links">
									<li class="first">
									{if isset($quick_view) && $quick_view}
									<a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}" title="Quick View" rel="{$product.link|escape:'html':'UTF-8'}">
									<span>{l s='Quick view' mod='posfeatureproduct'}</span>
									</a>
									{/if}	
									</li>
									<li class="last">
									{hook h='displayProductListFunctionalButtons' product=$product}
									</li>
								</ul>
							</div>
						</div><!-- actions -->

						</div><!-- box-inner -->
					</div> <!-- item-inner -->			
				</li>
			{/foreach}
		</ul>
	{else}
	<p class="warning">{l s='No products for this new products.' mod='posfeatureproduct'}</p>
	{/if}
	<script type="text/javascript">
		  $('.pos-feature-product .bxslider').bxSlider({
            auto: {if $slideOptions.auto_slide != 1}{$slideOptions.auto_slide}{else}1{/if},
            slideWidth:{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if},
			slideMargin: 6,
			infiniteLoop:false,
			minSlides: {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}3{/if},
			maxSlides: {if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if},
			speed:  {if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if},
			pause: {if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if},
			controls: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
            pager: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
		});
	</script>
		 
</div>
