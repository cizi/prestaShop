<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:13:34
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1153546105490683e36daf4-76548419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd961580ed2070679c6395d836980e787c33ffb5a' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockuserinfo/nav.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1153546105490683e36daf4-76548419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490683e39a1a7_71139708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490683e39a1a7_71139708')) {function content_5490683e39a1a7_71139708($_smarty_tpl) {?><!-- Block user information module NAV  -->
<p id="header_user_info">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<?php echo smartyTranslate(array('s'=>'Welcome ','mod'=>'blockuserinfo'),$_smarty_tpl);?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'Default Welcome Msg!','mod'=>'blockuserinfo'),$_smarty_tpl);?>

	<?php }?>
</p><?php }} ?>
