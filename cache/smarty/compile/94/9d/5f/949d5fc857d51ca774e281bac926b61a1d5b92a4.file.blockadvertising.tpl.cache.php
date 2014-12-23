<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:13:33
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12133159025490683d6adbf0-71199750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '949d5fc857d51ca774e281bac926b61a1d5b92a4' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockadvertising/blockadvertising.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12133159025490683d6adbf0-71199750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490683d6c2a22_11013382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490683d6c2a22_11013382')) {function content_5490683d6c2a22_11013382($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>
