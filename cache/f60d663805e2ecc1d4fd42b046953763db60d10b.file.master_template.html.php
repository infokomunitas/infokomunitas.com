<?php /* Smarty version Smarty-3.1.15, created on 2014-04-15 19:34:18
         compiled from "app\view\master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:2300153417c1fd47477-99641091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f60d663805e2ecc1d4fd42b046953763db60d10b' => 
    array (
      0 => 'app\\view\\master_template.html',
      1 => 1397583015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2300153417c1fd47477-99641091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53417c20006055_27161163',
  'variables' => 
  array (
    'basedomain' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53417c20006055_27161163')) {function content_53417c20006055_27161163($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<!-- RUNNING GLOBAL VAR -->
	<script>
		var basedomain = "<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
";
	</script>
	
	<!-- HEADER -->
    <header>
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
	</header>
    
    <!-- NAVIGATION MENU -->
    <nav>
		<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
	</nav>
	
	
	<!-- CONTENT -->
	<main>
	<div class="wrapper">
		
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
	</main>
    
    <!-- MODAL -->
	<?php echo $_smarty_tpl->getSubTemplate ("modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   
	
	
	<!-- FOOTER -->
    <footer>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
	</footer>
	
</body> 
</html><?php }} ?>
