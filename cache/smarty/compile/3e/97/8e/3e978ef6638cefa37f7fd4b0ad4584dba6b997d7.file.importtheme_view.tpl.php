<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:00:56
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193425349754906548d96e48-88128212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e978ef6638cefa37f7fd4b0ad4584dba6b997d7' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin5010/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1418285256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193425349754906548d96e48-88128212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54906548e38338_39310870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54906548e38338_39310870')) {function content_54906548e38338_39310870($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i><?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>

    </h3>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>
