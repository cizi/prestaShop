<!-- Block user information module NAV  -->
<p id="header_user_info">
	{if $logged}
		{l s='Vítejte zpět '}<a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
	{else}
		
	{/if}
</p>