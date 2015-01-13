<?php /* Smarty version Smarty-3.1.19, created on 2015-01-12 10:50:21
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/possequence/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36604275554b398dd481f19-96199569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4344f0a31b94f358a1bd76353d4ed2e29b826ae' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/possequence/slideshow.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36604275554b398dd481f19-96199569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slideOptions' => 0,
    'slides' => 0,
    'slide' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b398dd66ae95_32671162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b398dd66ae95_32671162')) {function content_54b398dd66ae95_32671162($_smarty_tpl) {?><div id="sequence-theme">
    <div id="sequence">
		<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow']) {?>
			<div class="controls">
				<a class="sequence-prev"><?php echo smartyTranslate(array('s'=>'Prev','mod'=>'possequence'),$_smarty_tpl);?>
</a>
				<a class="sequence-next"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'possequence'),$_smarty_tpl);?>
</a>
			</div>
		<?php }?>
        <ul class="sequence-canvas">
              <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==1) {?>
						<li class="<?php echo $_smarty_tpl->tpl_vars['slide']->value['animate'];?>
 kind_effect<?php echo $_smarty_tpl->tpl_vars['slide']->value['kind_effect'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title1']) {?>
								<h2 class ="title"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>
</h2>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title2']) {?>
								<h3 class ="subtitle"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>
</h3>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
								<div class="intro subtitle">
									<?php echo nl2br($_smarty_tpl->tpl_vars['slide']->value['description']);?>

								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['bgimage']) {?>												
								<img class="slider-bg" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['bgimage'];?>
" alt="Background Image" />
							<?php }?>
							<!-- <?php if ($_smarty_tpl->tpl_vars['slide']->value['image']) {?>						
								<img class="model" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="Image" />						
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
								<div class ="link subtitle-slider">
									<a href ="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'Shop now','mod'=>'possequence'),$_smarty_tpl);?>
</a>
								</div>
							<?php }?> -->
						</li>
					<?php } elseif ($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==2) {?>	
						<li class="<?php echo $_smarty_tpl->tpl_vars['slide']->value['animate'];?>
" id ="kind_effect<?php echo $_smarty_tpl->tpl_vars['slide']->value['kind_effect'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title1']) {?>
								<h2 class ="title-slider2"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>
</h2>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title2']) {?>
								<h3 class ="subtitle-slider2"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>
</h3>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
								<div class="intro-slider2 subtitle">
									<?php echo nl2br($_smarty_tpl->tpl_vars['slide']->value['description']);?>

								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['bgimage']) {?>												
								<img class="slider-bg2" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['bgimage'];?>
" alt="Background Image" />
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['image']) {?>						
								<img class="model-slider2" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="Image" />						
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
								<div class ="link-slider2 subtitle-slider2">
									<a href ="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'Shop now','mod'=>'possequence'),$_smarty_tpl);?>
</a>
								</div>
							<?php }?>
						</li>
					<?php } elseif ($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==3) {?>
						<li class="<?php echo $_smarty_tpl->tpl_vars['slide']->value['animate'];?>
" id ="kind_effect<?php echo $_smarty_tpl->tpl_vars['slide']->value['kind_effect'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title1']) {?>
								<h2 class ="title-slider3"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>
</h2>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title2']) {?>
								<h3 class ="subtitle-slider3"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>
</h3>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
								<div class="intro-slider3 subtitle">
									<?php echo nl2br($_smarty_tpl->tpl_vars['slide']->value['description']);?>

								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['bgimage']) {?>												
								<img class="slider-bg3" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['bgimage'];?>
" alt="Background Image" />
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['image']) {?>						
								<img class="model-slider3" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="Image" />						
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
								<div class ="link-slider3 subtitle-slider3">
									<a href ="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'Shop now','mod'=>'possequence'),$_smarty_tpl);?>
</a>
								</div>
							<?php }?>
						</li>
					<?php } elseif ($_smarty_tpl->tpl_vars['slide']->value['kind_effect']==4) {?>
						<li class="<?php echo $_smarty_tpl->tpl_vars['slide']->value['animate'];?>
" id ="kind_effect<?php echo $_smarty_tpl->tpl_vars['slide']->value['kind_effect'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title1']) {?>
								<h2 class ="title-slider2"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title1'];?>
</h2>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['title2']) {?>
								<h3 class ="subtitle-slider2"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title2'];?>
</h3>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
								<div class="intro-slider2 subtitle">
									<?php echo nl2br($_smarty_tpl->tpl_vars['slide']->value['description']);?>

								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['bgimage']) {?>												
								<img class="slider-bg" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['bgimage'];?>
" alt="Background Image" />
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['image']) {?>						
								<img class="model slider2" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="Image" />						
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
								<div class ="link-slider2 subtitle-slider2">
									<a href ="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'Shop now','mod'=>'possequence'),$_smarty_tpl);?>
</a>
								</div>
							<?php }?>
						</li>
					<?php }?>
			<?php } ?>
        </ul>
		
		<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation']) {?>
          <ul class="sequence-pagination">
            <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
             <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
              <li><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 </a></li>
            <?php } ?>
        </ul>
		<?php }?>
        
    </div>
</div>

<script type ="text/javascript">

    //<![CDATA[
    $(document).ready(function(){
    
        var options = {
            autoPlay:  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide']!=0) {?>true<?php } else { ?>false<?php }?>, // auto change slides
            autoPlayDelay: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
<?php } else { ?>3000<?php }?>,
            pauseOnHover: 	<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['hover']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['hover'];?>
<?php } else { ?>false<?php }?>, 
            hidePreloaderDelay: 500,
            nextButton: true,
            prevButton: true,
            pauseButton: true,
            preloader: true,
            pagination:true,
            hidePreloaderUsingCSS: false,                   
            animateStartingFrameIn: true,    
            navigationSkipThreshold: 750,
            preventDelayWhenReversingAnimations: true,
            customKeyEvents: {
                80: "pause"
            }
        };
        var sequence = $("#sequence").sequence(options).data("sequence");
    });
    //]]>

</script><?php }} ?>
