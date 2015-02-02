<script type="text/javascript">

$(document).ready(function() {

	$(".tab_category").hide();
	$(".tab_category:first").show(); 

	$("ul.tab_cates_pre li").click(function() {
		$("ul.tab_cates_pre li").removeClass("active");
		$(this).addClass("active");
		$(".tab_category").hide();
		$(".tab_category").removeClass("animate1 {$tab_effect}");
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab) .addClass("animate1 {$tab_effect}");
		$("#"+activeTab).fadeIn(); 
	});
});

</script>

<div class="tab-category-container">
		<div class="container-inner">
			<div class="tab-category">
				<div class="title-tab-category">
					<div class ='cate_title'>
						<h2>{l s='BEST OFFERS' mod='postabcateslider'}</h2>
					</div>
				
					<ul class="tab_cates_pre tab-category-title"> 
						{$count=0}
						{foreach from=$productCates item=productCate name=postabcateslider}
							<li rel="tab_{$productCate.id}" class="{if $smarty.foreach.postabcateslider.first}first_item{elseif $smarty.foreach.postabcateslider.last}last_item{else}{/if} {if $count==0} active {/if}"> 
								<span class="tab-categories tab{$productCate.id}">
									<span>{$productCate.name}</span>
								</span>
							</li>
								{$count= $count+1}
						{/foreach}	
					</ul>
				</div> <!-- title-tab-category -->
			
				<div class="tab-container tabcategory-content"> 
				{foreach from=$productCates item=productCate name=postabcateslider}
					 <div id="tab_{$productCate.id}" class="tab_category"> 
							<div class="productTabCategory">
									{foreach from=$productCate.product item=product name=postabcateslider}
									{if $smarty.foreach.postabcateslider.index % 2 == 0 || $smarty.foreach.postabcateslider.first }
									      <div class="wrap-item">
									     {/if}
											<div class="item">
											<div class="item-inner">
												<div class="item-inner-top">
													<div class="row">
													<div class="box-image col-md-6 col-sm-6 col-sms-12">
														<a class ="bigpic_{$product.id_product}_tabcategory product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}">
															<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
														</a>
													</div><!-- box-image -->
													<div class="box-content col-md-6 col-sm-6 col-sms-12">
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
													<div class="button-container">
                                                                                                            <a class="button ajax_add_to_cart_button btn btn-default manequin" href="#" onclick="flee_to_the_manequin('{$lang_iso}','{$product.id_product}','{$cookie->id_guest}','{$cookie->id_customer}','Přidat do šatny');" title="Add to manequin" rel="{$product.link|escape:'html':'UTF-8'}">
                                                                                                                <i class="fa-shopping-cart"></i>
                                                                                                                <span id="man_btn_{$product.id_product}">{l s='Přidat do šatny'}</span>
                                                                                                            </a><br /><div style="height: 8px"> </div>
													{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
													{if ($product.allow_oosp || $product.quantity > 0)}
														{if isset($static_token)}
															<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
																<i class="fa fa-shopping-cart"></i>
																<span>{l s='Add to Cart' mod='postabcateslider'}</span>
															</a>
														{else}
															<a class="ajax_add_to_cart_button" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
																<i class="fa fa-shopping-cart"></i>
																<span>{l s='Add to Cart' mod='postabcateslider'}</span>
															</a>
														{/if}						
													{else}
														<span class="button ajax_add_to_cart_button btn btn-default disabled">
															<i class="fa fa-shopping-cart"></i>
															<span>{l s='Add to Cart' mod='postabcateslider'}</span>
														</span>
													{/if}
												{/if}
													</div> <!-- button cart -->
													</div><!-- box-content -->	
													</div>
												</div> <!-- item-inner-top -->					
											</div> <!-- item-inner -->

										</div>
										{if $smarty.foreach.postabcateslider.iteration % 2 == 0 || $smarty.foreach.postabcateslider.last  }
										      </div>
										     {/if}
							
									{/foreach}
								</div>
							</div>
				{/foreach}	
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
    items : {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}4{/if},
    itemsDesktop : [1199,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // betweem 900px and 601px
    itemsTablet: [600,2], //2 items between 600 and 0
    itemsMobile : [480,1] ,// itemsMobile disabled - inherit from itemsTablet option
	autoPlay : {if $slideOptions.show_arrow == 0}false {else}true{/if}
    });
    // Custom Navigation Events
    $(".nexttabcate1").click(function(){
    owl.trigger('owl.next');
    })
    $(".prevtabcate1").click(function(){
    owl.trigger('owl.prev');
    })  
    });
</script>