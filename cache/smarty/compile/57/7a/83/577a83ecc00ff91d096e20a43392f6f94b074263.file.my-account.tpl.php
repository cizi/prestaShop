<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 20:23:09
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1089356773547f631d99c956-78515602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577a83ecc00ff91d096e20a43392f6f94b074263' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1417524495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089356773547f631d99c956-78515602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
    'mobile_hook' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547f631d9dbe66_05512328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f631d9dbe66_05512328')) {function content_547f631d9dbe66_05512328($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?>

<li class="favoriteproducts">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account'), 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value){?><img <?php if (isset($_smarty_tpl->tpl_vars['mobile_hook']->value)){?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="ui-li-icon ui-li-thumb"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="icon"<?php }?> alt="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
"/><?php }?>
		<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

	</a>
</li>
<?php }} ?>