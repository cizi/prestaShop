<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 13:57:08
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1473600220547db724e0d1d7-30003004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1495b153bb63d0c74ee536b219d103a2eea12069' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/mobile/index.tpl',
      1 => 1417524648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1473600220547db724e0d1d7-30003004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db724e18d34_84169429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db724e18d34_84169429')) {function content_547db724e18d34_84169429($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>