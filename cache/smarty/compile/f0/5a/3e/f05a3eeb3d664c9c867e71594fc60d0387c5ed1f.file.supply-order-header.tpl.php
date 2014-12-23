<?php /* Smarty version Smarty-3.1.14, created on 2014-12-05 10:39:12
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/pdf/supply-order-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8897725754817d4004af56-40840783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f05a3eeb3d664c9c867e71594fc60d0387c5ed1f' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/pdf/supply-order-header.tpl',
      1 => 1417524602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8897725754817d4004af56-40840783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo_path' => 0,
    'shop_name' => 0,
    'date' => 0,
    'title' => 0,
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54817d4012a152_08922687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54817d4012a152_08922687')) {function content_54817d4012a152_08922687($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?>
<table>
	<tr><td style="line-height: 6px">&nbsp;</td></tr>
</table>
	
<table style="width: 100%">
<tr>
	<td style="width: 50%">
        <?php if ($_smarty_tpl->tpl_vars['logo_path']->value){?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['logo_path']->value;?>
" />
        <?php }?>
	</td>
	<td style="width: 50%; text-align: right;">
		<table style="width: 100%">
			<tr>
				<td style="font-weight: bold; font-size: 14pt; color: #444; width: 100%"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #444; font-weight: bold;"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['date']->value, 'htmlall', 'UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #444; font-weight: bold;"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value, 'htmlall', 'UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #444; font-weight: bold;"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['reference']->value, 'htmlall', 'UTF-8');?>
</td>
			</tr>
		</table>
	</td>
</tr>
</table>

<?php }} ?>