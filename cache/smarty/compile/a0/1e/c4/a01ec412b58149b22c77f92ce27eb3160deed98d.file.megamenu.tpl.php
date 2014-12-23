<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:15:57
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posmegamenu/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122461325549068cda526b9-62949897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01ec412b58149b22c77f92ce27eb3160deed98d' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/posmegamenu/megamenu.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122461325549068cda526b9-62949897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockCategTree' => 0,
    'isDhtml' => 0,
    'child' => 0,
    'megamenu' => 0,
    'effect' => 0,
    'top_offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549068cdadb4a9_90101051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549068cdadb4a9_90101051')) {function content_549068cdadb4a9_90101051($_smarty_tpl) {?>
<!-- Block categories module -->
<?php if ($_smarty_tpl->tpl_vars['blockCategTree']->value!='') {?>
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
					<span class="brand"><?php echo smartyTranslate(array('s'=>'Category'),$_smarty_tpl);?>
</span>
				</div>
				<ul id="ma-mobilemenu" class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>  mobilemenu nav-collapse collapse">
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

						<?php }?>
					<?php } ?>
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
<?php }?>
<!-- /Block categories module -->

<div class="nav-container visible-lg visible-md">
	<div class="nav-inner">
		<div id="pt_custommenu" class="pt_custommenu">
		    <?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

		</div>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = <?php echo $_smarty_tpl->tpl_vars['effect']->value;?>
;
var CUSTOMMENU_POPUP_TOP_OFFSET = <?php echo $_smarty_tpl->tpl_vars['top_offset']->value;?>
;
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
</script><?php }} ?>
