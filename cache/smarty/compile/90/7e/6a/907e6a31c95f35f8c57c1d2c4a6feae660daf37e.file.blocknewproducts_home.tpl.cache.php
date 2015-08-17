<?php /* Smarty version Smarty-3.1.19, created on 2015-08-17 15:14:19
         compiled from "/Users/Robin/Sites/rendu/PHP_avance_II_My_Presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198688450555d1de2b9b9503-76308286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '907e6a31c95f35f8c57c1d2c4a6feae660daf37e' => 
    array (
      0 => '/Users/Robin/Sites/rendu/PHP_avance_II_My_Presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl',
      1 => 1439816963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198688450555d1de2b9b9503-76308286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d1de2b9e08f5_52216160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1de2b9e08f5_52216160')) {function content_55d1de2b9e08f5_52216160($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
