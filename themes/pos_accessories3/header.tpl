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
<!DOCTYPE HTML>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="{$lang_iso}"><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" lang="{$lang_iso}"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="{$lang_iso}"><![endif]-->
<!--[if gt IE 8]>
<html class="no-js ie9" lang="{$lang_iso}"><![endif]-->
<html lang="{$lang_iso}">
    <head>
        <meta charset="utf-8"/>
        <title>{$meta_title|escape:'html':'UTF-8'}</title>
        {if isset($meta_description) AND $meta_description}
            <meta name="description" content="{$meta_description|escape:'html':'UTF-8'}"/>
        {/if}
        {if isset($meta_keywords) AND $meta_keywords}
            <meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}"/>
        {/if}
        <meta name="generator" content="PrestaShop"/>
        <meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow"/>
        <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}"/>
        <link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}"/>

        {if isset($css_files)}
            {foreach from=$css_files key=css_uri item=media}
                <link rel="stylesheet" href="{$css_uri}" type="text/css" media="{$media}"/>
            {/foreach}
        {/if}
        <link href="{$css_dir}font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
        <script src="{$js_dir}html5shiv.js" type="text/javascript"></script>
        <script src="{$js_dir}respond.min.js" type="text/javascript"></script>
        {if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
            {$js_def}
            {foreach from=$js_files item=js_uri}
                <script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
            {/foreach}
        {/if}
        {$HOOK_HEADER}
        <link rel="stylesheet"
              href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=Open+Sans:300,600"
              type="text/css" media="all"/>

    </head>
    <body{if isset($page_name)}  itemscope itemtype="http://schema.org/WebPage" id="{$page_name|escape:'html':'UTF-8'}"{/if}
                                 class="@colorPreset @texture {if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{/if}{if $hide_right_column} hide-right-column{/if}{if $content_only} content_only{/if} lang_{$lang_iso}">
        {if !$content_only}
            {if isset($restricted_country_mode) && $restricted_country_mode}
                <div id="restricted-country">
                    <p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>
                </div>
            {/if}
            {* facebook plugin *}
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.3";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                {* facebook plugin *}
                {* satna plugin*}
            <div class="newDressing" id="newDressing">
                <img class="mannequinHair" src="{$base_dir}themes/pos_accessories3/img/brown_hair.png" />
                <div id="wardrobe" class="rags"></div>
                <div onclick="open_dressing_room('{$cookie->id_lang}', '{$cookie->id_guest}', '{$cookie->id_customer}', '{$base_dir}', 'wardrobe', '{$base_dir}',{if $cookie->id_cart}{$cookie->id_cart}{else}0{/if});
                    showCabin();" id="cls_bnt" onmouseover="hover_close_dressing_on();"
                         onmouseout="hover_close_dressing_off();">
                         <br /><br /><br /><br />&nbsp;š<br />&nbsp;a<br />&nbsp;t<br />&nbsp;n<br />&nbsp;a<br />&nbsp;
                     </div>
                     {* satna plugin*}
                     <div class="mannequin_playground_front" id="mannequin_playground"></div>
                     <a href="javascript:rotate_mannequin();" class="rotateLabel">otočit figurínu</a>
                     <div class="shoppingControl" id="shoppingControl"></div>
                </div>

                <div id="page">
                    <div class="header-container">
                        <header id="header">
                            <div class="header-inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="nav">
                                            <nav>
                                                {hook h="displayNav"}
                                            </nav>
                                        </div>
                                        <div class="header-content">
                                            <div class="header_content col-xs-12 col-md-4 col-sm-4 col-sms-12">
                                                {hook h="blockPosition1"}
                                            </div>
                                            <div id="header_logo" class="col-xs-12 col-md-4 col-sm-4 col-sms-12">
                                                <a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
                                                    <img class="logo img-responsive" src="{$logo_url}"
                                                         alt="{$shop_name|escape:'html':'UTF-8'}"{if $logo_image_width} width="{$logo_image_width}"{/if}{if $logo_image_height} height="{$logo_image_height}"{/if}/>
                                                </a>
                                            </div>
                                            <div class="top-search col-xs-12 col-md-4 col-sm-4 col-sms-12">
                                            {if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="menu-search">
                    <div class="menu-search-inner">
                        <div class="container">
                            {hook h ="megamenu"}
                            {hook h="Homesearch"}
                        </div>
                    </div>
                </div>
                <!-- menu-search -->
                {if $page_name == index}
                    <div class="sequence-home">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-sms-12">
                                    {hook h ="bannerSequence"}
                                </div>
                                <div class="col-md-4 col-sm-4 col-sms-12">
                                    {hook h ='blockPosition5'}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        {hook h ='blockPosition4'}
                        {hook h ='Tabproductslider'}
                        {hook h ="blockPosition2"}
                        {hook h ='tabcategory'}
                        {hook h ='blockPosition3'}
                    </div>
                {/if}


                <div class="columns-container">
                    <div id="columns" class=container>
                        {if $page_name !='index' && $page_name !='pagenotfound'}
                            {include file="$tpl_dir./breadcrumb.tpl"}
                        {/if}
                        <div class="row">
                            <div id="top_column" class="center_column col-xs-12 col-sm-12">{hook h="displayTopColumn"}</div>
                        </div>
                        <div class="row">
                            {if isset($left_column_size) && !empty($left_column_size)}
                                <div id="left_column"
                                     class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
                            {/if}
                            <div id="center_column"
                                 class="center_column col-xs-12 col-sm-{12 - $left_column_size - $right_column_size}">


                            {/if}
