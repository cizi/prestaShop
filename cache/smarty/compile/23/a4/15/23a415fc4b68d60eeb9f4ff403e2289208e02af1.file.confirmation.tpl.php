<?php /* Smarty version Smarty-3.1.14, created on 2014-12-08 21:18:43
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/cashondelivery/views/templates/hook/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1656202284548607a3a9b8c7-02690625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a415fc4b68d60eeb9f4ff403e2289208e02af1' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/cashondelivery/views/templates/hook/confirmation.tpl',
      1 => 1417524478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656202284548607a3a9b8c7-02690625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_548607a3ac7c73_97414200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548607a3ac7c73_97414200')) {function content_548607a3ac7c73_97414200($_smarty_tpl) {?>

<p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'cashondelivery'),$_smarty_tpl);?>

	<br /><br />
	<?php echo smartyTranslate(array('s'=>'You have chosen the cash on delivery method.','mod'=>'cashondelivery'),$_smarty_tpl);?>

	<br /><br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','mod'=>'cashondelivery'),$_smarty_tpl);?>
</span>
	<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact-form',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'cashondelivery'),$_smarty_tpl);?>
</a>.
</p>
<?php }} ?>