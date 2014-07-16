<?php /* Smarty version Smarty-3.1.15, created on 2014-04-22 11:20:19
         compiled from "app\view\header.html" */ ?>
<?php /*%%SmartyHeaderCode:3135953417c6dce60c0-34909204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18d429f8a474c12aee81561adb7579b0c2ae2b2' => 
    array (
      0 => 'app\\view\\header.html',
      1 => 1398158409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135953417c6dce60c0-34909204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53417c6dcec289_55720676',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53417c6dcec289_55720676')) {function content_53417c6dcec289_55720676($_smarty_tpl) {?><div class="wrapper">
    <div id="identity">
        <span id="flora">FLORA</span><span id="kalbar"> KALBAR</span>
    </div>
    <div id="slogan">
        <p>Records of Plants of Kalimantan Barat</p>
    </div>
    
    <?php if (isset($_SESSION['login'])) {?>
    
    
    <div id="login"> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
login/doLogout" class="btn welcome">Welcome, <?php echo $_SESSION['login']['name'];?>
</a> 
    </div>
    <div class="clear"></div>
    
    <?php } else { ?>
    <div id="login"> 
        <a href="#signup-modal" id="btn-signup" class="btn signup">Sign Up</a> 
        <a href="#login-modal" id="btn-login" class="btn login">Login</a> 
    </div>
    <div class="clear"></div>
	<?php }?>
</div><?php }} ?>
