{if $page_name == "product"}
<div class="pos-special-product">
	<div class="pos-special-product-title"><h2>{l s='Special Products' mod='posspecialproduct'}</h2></div>
		<ul class="bxslider" >
			{foreach from=$products item=product name=products}
                            <li class="ajax_block_product {if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if} {if $smarty.foreach.products.index % 2}alternate_item{/if} clearfix">
                    <div class="box-item">
                        <a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_image" title="{$product.name|escape:'htmlall':'UTF-8'}">
                            <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.legend|escape:'htmlall':'UTF-8'}"/>
                        </a>
                        <h2 class="product-name">{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}<a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h2>
                        <div class="review-price">
                            {if $slideOptions.show_price ==1 }  
                                            {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
                                            <div class="content_price">
                                            {if $product.specific_prices}
                                                {assign var='specific_prices' value=$product.specific_prices}
                                            {if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
                                            {/if}
                                            {/if}
                                            <span class="old-price">{if !$priceDisplay}{displayWtPrice p=$product.price_without_reduction}{else}{displayWtPrice  p={Tools::ps_round($product['price_without_reduction'], 2)} }{/if}</span>
                                            {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}<span class="special-price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span> {/if} 
                                            
                                            </div>
                                            {/if}
                                            {/if}
                                           
                        </div> <!-- review-price-->
                    </div>
            </li>
	       {/foreach}
		</ul>
</div>
		<script type="text/javascript">
		  $('.pos-special-product .bxslider').bxSlider({
            auto: {if $slideOptions.auto_slide != 1}{$slideOptions.auto_slide}{else}1{/if},
            slideWidth:{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if},
			slideMargin: 6,
            infiniteLoop:false,
			minSlides: {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}1{/if},
			maxSlides: {if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if},
			speed:  {if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if},
			pause: {if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if},
			controls: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
            pager: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
		});
	</script>
{/if}    