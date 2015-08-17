<?php /* Smarty version Smarty-3.1.19, created on 2015-08-17 13:10:38
         compiled from "/Users/viller_m/rendu/PHP_avance_II_My_Presta/themes/MyTheme/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17318424455d198c46114d0-64639721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a1d47e1a95965fb7d3ac9421cb2ad9f1908f2ae' => 
    array (
      0 => '/Users/viller_m/rendu/PHP_avance_II_My_Presta/themes/MyTheme/index.tpl',
      1 => 1439809835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17318424455d198c46114d0-64639721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d198c4654af9_44003222',
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d198c4654af9_44003222')) {function content_55d198c4654af9_44003222($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"></div>
<?php }?><?php }} ?>
