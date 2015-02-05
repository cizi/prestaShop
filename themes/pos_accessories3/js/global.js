/*
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
*/
//global variables
var responsiveflag = false;

$(document).ready(function(){
	highdpiInit();
	responsiveResize();
	$(window).resize(responsiveResize);
	if (navigator.userAgent.match(/Android/i))
	{
		var viewport = document.querySelector('meta[name="viewport"]');
		viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
		window.scrollTo(0, 1);
	}
	blockHover();
	if (typeof quickView !== 'undefined' && quickView)
		quick_view();
	dropDown();

	if (typeof page_name != 'undefined' && !in_array(page_name, ['index', 'product']))
	{
		bindGrid();

 		$(document).on('change', '.selectProductSort', function(e){
			if (typeof request != 'undefined' && request)
				var requestSortProducts = request;
 			var splitData = $(this).val().split(':');
			if (typeof requestSortProducts != 'undefined' && requestSortProducts)
				document.location.href = requestSortProducts + ((requestSortProducts.indexOf('?') < 0) ? '?' : '&') + 'orderby=' + splitData[0] + '&orderway=' + splitData[1];
    	});

		$(document).on('change', 'select[name="n"]', function(){
			$(this.form).submit();
		});

		$(document).on('change', 'select[name="manufacturer_list"], select[name="supplier_list"]', function() {
			if (this.value != '')
				location.href = this.value;
		});

		$(document).on('change', 'select[name="currency_payement"]', function(){
			setCurrency($(this).val());
		});
	}

	$(document).on('click', '.back', function(e){
		e.preventDefault();
		history.back();
	});
	
	jQuery.curCSS = jQuery.css;
	if (!!$.prototype.cluetip)
		$('a.cluetip').cluetip({
			local:true,
			cursor: 'pointer',
			dropShadow: false,
			dropShadowSteps: 0,
			showTitle: false,
			tracking: true,
			sticky: false,
			mouseOutClose: true,
			fx: {             
		    	open:       'fadeIn',
		    	openSpeed:  'fast'
			}
		}).css('opacity', 0.8);

	if (!!$.prototype.fancybox)
		$.extend($.fancybox.defaults.tpl, {
			closeBtn : '<a title="' + FancyboxI18nClose + '" class="fancybox-item fancybox-close" href="javascript:;"></a>',
			next     : '<a title="' + FancyboxI18nNext + '" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
			prev     : '<a title="' + FancyboxI18nPrev + '" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		});
});

function highdpiInit()
{
	if($('.replace-2x').css('font-size') == "1px")
	{		
		var els = $("img.replace-2x").get();
		for(var i = 0; i < els.length; i++)
		{
			src = els[i].src;
			extension = src.substr( (src.lastIndexOf('.') +1) );
			src = src.replace("." + extension, "2x." + extension);
			
			var img = new Image();
			img.src = src;
			img.height != 0 ? els[i].src = src : els[i].src = els[i].src;
		}
	}
}

function responsiveResize()
{
	if ($(document).width() <= 767 && responsiveflag == false)
	{
		accordion('enable');
	    accordionFooter('enable');
		responsiveflag = true;	
	}
	else if ($(document).width() >= 768)
	{
		accordion('disable');
		accordionFooter('disable');
	    responsiveflag = false;
	}
}

function blockHover(status)
{
	$(document).off('mouseenter').on('mouseenter', '.product_list.grid li.ajax_block_product .product-container', function(e){

		if ('ontouchstart' in document.documentElement)
			return;
		if ($('body').find('.container').width() == 1170)
		{
			var pcHeight = $(this).parent().outerHeight();
			var pcPHeight = $(this).parent().find('.button-container').outerHeight() + $(this).parent().find('.comments_note').outerHeight() + $(this).parent().find('.functional-buttons').outerHeight();
			$(this).parent().addClass('hovered');
			$(this).parent().css('height', pcHeight + pcPHeight).css('margin-bottom', pcPHeight * (-1));
		}
	});

	$(document).off('mouseleave').on('mouseleave', '.product_list.grid li.ajax_block_product .product-container', function(e){
		if ($('body').find('.container').width() == 1170)
			$(this).parent().removeClass('hovered').removeAttr('style');
	});
}

function quick_view()
{
	$(document).on('click', '.quick-view:visible', function(e) 
	{
		e.preventDefault();
		var url = this.rel;
		if (url.indexOf('?') != -1)
			url += '&';
		else
			url += '?';

		if (!!$.prototype.fancybox)
			$.fancybox({
				'padding':  0,
				'width':    1087,
				'height':   610,
				'type':     'iframe',
				'href':     url + 'content_only=1'
			});
	});
}

function bindGrid()
{
	var view = $.totalStorage('display');

	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');
	
	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
	});

	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');
	});
}

function display(view)
{
	if (view == 'list')
	{
		$('ul.product_list').removeClass('grid row').addClass('list');
		$('.product_list > li').removeClass('col-xs-12 col-sm-6 col-md-4').addClass('col-xs-12');
		$('.product_list > li').each(function(index, element) {
			html = '';
			html = '<div class="product-container"><div class="row">';
				html += '<div class="item-left col-sm-4 col-md-4 col-sms-4 col-smb-12"><div class="item-left-inner">';
					html += '<div class="item-inner-top">' + $(element).find('.item-inner-top').html() + '</div>';
					html += '<div class="icon-newsale">'+ $(element).find('.icon-newsale').html() + '</div>';
				html += '</div></div>';
				html += '<div class="item-right col-sm-8 col-md-8 col-sms-8 col-smb-12">';
					html += '<h5 itemprop="name" class="product-name">'+ $(element).find('h5').html() + '</h5>';
					var rating = $(element).find('.comments_note').html(); // check : rating
					if (rating != null) { 
						html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
					}
					var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
					if (price != null) { 
						html += '<div class="content_price">'+ price + '</div>';
					}
					html += '<p class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';	
					html += '<div class="actions">'+ $(element).find('.actions').html() + '</div>';
				html += '</div>';

			
			html += '</div></div>';
			
		$(element).html(html);
		});		
		$('.display').find('li#list').addClass('selected');
		$('.display').find('li#grid').removeAttr('class');
		$.totalStorage('display', 'list');
	}
	else 
	{
		$('ul.product_list').removeClass('list').addClass('grid row');
		$('.product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-4');
		$('.product_list > li').each(function(index, element) {
		html = '';
		html += '<div class="item"><div class="item-inner"><div class="item-inner-box">';
			html += '<div class="icon-newsale">'+ $(element).find('.icon-newsale').html() + '</div>';
			html += '<div class="item-inner-top">';
				html += '<div class="item-image">'+ $(element).find('.item-image').html() + '</div>';
				html += '<ul class="add-to-links">'+ $(element).find('.add-to-links').html() + '</ul>';
			html += '</div>';
			html += '<h5 itemprop="name" class="product-name">'+ $(element).find('h5').html() + '</h5>';
				var rating = $(element).find('.comments_note').html(); // check : rating
				if (rating != null) { 
					html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
				}
				var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
				if (price != null) { 
					html += '<div class="content_price">'+ price + '</div>';
				}	
				html += '<p class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';				
			
		html += '</div>';

		html += '<div class="actions">'+ $(element).find('.actions').html() + '</div>';

		html += '</div>';		
		html += '</div>';
		$(element).html(html);
		});
		$('.display').find('li#grid').addClass('selected');
		$('.display').find('li#list').removeAttr('class');
		$.totalStorage('display', 'grid');
	}	
}

function dropDown() 
{
	elementClick = '#header .current';
	elementSlide =  'ul.toogle_content';       
	activeClass = 'active';			 

	$(elementClick).on('click', function(e){
		e.stopPropagation();
		var subUl = $(this).next(elementSlide);
		if(subUl.is(':hidden'))
		{
			subUl.slideDown(0);
			$(this).addClass(activeClass);	
		}
		else
		{
			subUl.slideUp(0);
			$(this).removeClass(activeClass);
		}
		$(elementClick).not(this).next(elementSlide).slideUp(0);
		$(elementClick).not(this).removeClass(activeClass);
		e.preventDefault();
	});

	$(elementSlide).on('click', function(e){
		e.stopPropagation();
	});

	$(document).on('click', function(e){
		e.stopPropagation();
		var elementHide = $(elementClick).next(elementSlide);
		$(elementHide).slideUp(0);
		$(elementClick).removeClass('active');
	});
}

function accordionFooter(status)
{
	if(status == 'enable')
	{
		$('#footer .footer-block h4').on('click', function(){
			$(this).toggleClass('active').parent().find('.toggle-footer').stop().slideToggle('medium');
		})
		$('#footer .footer-block .footer-static-title').on('click', function(){
			$(this).toggleClass('active').parent().find('.toggle-footer').stop().slideToggle('medium');
		})
		$('#footer').addClass('accordion').find('.toggle-footer').slideUp('fast');

	}
	else
	{
		$('.footer-block h4').removeClass('active').off().parent().find('.toggle-footer').removeAttr('style').slideDown('fast');
		$('#footer').removeClass('accordion');
	}
}

function accordion(status)
{
	leftColumnBlocks = $('#left_column');
	if(status == 'enable')
	{
		$('#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4').on('click', function(){
			$(this).toggleClass('active').parent().find('.block_content').stop().slideToggle('medium');
		})
		$('#right_column, #left_column').addClass('accordion').find('.block .block_content').slideUp('fast');
	}
	else
	{
		$('#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4').removeClass('active').off().parent().find('.block_content').removeAttr('style').slideDown('fast');
		$('#left_column, #right_column').removeClass('accordion');
	}
}

function hover_manequin_on()
{
    $('#dressing_room').removeClass('dressing_room');
    $('#dressing_room').addClass('dressing_room_on');
            
    $('#dressing_man').removeClass('dressing_man');
    $('#dressing_man').addClass('dressing_man_on');
}

function hover_manequin_off()
{
    $('#dressing_room').removeClass('dressing_room_on');
    $('#dressing_room').addClass('dressing_room');
    $('#dressing_man').removeClass('dressing_man_on');
    $('#dressing_man').addClass('dressing_man');    
}

function flee_to_the_manequin(id_lang, id, id_guest, id_customer, original_text, root_url)
{
    who_is_it = (id_customer != "") ? id_customer : id_guest;
    if (who_is_it == "") return;
    if (id == "") return;
    id_element = "man_btn_" + id;
    
    // lang
    if (id_lang == "cs")
    {
        processing = "Zpracovávám...";
        err = "Došlo k chybě při zpracování požadavku!";
        added = "Přidáno!";
    }
    else
    {
        processing = "Processing...";
        err = "An error occurred during processing your request!";
        added = "Added!";
    }
    
    $.ajax({
        url : root_url + 'custom_sw/manequin_engine/dressing_room_mover.php',
        type : 'GET',
        data : {
            'id' : who_is_it,
            'id_product' : id
        },
        dataType:'json',
        success : function(data) {
            if (data === 0) 
                alert(err);
            else
                $("#" + id_element).html(added);
                
        },
        error : function(request,error)
        {
            //alert("Request: "+JSON.stringify(request));
            alert(err);
        }
    });
    // set default value
}

function open_dressing_room(lang_iso,id_guest,id_customer,base_dir)
{
    $("#dressing_cabin").css("display","block");
}

function close_dressing_room()
{
    $("#dressing_cabin").css("display","none");
}

function hover_close_dressing_on()
{
    $("#dressin_room_button").attr("src","../themes/pos_accessories3/img/close_red.png");
}

function hover_close_dressing_off()
{
    $("#dressin_room_button").attr("src","../themes/pos_accessories3/img/close.png");
}
