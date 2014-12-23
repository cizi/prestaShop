<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 13:57:12
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1731166749547db72852a0c7-94958482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab95aea9248ea2bb6106bda83f4f6b19360aa002' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/footer.tpl',
      1 => 1417524605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1731166749547db72852a0c7-94958482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db7285511b8_59154823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db7285511b8_59154823')) {function content_547db7285511b8_59154823($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column grid_2 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				Vše o <a href="http://www.prestashopcesky.cz">PrestaShop</a>.<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>