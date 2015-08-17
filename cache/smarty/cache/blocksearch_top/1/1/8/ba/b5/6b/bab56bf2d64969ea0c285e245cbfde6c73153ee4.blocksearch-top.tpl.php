<?php /*%%SmartyHeaderCode:2006954355d1de2abace08-24281416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab56bf2d64969ea0c285e245cbfde6c73153ee4' => 
    array (
      0 => '/Users/Robin/Sites/rendu/PHP_avance_II_My_Presta/themes/MyTheme/modules/blocksearch/blocksearch-top.tpl',
      1 => 1439816963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2006954355d1de2abace08-24281416',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d1de2abea553_34597319',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1de2abea553_34597319')) {function content_55d1de2abea553_34597319($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/rendu/PHP_avance_II_My_Presta/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-sm btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
