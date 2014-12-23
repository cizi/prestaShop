<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 18:13:34
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16032171085490683e3b4c93-13860309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ba5048115551f001cabedf3743949ae8e33ca1' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/themes/pos_accessories3/modules/blockcontact/nav.tpl',
      1 => 1418749943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16032171085490683e3b4c93-13860309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'context' => 0,
    'paginationId' => 0,
    'compared_products' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490683e470e86_57074183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490683e470e86_57074183')) {function content_5490683e470e86_57074183($_smarty_tpl) {?>

<div class="header_links_wrap">
	<ul class="ul_header_links_wrap">
		<li class="li_header_links_wrap">
			<div class="my-account-header">
				<a href="#"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockcontact'),$_smarty_tpl);?>

					<i class="fa fa-chevron-down"></i>
				</a>
			</div>
			<ul id="header_links">
				<?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>
				<li class="first"><a class="link-myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockcontact'),$_smarty_tpl);?>
</a></li>
				
				<li><a class="link-wishlist wishlist_block" href="<?php echo $_smarty_tpl->tpl_vars['context']->value->link->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockcontact'),$_smarty_tpl);?>
</a></li>
				<li class="my-compare">
					<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" class="compare-form">
						<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" disabled="disabled">
							<span><?php echo smartyTranslate(array('s'=>'My Compare'),$_smarty_tpl);?>
 (<strong class="total-compare-val"><?php echo count($_smarty_tpl->tpl_vars['compared_products']->value);?>
</strong>)</span>
						</button>
						<input type="hidden" name="compare_product_count" class="compare_product_count" value="<?php echo count($_smarty_tpl->tpl_vars['compared_products']->value);?>
" />
						<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
					</form>
				</li>
				<li><a class="link-mycart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockcontact'),$_smarty_tpl);?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
						<!--<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>-->
						<li class="last"><a class="link-out" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockcontact'),$_smarty_tpl);?>
"  rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockcontact'),$_smarty_tpl);?>
</a></li>
					<?php } else { ?>
						<li class="last"><a class="link-login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockcontact'),$_smarty_tpl);?>
"  rel="nofollow"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockcontact'),$_smarty_tpl);?>
</a></li>
				<?php }?>
				
			</ul>
		</li>
	</ul>
</div>	<?php }} ?>
