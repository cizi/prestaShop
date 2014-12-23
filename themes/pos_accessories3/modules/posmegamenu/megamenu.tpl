
<!-- Block categories module -->
{if $blockCategTree != ''}
	<div class="ma-nav-mobile-container visible-xs visible-sm">
		<div class="container">
		<div class="navbar">
			<div id="navbar-inner" class="navbar-inner navbar-inactive">
				<div class="menu-mobile">
					<a class="btn btn-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<span class="brand">{l s='Category'}</span>
				</div>
				<ul id="ma-mobilemenu" class="tree {if $isDhtml}dhtml{/if}  mobilemenu nav-collapse collapse">
					{foreach from=$blockCategTree.children item=child name=blockCategTree}
						{if $smarty.foreach.blockCategTree.last}
							{include file="$branche_tpl_path" node=$child last='true'}
						{else}
							{include file="$branche_tpl_path" node=$child}
						{/if}
					{/foreach}
				</ul>
                                <script type="text/javascript">
                                // <![CDATA[
                                        // we hide the tree only if JavaScript is activated
                                        $('div#categories_block_left ul.dhtml').hide();
                                // ]]>
                                </script>
			</div>
		</div>
		</div>
</div>
{/if}
<!-- /Block categories module -->

<div class="nav-container visible-lg visible-md">
	<div class="nav-inner">
		<div id="pt_custommenu" class="pt_custommenu">
		    {$megamenu}
		</div>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = {$effect};
var CUSTOMMENU_POPUP_TOP_OFFSET = {$top_offset};
//]]>

$(function(){
	 $(window).scroll(function () {
	  	if ($(this).scrollTop() > 120) {
	   		$('.menu-search').addClass('navbar-fixed-top menu-search-scroll');
		   	$('.menu-search-inner').addClass('menu-search-inner-scroll');
		   	$('.nav-inner').addClass('nav-inner-scroll');
		  	$('.menu-search').css({
		  		'position':'fixed',
		  	 	'z-index':'1030',
		  	  	'top':'0'});
	  	}
	  	if ($(this).scrollTop() < 120) {
		   	$('.menu-search').removeClass('navbar-fixed-top menu-search-scroll');
		   	$('.menu-search-inner').removeClass('menu-search-inner-scroll');
		   	$('.nav-inner').removeClass('nav-inner-scroll');
		   	$('.menu-search').css({
		   		'position':'static', 
		   		'z-index':'1030', 
		   		'top':'auto'});
	  	}
	});
});
</script>