<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:54
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14685122665489545e0a8ae8-72723716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a327f5f62d682410d55cd5eeeb0735283b16a5a' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1418286041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14685122665489545e0a8ae8-72723716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5489545e0dacb1_75441956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489545e0dacb1_75441956')) {function content_5489545e0dacb1_75441956($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
