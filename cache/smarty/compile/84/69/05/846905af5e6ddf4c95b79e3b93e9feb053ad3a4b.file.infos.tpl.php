<?php /* Smarty version Smarty-3.1.19, created on 2014-12-15 13:42:21
         compiled from "/data/web/virtuals/75717/virtual/www/subdom/presta/modules/bankwire/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290000261548ed72dada117-41241257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '846905af5e6ddf4c95b79e3b93e9feb053ad3a4b' => 
    array (
      0 => '/data/web/virtuals/75717/virtual/www/subdom/presta/modules/bankwire/views/templates/hook/infos.tpl',
      1 => 1418393081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290000261548ed72dada117-41241257',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548ed72db7a790_81271566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ed72db7a790_81271566')) {function content_548ed72db7a790_81271566($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
