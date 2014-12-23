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

<div class="header_links_wrap">
	<ul class="ul_header_links_wrap">
		<li class="li_header_links_wrap">
			<div class="my-account-header">
				<a href="#">{l s='My Account' mod='blockcontact'}
					<i class="fa fa-chevron-down"></i>
				</a>
			</div>
			<ul id="header_links">
				{$context = Context::getContext()}
				<li class="first"><a class="link-myaccount" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='My account' mod='blockcontact'}">{l s='My account' mod='blockcontact'}</a></li>
				
				<li><a class="link-wishlist wishlist_block" href="{$context->link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlist' mod='blockcontact'}">{l s='My wishlist' mod='blockcontact'}</a></li>
				<li class="my-compare">
					<form method="post" action="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" class="compare-form">
						<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare{if isset($paginationId)}_{$paginationId}{/if}" disabled="disabled">
							<span>{l s='My Compare'} (<strong class="total-compare-val">{count($compared_products)}</strong>)</span>
						</button>
						<input type="hidden" name="compare_product_count" class="compare_product_count" value="{count($compared_products)}" />
						<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
					</form>
				</li>
				<li><a class="link-mycart" href="{$link->getPageLink('order', true)|escape:'html'}" title="{l s='My cart' mod='blockcontact'}">{l s='My cart' mod='blockcontact'}</a></li>
				{if $logged}
						<!--<a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>-->
						<li class="last"><a class="link-out" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Log out' mod='blockcontact'}"  rel="nofollow">{l s='Log out' mod='blockcontact'}</a></li>
					{else}
						<li class="last"><a class="link-login" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Login' mod='blockcontact'}"  rel="nofollow">{l s='Login' mod='blockcontact'}</a></li>
				{/if}
				
			</ul>
		</li>
	</ul>
</div>	