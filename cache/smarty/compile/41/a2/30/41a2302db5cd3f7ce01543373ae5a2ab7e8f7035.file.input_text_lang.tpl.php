<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:34:59
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/products/input_text_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1606005015547dc003632211-72350715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a2302db5cd3f7ce01543373ae5a2ab7e8f7035' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin2385/themes/default/template/controllers/products/input_text_lang.tpl',
      1 => 1417523819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1606005015547dc003632211-72350715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'input_name' => 0,
    'input_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547dc00366f181_56778734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dc00366f181_56778734')) {function content_547dc00366f181_56778734($_smarty_tpl) {?>

<div class="translatable">
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
<div class="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="<?php if (!$_smarty_tpl->tpl_vars['language']->value['is_default']){?>display:none;<?php }?>float: left;">
	<input size="30" type="text" id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" 
	name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
		value="<?php echo (($tmp = @smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]))===null||$tmp==='' ? '' : $tmp);?>
"
		onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" onblur="updateLinkRewrite();"/>
</div>
<?php } ?>
</div>
<?php }} ?>