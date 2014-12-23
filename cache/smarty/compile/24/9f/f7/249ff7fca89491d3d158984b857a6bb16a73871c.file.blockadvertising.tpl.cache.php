<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:08:43
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1319304008547db9db63bf84-91821804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249ff7fca89491d3d158984b857a6bb16a73871c' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blockadvertising/blockadvertising.tpl',
      1 => 1417524393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1319304008547db9db63bf84-91821804',
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
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db9db650cf6_86184623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db9db650cf6_86184623')) {function content_547db9db650cf6_86184623($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>