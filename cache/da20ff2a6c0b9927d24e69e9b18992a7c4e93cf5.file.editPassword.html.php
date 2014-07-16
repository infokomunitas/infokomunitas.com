<?php /* Smarty version Smarty-3.1.15, created on 2014-05-16 21:50:29
         compiled from "app/view/editPassword.html" */ ?>
<?php /*%%SmartyHeaderCode:16938803465369da018fce53-42423667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da20ff2a6c0b9927d24e69e9b18992a7c4e93cf5' => 
    array (
      0 => 'app/view/editPassword.html',
      1 => 1400053998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16938803465369da018fce53-42423667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5369da019a3002_66562514',
  'variables' => 
  array (
    'basedomain' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5369da019a3002_66562514')) {function content_5369da019a3002_66562514($_smarty_tpl) {?><literal>
<script language='javascript' type='text/javascript'>
$().ready(function() {
    
    $("#formEditPassword").validate({
        rules: {
			password: {
                required: true,
                checkPassword: true
            },
            newPassword: {
                required: true
            },
            rePassword:{
                required: true,
                equalTo: "#newPassword"
            }
		}
    });
    
});
</script>
</literal>
<div class="content">
    <div class="sidebar-2-left">
        <ul>
            <li>Setting</li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user/editProfile">Edit Profile</a></li>
            <li class="selected"><a href="#">Password</a></li>
        </ul>
    </div>
    
    <div class="sidebar-2-right">
        <h2 class="title">Edit Profile</h2>
        <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        <form id="formEditPassword" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user/doEditPassword">
            <table class="form-tbl">
                <tr>
                    <td><label for="password">Old Password</label></td>
                    <td><input class="inputbox" type="password" id="password" name="password" /></td>
                </tr>
                <tr>
                    <td><label for="newPassword">New Password</label></td>
                    <td><input class="inputbox" type="password" id="newPassword" name="newPassword" /></td>
                </tr>
                <tr>
                    <td><label for="rePassword">Retype Password</label></td>
                    <td><input class="inputbox" type="password" id="rePassword" name="rePassword" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" value="Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
    
    <div class="clear"></div>
</div><?php }} ?>
