<?php /* Smarty version Smarty-3.1.15, created on 2014-04-22 11:20:19
         compiled from "app\view\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:263653417c6dcfd529-33909731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786ed48ae515d8bcddabc34de98404c5328ea2dc' => 
    array (
      0 => 'app\\view\\menu.html',
      1 => 1398158409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263653417c6dcfd529-33909731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53417c6dee3356_66524054',
  'variables' => 
  array (
    'page' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53417c6dee3356_66524054')) {function content_53417c6dee3356_66524054($_smarty_tpl) {?>
<div class="wrapper">
<div id="nav-box">
	<div id="menu">
        <ul>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='home') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Home</a>
    		</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='upload') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
upload">Upload</a>
    		</li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='zip') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
zip">Zip</a>
    		</li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='onebyone') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone">One By One</a>
    		</li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='browse') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse">Browse</a>
    		</li>

            

    	</ul>
    </div>
    
	<div id="search-menu">  
        <form role="form">
            <div class="search-box">
              <input type="text" placeholder="Search" />
              <button class="btn btn-search" type="button">Search</button>
            </div>
        </form>
    </div>
    <div class="clear"></div>    
</div>
</div><?php }} ?>
