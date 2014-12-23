<?php /* Smarty version Smarty-3.1.19, created on 2014-12-15 13:44:45
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/gadwords/views/templates/admin/gadwords.tpl" */ ?>
<?php /*%%SmartyHeaderCode:407109702548ed7bd123741-46338641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e61a9f3d30b057e76e652e37c74ccf959a7941b' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/gadwords/views/templates/admin/gadwords.tpl',
      1 => 1418647482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '407109702548ed7bd123741-46338641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'is_local' => 0,
    'code' => 0,
    'landing_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548ed7bd1b0b12_11744893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ed7bd1b0b12_11744893')) {function content_548ed7bd1b0b12_11744893($_smarty_tpl) {?>

<div class="panel">
	<div class="row gadwords-header">
		<div class="col-xs-6 text-center">
			<img id="adwords_logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
img/header_logo.jpg" alt="<?php echo smartyTranslate(array('s'=>'Google AdWords','mod'=>'gadwords'),$_smarty_tpl);?>
" />
		</div>
		<div class="col-xs-6 text-center">
			<span class="items-video-promotion"><object type="text/html" data="<?php echo smartyTranslate(array('s'=>'//www.youtube.com/embed/25AKLJAk-Lk?rel=0&amp;controls=0&amp;showinfo=0','mod'=>'gadwords'),$_smarty_tpl);?>
" width="400" height="225"></object></span>
		</div>
	</div>
	<hr />
	<div class="gadwords-content">
		<div class="row">
			<div class="col-xs-12">
				<p>
					<b>
						<?php echo smartyTranslate(array('s'=>'Show your ad to people at the very moment they are searching for what you offer. Google and PrestaShop increase your advertising investment by offering free advertising after you start spending!','mod'=>'gadwords'),$_smarty_tpl);?>

					</b>
				</p>
				
				<ul>
					<li><?php echo smartyTranslate(array('s'=>'Add your promotional code from Prestashop after entering billing details, and we will automatically credit your account when you spend a minimum credit*.','mod'=>'gadwords'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Got questions? Call at 0800 169 0489, and a Google AdWords expert will help you build your first campaign and offer tips on how to get the most out of AdWords.','mod'=>'gadwords'),$_smarty_tpl);?>
</li>
				</ul>
				<br/>
				<div class="col-xs-12 text-center">
					<?php if ($_smarty_tpl->tpl_vars['is_local']->value==false) {?>
						<h4><?php echo smartyTranslate(array('s'=>'Your Google AdWords promotional code for your shop is','mod'=>'gadwords'),$_smarty_tpl);?>
:</h4>
						<pre id="adwords_voucher"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</pre>
						<p><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['landing_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" title="Google AdWords"><?php echo smartyTranslate(array('s'=>'Start your campaign now with your promotional code','mod'=>'gadwords'),$_smarty_tpl);?>
</a></p>
					<?php } else { ?>
						<p><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['landing_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" title="Google AdWords"><?php echo smartyTranslate(array('s'=>'Start your campaign','mod'=>'gadwords'),$_smarty_tpl);?>
</a></p>
					<?php }?>
				</div>
				<em class="small">
					* <?php echo smartyTranslate(array('s'=>'terms and conditions apply.','mod'=>'gadwords'),$_smarty_tpl);?>

				</em>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
