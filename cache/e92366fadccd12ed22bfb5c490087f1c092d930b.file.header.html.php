<?php /* Smarty version Smarty-3.1.15, created on 2014-06-29 12:21:11
         compiled from "app/view/header.html" */ ?>
<?php /*%%SmartyHeaderCode:18866210505366f3f9157974-38845243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92366fadccd12ed22bfb5c490087f1c092d930b' => 
    array (
      0 => 'app/view/header.html',
      1 => 1404015669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18866210505366f3f9157974-38845243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5366f3f9404744_80815372',
  'variables' => 
  array (
    'user' => 0,
    'page' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366f3f9404744_80815372')) {function content_5366f3f9404744_80815372($_smarty_tpl) {?><div class="wrapper">
    <div id="identity">
        <span id="flora">FLORA</span><span id="kalbar"> KALBAR</span>
    </div>
    <div id="slogan">
        <p>Records of Plants of Kalimantan Barat</p>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['user']->value['login']['name']) {?>
    
    
    <div id="login" class="loginwelcome"> 
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page']!=='activate') {?>
        <a id="welcome" href="#" class="btn welcome">Welcome, <?php echo $_smarty_tpl->tpl_vars['user']->value['login']['name'];?>
</a> 
        <?php }?>
        <div id="box-user">
        <ul>
            <li style="border-bottom: 1px dotted #0095a2;border-top: 1px dotted #0095a2;"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user/editProfile">Setting</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
logout.php">Logout</a></li>
        </ul>
    </div>
        
    </div>
    
    <div class="clear"></div>
    
    
    <script type="text/javascript">
    
        $(document).ready(function () {
            $('a.welcome').click(function(){
                $('a#welcome').toggleClass('drop');
                $('#box-user').toggle();
            });
        });
    
    </script>
    
    <?php } else { ?>
    <div id="login"> 
        <a href="#signup-modal" id="btn-signup" class="btn signup">Sign Up</a> 
        <a href="#login-modal" id="btn-login" class="btn login">Login</a> 
    </div>
    <div class="clear"></div>
	<?php }?>
</div>
<div class="clear"></div><?php }} ?>
