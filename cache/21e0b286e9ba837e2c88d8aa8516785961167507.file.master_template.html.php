<?php /* Smarty version Smarty-3.1.15, created on 2014-07-16 14:51:10
         compiled from "app/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:16918954255366f3f8bef252-23406211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e0b286e9ba837e2c88d8aa8516785961167507' => 
    array (
      0 => 'app/view/master_template.html',
      1 => 1405493465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16918954255366f3f8bef252-23406211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5366f3f903dab0_16610025',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366f3f903dab0_16610025')) {function content_5366f3f903dab0_16610025($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<div>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
	
    <footer>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
	</footer>
	
</body> 
</html><?php }} ?>
