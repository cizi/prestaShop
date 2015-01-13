<?php /* Smarty version Smarty-3.1.19, created on 2015-01-12 11:28:34
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posproductcates/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102360568154b3a1d2c8d427-89736824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3071cc47e5cfcb18cfa4b4768d9c0f14827a1e1a' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posproductcates/productscategory.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102360568154b3a1d2c8d427-89736824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b3a1d2f14de8_34365659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3a1d2f14de8_34365659')) {function content_54b3a1d2f14de8_34365659($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
<div class="clearfix posproductcategory">
    <div class="posproductcategory-title">
        <h2 class="posproductcategory_h2"><?php echo smartyTranslate(array('s'=>'other products','mod'=>'posproductcates'),$_smarty_tpl);?>
</h2>
    </div>
	<div id="<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>5) {?>posproductcategory<?php } else { ?>posproductcategory_noscroll<?php }?>">
	<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>5) {?><!-- <a id="posproductcategory_scroll_left" title="<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'posproductcates'),$_smarty_tpl);?>
" href="javascript:{}"><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'posproductcates'),$_smarty_tpl);?>
</a> --><?php }?>
	<div id="posproductcategory_list">
                 	<ul class="bxslider">	
                            <?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value) {
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?>
                                   <li>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-inner-top">
                                                    <a class ="bigpic_<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'];?>
_tabcategory product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                                    </a>
                                                    <h2 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h2>

                                                    <!-- Review -->
                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['categoryProduct']->value),$_smarty_tpl);?>

                                                    <!--- -->

                                                    <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['categoryProduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['available_for_order'])))) {?>
                                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                                            <span itemprop="price" class="price product-price">
                                                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                                                            </span>
                                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
                                                        <?php }?>
                                                        
                                                        <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']) {?>
                                                                <span class="old-price product-price">
                                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction']),$_smarty_tpl);?>

                                                                </span> 
                                                                
                                                        <?php }?>
                                                        
                                                    </div> <!-- content_price-->
                                                <?php }?>

                                                </div> <!-- item-inner-top -->

                                                <div class="des-inbox">
                                                    <h2 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h2>
                                                    <!-- Review -->
                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['categoryProduct']->value),$_smarty_tpl);?>

                                                    <!--- -->
                                                    <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['categoryProduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['available_for_order'])))) {?>
                                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                                            <span itemprop="price" class="price product-price">
                                                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                                                            </span>
                                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
                                                        <?php }?>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']) {?>
                                                                <span class="old-price product-price">
                                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction']),$_smarty_tpl);?>

                                                                </span> 
                                                                <!-- <?php if ($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction_type']=='percentage') {?>
                                                                 <span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']*100;?>
%</span> 
                                                                <?php }?> -->
                                                        <?php }?>
                                                        
                                                    </div> <!-- content_price-->
                                                    <?php }?>

                                                </div><!-- des-inbox -->
                                                

                                            </div> <!-- item-inner -->
                                        </div><!--item-->
                                    </li>
                            <?php } ?>
                    </ul>
            </div>
	</div>
	
</div>
<?php }?>
<script type="text/javascript">
	  $('#posproductcategory_list .bxslider').bxSlider({
		auto: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide']!=1) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide'];?>
<?php } else { ?>1<?php }?>,
		slideWidth:<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['width_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['width_item'];?>
<?php } else { ?>250<?php }?>,
		slideMargin: 30,
        infiniteLoop:false,
		minSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['min_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
<?php } else { ?>3<?php }?>,
		maxSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['max_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['max_item'];?>
<?php } else { ?>8<?php }?>,
		speed:  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide'];?>
<?php } else { ?>5000<?php }?>,
		pause: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['a_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['a_speed'];?>
<?php } else { ?>1000<?php }?>,
		controls: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback'];?>
<?php } else { ?>false<?php }?>,
		pager: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_control']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_control'];?>
<?php } else { ?>false<?php }?>,
	});
</script><?php }} ?>
