<?php /* Smarty version Smarty-3.1.19, created on 2015-08-17 13:26:15
         compiled from "/Users/viller_m/rendu/PHP_avance_II_My_Presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40708247855d1c4d7a69f11-74001072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '281140e8f08fc8c4f2c55430ebbd03256256f504' => 
    array (
      0 => '/Users/viller_m/rendu/PHP_avance_II_My_Presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl',
      1 => 1436343228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40708247855d1c4d7a69f11-74001072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d1c4d7aaef22_04039527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1c4d7aaef22_04039527')) {function content_55d1c4d7aaef22_04039527($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
