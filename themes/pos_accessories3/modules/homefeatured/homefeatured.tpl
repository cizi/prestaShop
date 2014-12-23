{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="block products_block clearfix">
	<div class="featured-products-title">
		<h2 class="title">{l s='Featured products' mod='homefeatured'}</h2>	
	</div>
	{if isset($products) AND $products}
		<div class="block_content">
			{assign var='liHeight' value=250}
			{assign var='nbItemsPerLine' value=3}
			{assign var='nbLi' value=$products|@count}
			{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
			{math equation="nbLines*liHeight" nbLines=$nbLines|ceil liHeight=$liHeight assign=ulHeight}
			<ul style="height:{$ulHeight|escape:'html'}px;" class="row">
			{foreach from=$products item=product name=homeFeaturedProducts}
				{math equation="(total%perLine)" total=$smarty.foreach.homeFeaturedProducts.total perLine=$nbItemsPerLine assign=totModulo}
				{if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
				<li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1} {/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - $totModulo)}last_line{/if} col-sm-6 col-md-4 col-sms-12 col-smb-12">
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
						</div> <!-- content_price -->
					{/if}
					{hook h='displayProductListReviews' product=$product}
				</div> <!-- review-price -->

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
		</div>
	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
</div>
<!-- /MODULE Home Featured Products -->
