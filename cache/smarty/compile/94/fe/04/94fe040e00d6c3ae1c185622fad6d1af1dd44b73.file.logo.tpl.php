<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:15:58
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/poslogo/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1618944817549068ce62b683-69094631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94fe040e00d6c3ae1c185622fad6d1af1dd44b73' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/poslogo/logo.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1618944817549068ce62b683-69094631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logos' => 0,
    'logo' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549068ce6d2762_90741951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549068ce6d2762_90741951')) {function content_549068ce6d2762_90741951($_smarty_tpl) {?><div class="pos-logo-container">	
		<div class="pos-logo">
			<div class="pos-logo-title"><h2><?php echo smartyTranslate(array('s'=>'OUR BRANDS','mod'=>'poslogo'),$_smarty_tpl);?>
</h2></div>
				<ul class="bxslider">
					<?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
?>
					<li>
						<a href ="<?php echo $_smarty_tpl->tpl_vars['logo']->value['link'];?>
">
							<img src ="<?php echo $_smarty_tpl->tpl_vars['logo']->value['image'];?>
" alt ="<?php echo smartyTranslate(array('s'=>"Logo"),$_smarty_tpl);?>
" />
						 </a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		  $('.pos-logo .bxslider').bxSlider({
            auto: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto']!=1) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto'];?>
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
	</script>
		 <?php }} ?>
