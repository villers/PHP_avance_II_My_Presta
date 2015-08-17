<?php /* Smarty version Smarty-3.1.19, created on 2015-08-17 15:14:19
         compiled from "/Users/Robin/Sites/rendu/PHP_avance_II_My_Presta/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181570006955d1de2b857c01-66776120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e29ff90f1addb623ae78f53f795a4943e403473' => 
    array (
      0 => '/Users/Robin/Sites/rendu/PHP_avance_II_My_Presta/modules/blockfacebook/blockfacebook.tpl',
      1 => 1439816962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181570006955d1de2b857c01-66776120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d1de2b87d147_83319411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1de2b87d147_83319411')) {function content_55d1de2b87d147_83319411($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
