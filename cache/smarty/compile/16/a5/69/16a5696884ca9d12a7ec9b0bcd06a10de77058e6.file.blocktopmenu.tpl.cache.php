<?php /* Smarty version Smarty-3.1.14, created on 2014-12-02 14:08:43
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:963284765547db9db0ded48-84800752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a5696884ca9d12a7ec9b0bcd06a10de77058e6' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1417524456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963284765547db9db0ded48-84800752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547db9db108fc2_84202162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db9db108fc2_84202162')) {function content_547db9db108fc2_84202162($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/data/web/virtuals/75717/virtual/www/subdom/presta/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	
	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
<?php }?><?php }} ?>