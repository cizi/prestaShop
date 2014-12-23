<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 15:01:43
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82155148548af54730b218-27107243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a3a78e39d63537049f07bfb789285cefd5511a5' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blocksharefb/blocksharefb.tpl',
      1 => 1418392849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82155148548af54730b218-27107243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548af5473d7235_61451195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548af5473d7235_61451195')) {function content_548af5473d7235_61451195($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
