{*
* 2007-2013 PrestaShop
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
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if count($categoryProducts) > 0 && $categoryProducts !== false}
<div class="clearfix posproductcategory">
    <div class="posproductcategory-title">
        <h2 class="posproductcategory_h2">{l s='other products' mod='posproductcates'}</h2>
    </div>
	<div id="{if count($categoryProducts) > 5}posproductcategory{else}posproductcategory_noscroll{/if}">
	{if count($categoryProducts) > 5}<!-- <a id="posproductcategory_scroll_left" title="{l s='Previous' mod='posproductcates'}" href="javascript:{ldelim}{rdelim}">{l s='Previous' mod='posproductcates'}</a> -->{/if}
	<div id="posproductcategory_list">
                 	<ul class="bxslider">	
                            {foreach from=$categoryProducts item='categoryProduct' name=categoryProduct}
                                   <li>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-inner-top">
                                                    <a class ="bigpic_{$categoryProduct.id_product}_tabcategory product_image" href="{$categoryProduct.link|escape:'html'}" title="{$categoryProduct.name|escape:html:'UTF-8'}">
                                                    <img src="{$link->getImageLink($categoryProduct.link_rewrite, $categoryProduct.id_image, 'home_default')|escape:'html'}" alt="{$categoryProduct.name|escape:html:'UTF-8'}" />
                                                    </a>
                                                    <h2 class="product-name"><a href="{$categoryProduct.link|escape:'html'}" title="{$categoryProduct.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$categoryProduct.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h2>

                                                    <!-- Review -->
                                                    {hook h='displayProductListReviews' product=$categoryProduct}
                                                    <!--- -->

                                                    {if (!$PS_CATALOG_MODE AND ((isset($categoryProduct.show_price) && $categoryProduct.show_price) || (isset($categoryProduct.available_for_order) && $categoryProduct.available_for_order)))}
                                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                        {if isset($categoryProduct.show_price) && $categoryProduct.show_price && !isset($restricted_country_mode)}
                                                            <span itemprop="price" class="price product-price">
                                                                {if !$priceDisplay}{convertPrice price=$categoryProduct.price}{else}{convertPrice price=$categoryProduct.price_tax_exc}{/if}
                                                            </span>
                                                            <meta itemprop="priceCurrency" content="{$priceDisplay}" />
                                                        {/if}
                                                        
                                                        {if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices && isset($categoryProduct.specific_prices.reduction) && $categoryProduct.specific_prices.reduction}
                                                                <span class="old-price product-price">
                                                                {displayWtPrice p=$categoryProduct.price_without_reduction}
                                                                </span> 
                                                                
                                                        {/if}
                                                        
                                                    </div> <!-- content_price-->
                                                {/if}

                                                </div> <!-- item-inner-top -->

                                                <div class="des-inbox">
                                                    <h2 class="product-name"><a href="{$categoryProduct.link|escape:'html'}" title="{$categoryProduct.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$categoryProduct.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h2>
                                                    <!-- Review -->
                                                    {hook h='displayProductListReviews' product=$categoryProduct}
                                                    <!--- -->
                                                    {if (!$PS_CATALOG_MODE AND ((isset($categoryProduct.show_price) && $categoryProduct.show_price) || (isset($categoryProduct.available_for_order) && $categoryProduct.available_for_order)))}
                                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                        {if isset($categoryProduct.show_price) && $categoryProduct.show_price && !isset($restricted_country_mode)}
                                                            <span itemprop="price" class="price product-price">
                                                                {if !$priceDisplay}{convertPrice price=$categoryProduct.price}{else}{convertPrice price=$categoryProduct.price_tax_exc}{/if}
                                                            </span>
                                                            <meta itemprop="priceCurrency" content="{$priceDisplay}" />
                                                        {/if}

                                                        {if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices && isset($categoryProduct.specific_prices.reduction) && $categoryProduct.specific_prices.reduction}
                                                                <span class="old-price product-price">
                                                                {displayWtPrice p=$categoryProduct.price_without_reduction}
                                                                </span> 
                                                                <!-- {if $categoryProduct.specific_prices.reduction_type == 'percentage'}
                                                                 <span class="price-percent-reduction">-{$categoryProduct.specific_prices.reduction * 100}%</span> 
                                                                {/if} -->
                                                        {/if}
                                                        
                                                    </div> <!-- content_price-->
                                                    {/if}

                                                </div><!-- des-inbox -->
                                                

                                            </div> <!-- item-inner -->
                                        </div><!--item-->
                                    </li>
                            {/foreach}
                    </ul>
            </div>
	</div>
	
</div>
{/if}
<script type="text/javascript">
	  $('#posproductcategory_list .bxslider').bxSlider({
		auto: {if $slideOptions.auto_slide != 1}{$slideOptions.auto_slide}{else}1{/if},
		slideWidth:{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if},
		slideMargin: 30,
        infiniteLoop:false,
		minSlides: {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}3{/if},
		maxSlides: {if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if},
		speed:  {if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if},
		pause: {if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if},
		controls: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
		pager: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
	});
</script>