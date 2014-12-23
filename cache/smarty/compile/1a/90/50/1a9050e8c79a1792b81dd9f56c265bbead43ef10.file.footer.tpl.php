<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:13:34
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10523082345490683e490c49-50097068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9050e8c79a1792b81dd9f56c265bbead43ef10' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/footer.tpl',
      1 => 1418749944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10523082345490683e490c49-50097068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'page_name' => 0,
    'HOOK_PRODUCT_FOOTER' => 0,
    'js_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490683e4df012_12088641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490683e4df012_12088641')) {function content_5490683e4df012_12088641($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
						<?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;?>
<?php }?>
					<?php }?>
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			
			<!-- Footer -->
			<div class="container">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"brandSlider"),$_smarty_tpl);?>

			</div>
			<div class="show-bkg"></div>
			<div class="container">
				<div class="footer-container">
					<footer id="footer">
						<div class="top-footer">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter1"),$_smarty_tpl);?>

							<div class="bottom-footer">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter2"),$_smarty_tpl);?>

							</div>
						</div>
					</footer>
				</div><!-- #footer -->
			</div>
		</div><!-- #page -->
<?php }?>
<div class="back-top"><a href= "#" class="mypresta_scrollup hidden-phone"></a></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
owl.carousel.js" type="text/javascript"></script>

	</body>
</html><?php }} ?>
