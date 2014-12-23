<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 09:23:02
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147625720054895466d86914-43085458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d419a769ac1446659927a6b96257d8bcd574044' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/admin/themes/default/template/content.tpl',
      1 => 1418285151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147625720054895466d86914-43085458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54895466d94c76_28057059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54895466d94c76_28057059')) {function content_54895466d94c76_28057059($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
