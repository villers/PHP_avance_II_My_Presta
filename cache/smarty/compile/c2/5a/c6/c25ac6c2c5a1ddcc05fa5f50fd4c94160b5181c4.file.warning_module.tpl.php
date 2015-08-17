<?php /* Smarty version Smarty-3.1.19, created on 2015-08-17 09:50:26
         compiled from "/Users/viller_m/rendu/PHP_avance_II_My_Presta/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141060775955d19242b47b16-41274813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c25ac6c2c5a1ddcc05fa5f50fd4c94160b5181c4' => 
    array (
      0 => '/Users/viller_m/rendu/PHP_avance_II_My_Presta/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141060775955d19242b47b16-41274813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d19242b5dcc4_41856021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d19242b5dcc4_41856021')) {function content_55d19242b5dcc4_41856021($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
