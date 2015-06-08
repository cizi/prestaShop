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

function flee_to_the_manequin(id_lang, id, id_guest, id_customer, original_text, root_url, product_price)
{
    who_is_it = (id_customer != "") ? id_customer : id_guest;
    if (who_is_it == "") return;
    if (id == "") return;
    id_element = "man_btn_" + id;

    // lang
    set_translation(id_lang);

    $.ajax({
        url : root_url + 'custom_sw/manequin_engine/dressing_room_mover.php',
        type : 'POST',
        data : {
            'id' : who_is_it,
            'id_product' : id,
            'action' : 'insert',
			'price' : product_price
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
	open_dressing_room(id_lang,id_guest,id_customer,root_url,'wardrobe');
	// pokud je kabina otevrena, nehybat s ni
	if (cabinIsClosed == true) {
		shakeWithElement("newDressing",1, "margin-left", 25);
	}
}

function open_dressing_room(id_lang,id_guest,id_customer,root_url,target_element)
{
    set_translation(id_lang);

    // get me all items for customer
    who_is_it = (id_customer != "") ? id_customer : id_guest;
    if (who_is_it === "") return;
    if (target_element === "") return;
    $.ajax({
        url : root_url + 'custom_sw/manequin_engine/dressing_room_mover.php',
        type : 'POST',
        data : {
            'id' : who_is_it,
            'action' : 'list',
			'id_lang' : id_lang,
			'root_url' : root_url
        },
        dataType:'json',
        success : function(data) {
            //$("#" + target_element).text("data");
            //alert("Request: "+JSON.stringify(data));
            make_wardrobe(id_lang,id_guest,id_customer,root_url,target_element, data);
        },
        error : function(request,error)
        {
            //alert("Request: "+JSON.stringify(request));
            alert(err);
        }
    });

    //$("#cls_bnt").html(btn_close_label);
   //$("#dressing_cabin").css("display","block");
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

function make_wardrobe(id_lang, id_guest, id_customer, root_url, target_element, rags)
{
    set_translation(id_lang);
    if (target_element === "") return;
    if (rags == null) return;
    var html = "<table cellpadding='0' cellspacing='0' style='width: 100%'>";
    var columner = 0;
    $.each(rags, function(idx, obj) {
        if (obj.id_product === "") return;
        html += "<tr>";
		classSel = (columner%2 == 0) ? "evenTd" : "evenTd"; //"oddTd";
		pathToTheImage = root_url + obj.front_image_path;
        html += "<td class='" + classSel + "'>";
        //html += "<img class='dr_images' src='" + root_url + obj.front_image_path + "'  onclick=\"dress_it('" + obj.layer + "','" + root_url + obj.front_image_path + "','" + root_url + obj.back_image_path + "');\" />";

		html += "<img class='dress_it' src='" + obj.product_image + "'  onclick=\"dress_it('" + obj.layer + "','" + pathToTheImage + "','" + root_url + obj.back_image_path + "');\" />";

		directLink = obj.name.replace(/ /g, "-");
		directLink = directLink.replace(/\./g, "");
		directLink = obj.id_product + "-" + removeAccents(directLink).toLowerCase() + ".html";

		html += "<a href=' " + root_url + directLink + " ' class='product-name' style='margin-bottom: 0px;'><b style='font-size: 15px;'>" + obj.name + "</b></a><br />";
		html += "<span class='price product-price'>" + obj.price + "</span>";
		html += "<br />";
		html += "<div class='removeFromDressing' onclick=\"remove_from_dressing_room('" + id_lang + "','" + id_guest + "','" + id_customer + "','" + root_url + "','" + target_element + "','" + obj.id_record + "','" + pathToTheImage + "');\"> </div>";
		html += "<input type='checkbox' data-target=\"create_element_id('" + pathToTheImage + "');\" name='toCart[" + obj.id_record + "]' class='ragsItems' value='" + obj.id_record + "' />";

		// make select with sizes
		if (obj.sizes != "") {
			productSizes = obj.sizes.split("|");
			html += "<select id='toCartSize_" + obj.id_record + "' name='toCartSize[" + obj.id_record + "]' class='sbDressing'>";	// class='form-control attribute_select no-print'
			for (var i = 0; i < productSizes.length; i++) {
				attribs = productSizes[i].split("-");
				itemSelected = (i == 0) ? " selected='selected' " : "";
				html += "<option value='" + attribs[0] + "'" + itemSelected + ">" + attribs[1] + "</option>";
			}
			html += "</select>";
		}

        //html += "<a class='button button-small manequin_smaller ajax_add_to_cart_button dr_tiny_button dr_font' href='http://presta.solco.cz/cart?add=1&amp;id_product=" + obj.id_product + "' rel='nofollow' title='" + add_to_cart + "' data-id-product=" + obj.id_product + ">";
		//html += "<i class='fa fa-shopping-cart'></i><span class='dr_font'>" + add_to_cart + "</span></a>&nbsp;&nbsp;";

        html += "</td>";
        html += "</tr>";
        columner++;
    });
    html += "</table>";
    $("#" + target_element).html(html);
	buttons = "<span type='button' class='button button-small manequin_smaller dr_font dressing_room_btn' onclick='selectedToCart();'>" + add_all_to_cart + "</span>&nbsp;&nbsp;&nbsp;";
	buttons += "<span type='button' class='button button-small manequin_smaller dr_font dressing_room_btn' onclick=\"removeSelected('" + id_lang + "','" + id_guest + "','" + id_customer + "','" + root_url + "','" + target_element + "');\">" + remove_selected + "</span>&nbsp;&nbsp;&nbsp;";
	buttons += "<span type='button' id='select_unselect_all' onclick='checkUncheckAll();' class='button button-small manequin_smaller dr_font dressing_room_btn'>" + select_all + "</span>";
	$("#shoppingControl").html(buttons);
}

function remove_from_dressing_room(id_lang, id_guest, id_customer, root_url, target_element, id_record, pathToTheImage)
{
    if (id_record === "") return;
    $.ajax({
        url : root_url + 'custom_sw/manequin_engine/dressing_room_mover.php',
        type : 'POST',
        data : {
            'id_record' : id_record,
            'action' : 'remove'
        },
        dataType:'json',
        success : function(data) {
            if (data === 0)
                alert(err);
            else
				var evalCmd = eval("create_element_id('" + pathToTheImage + "');");
				undress_item(evalCmd);
                open_dressing_room(id_lang,id_guest,id_customer,root_url,target_element);
        },
        error : function(request,error)
        {
            //alert("Request: "+JSON.stringify(request));
            alert(err);
        }
    });
}

function set_translation(language)
{
    if (language === "") return;
    if (language == 2)
    {
        remove_from = "Pryč ze šatny";
        btn_close_label = "zavřít";
        err = "Došlo k chybě při zpracování požadavku!";
        processing = "Zpracovávám...";
        added = "Přidáno!";
        add_to_cart = "Do košíku";
		select_all = "označit vše";
		unselect_all = "odznačit vše";
		add_all_to_cart = "vybrané do košíku";
		remove_selected = "smazat vybrané";
    }
    else
    {
        remove_from = "Remove from here";
        btn_close_label = "close";
        err = "An error occurred during processing your request!";
        processing = "Processing...";
        added = "Added!";
        add_to_cart = "To cart";
		select_all = "select all";
		unselect_all = "unselect all";
		add_all_to_cart = "selected to cart";
		remove_selected = "delete selected";
    }
}

var cabinIsClosed = true;
function showCabin()
{
	if (cabinIsClosed) {
		$("#newDressing").animate({"margin-left": "0px"});
	} else {
		$("#newDressing").animate({"margin-left": "-620px"});
	}
	cabinIsClosed = !cabinIsClosed;

}

function shakeWithElement(idElement, times, propertyName, offsetValue)
{
    var repeat = parseInt(times) == 0 ? 2 : parseInt(times);
	var originalValue = parseInt($("#" + idElement).css(propertyName));
	var moveTo = originalValue + offsetValue;
	//var indVar = eval(propertyName);
    for (var i = 0; i < repeat; i++ )
    {
		// vlastnosti obsahuji znak "-" se musi casovat, protoze JS je bere jako minus
		if (propertyName == "margin-left") {
			$("#" + idElement).animate({ "margin-left" : moveTo + "px"});
        	$("#" + idElement).animate({ "margin-left" : originalValue + "px"});
		}
    }
}

function removeAccents(strAccents)
{
	var strAccents = strAccents.split('');
	var strAccentsOut = new Array();
	var strAccentsLen = strAccents.length;
	var accents = 'ÀÁÂÃÄÅàáâãäåÒÓÔÕÕÖØòóôõöøÈÉÊËèéêëðÇçÐÌÍÎÏìíîïÙÚÛÜùúûüÑñŠšŸÿýŽžŮůČčĚě';
	var accentsOut = "AAAAAAaaaaaaOOOOOOOooooooEEEEeeeeeCcDIIIIiiiiUUUUuuuuNnSsYyyZzUuCcEe";
	for (var y = 0; y < strAccentsLen; y++) {
		if (accents.indexOf(strAccents[y]) != -1) {
			strAccentsOut[y] = accentsOut.substr(accents.indexOf(strAccents[y]), 1);
		} else
			strAccentsOut[y] = strAccents[y];
	}
	strAccentsOut = strAccentsOut.join('');
	return strAccentsOut;
}

var allUnchecked = true;
function checkUncheckAll()
{
	$('input[name^="toCart"]').each(function() {
		if (allUnchecked) {
			$(this).prop("checked", "true");
		} else {
			$(this).prop("checked", "");
		}
	});

	if (allUnchecked) {
		$("#select_unselect_all").text(unselect_all);
	} else {
		$("#select_unselect_all").text(select_all);
	}
	allUnchecked = !allUnchecked;
}

function selectedToCart()
{
	$('input[name^="toCart"]').each(function() {
		if ($(this).is(":checked")) {
			productToCart = $(this).val();
			productSizeToCart = $("#toCartSize_" + productToCart).val();
			productSizeToCart = (typeof productSizeToCart == 'undefined') ? null : productSizeToCart;

			// ajaxCart.add( $('#product_page_product_id').val(), $('#idCombination').val(), true, null, $('#quantity_wanted').val(), null);
			//ajaxCart.add(productToCart, productSizeToCart, false, null);
			ajaxCart.add( productToCart);
			/*
			// input
			$.ajax({
				type: "GET",
				url: baseDir+'/modules/paypal/express_checkout/ajax.php',
				data: { get_qty: "1", id_product: productToCart, id_product_attribute: productSizeToCart },
				cache: false,
				success: function(result) {
					if (result == '1') {
						$('#container_express_checkout').slideDown();
					} else {
						$('#container_express_checkout').slideUp();
					}
					return true;
				}
			});
			*/
		}
	});
}

function removeSelected(id_lang, id_guest, id_customer, root_url, target_element)
{
	$('input[name^="toCart"]').each(function() {
		if ($(this).is(":checked")) {
			var productToRemove = $(this).val();
			var evalCode = eval($(this).attr("data-target"));
			undress_item(evalCode);
			remove_from_dressing_room(id_lang, id_guest, id_customer, root_url, target_element, productToRemove);
		}
	});
}
