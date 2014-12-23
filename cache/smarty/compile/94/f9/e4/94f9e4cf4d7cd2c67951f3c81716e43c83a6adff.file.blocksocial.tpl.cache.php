<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:08:44
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134087367547db9dc0c3909-05877447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94f9e4cf4d7cd2c67951f3c81716e43c83a6adff' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default/modules/blocksocial/blocksocial.tpl',
      1 => 1417524670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134087367547db9dc0c3909-05877447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db9dc104274_83751982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db9dc104274_83751982')) {function content_547db9dc104274_83751982($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?>

<div id="social_block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
	</ul>
</div>
<?php }} ?>