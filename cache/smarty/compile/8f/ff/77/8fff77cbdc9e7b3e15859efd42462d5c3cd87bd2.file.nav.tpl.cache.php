<?php /* Smarty version Smarty-3.1.19, created on 2015-08-17 15:14:20
         compiled from "/Users/Robin/Sites/rendu/PHP_avance_II_My_Presta/themes/MyTheme/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63404215255d1de2ce5de05-02515676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fff77cbdc9e7b3e15859efd42462d5c3cd87bd2' => 
    array (
      0 => '/Users/Robin/Sites/rendu/PHP_avance_II_My_Presta/themes/MyTheme/modules/blockcontact/nav.tpl',
      1 => 1439816963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63404215255d1de2ce5de05-02515676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d1de2ceb7269_89072022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1de2ceb7269_89072022')) {function content_55d1de2ceb7269_89072022($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>
<?php }} ?>
