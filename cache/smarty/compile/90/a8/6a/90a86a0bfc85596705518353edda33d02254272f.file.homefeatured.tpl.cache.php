<?php /* Smarty version Smarty-3.1.19, created on 2015-08-17 13:03:08
         compiled from "/Users/viller_m/rendu/PHP_avance_II_My_Presta/themes/MyTheme/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115322050055d198c39957f2-69052554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a86a0bfc85596705518353edda33d02254272f' => 
    array (
      0 => '/Users/viller_m/rendu/PHP_avance_II_My_Presta/themes/MyTheme/modules/homefeatured/homefeatured.tpl',
      1 => 1439809386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115322050055d198c39957f2-69052554',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d198c39bedc1_85710592',
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d198c39bedc1_85710592')) {function content_55d198c39bedc1_85710592($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
