<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:22:58
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111982597548954627dbfb9-90979627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2143983ce603091a9a92ace059cd15b5aa24d1e3' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1418285256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111982597548954627dbfb9-90979627',
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
  'unifunc' => 'content_548954627e7fa2_13874740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548954627e7fa2_13874740')) {function content_548954627e7fa2_13874740($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i><?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>

    </h3>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>
