<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 17:23:42
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal//views/templates/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31376953454905c8e80fe17-74602463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166b615c920d2ea1c1a52d11cf63316385146e8a' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/paypal//views/templates/admin/header.tpl',
      1 => 1418747020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31376953454905c8e80fe17-74602463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54905c8e8d3539_98982582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54905c8e8d3539_98982582')) {function content_54905c8e8d3539_98982582($_smarty_tpl) {?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/js/back_office.js"></script><?php }} ?>
