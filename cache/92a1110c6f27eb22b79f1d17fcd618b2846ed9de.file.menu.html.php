<?php /* Smarty version Smarty-3.1.15, created on 2014-06-29 12:09:27
         compiled from "app/view/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:11032021955366f3f940aaa8-68268686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92a1110c6f27eb22b79f1d17fcd618b2846ed9de' => 
    array (
      0 => 'app/view/menu.html',
      1 => 1404014965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11032021955366f3f940aaa8-68268686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5366f3f94be852_90187193',
  'variables' => 
  array (
    'user' => 0,
    'page' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366f3f94be852_90187193')) {function content_5366f3f94be852_90187193($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['login']['name']) {?>
<div class="wrapper">
<div id="nav-box">
	<div id="menu">
        <ul>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='home') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Home</a>
    		</li>
    		<?php if ($_smarty_tpl->tpl_vars['page']->value['page']!='activate') {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='upload') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
upload">Batch Upload</a>
			</li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='onebyone') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/indivContent">One By One</a>
    		</li>
            <?php }?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='browse') {?>selected<?php }?>">
    			<a href="#">Browse</a>
                <ul>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataTaxon">Taxa</a></li>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataLocation">Locations</a></li>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataPerson">Persons</a></li>
    			</ul>
    		</li>

            

    	</ul>
    </div>
<!--    
	<div id="search-menu">  
        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/search/" method="GET">
            <div class="search-box">
              <input type="text" placeholder="Search" name="search" />
              <input class="btn-search" type="submit" value="Search" />
              
            </div>
        </form>
    </div>
-->
    <div class="clear"></div>    
</div>
</div>
<?php } else { ?>
<div class="wrapper">
<div id="nav-box">
	<div id="menu">
        <ul>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='home') {?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Home</a>
    		</li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='browse') {?>selected<?php }?>">
    			<a href="#">Browse</a>
                <ul>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataTaxon">Taxa</a></li>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataLocation">Locations</a></li>
    				<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataPerson">Persons</a></li>
    			</ul>
    		</li>
    	</ul>
    </div>
<!--    
    <div id="search-menu">  
        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/search/" method="GET">
            <div class="search-box">
              <input type="text" placeholder="Search" name="search" />
              <input class="btn-search" type="submit" value="Search" />
              
            </div>
        </form>
    </div>
-->
    <div class="clear"></div>    
</div>
</div>
<?php }?><?php }} ?>
