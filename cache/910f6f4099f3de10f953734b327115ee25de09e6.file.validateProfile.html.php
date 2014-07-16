<?php /* Smarty version Smarty-3.1.15, created on 2014-06-29 13:03:01
         compiled from "app/view/validateProfile.html" */ ?>
<?php /*%%SmartyHeaderCode:40526359153a7d1721c9769-14664610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '910f6f4099f3de10f953734b327115ee25de09e6' => 
    array (
      0 => 'app/view/validateProfile.html',
      1 => 1404016101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40526359153a7d1721c9769-14664610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53a7d172224d97_57369433',
  'variables' => 
  array (
    'msg' => 0,
    'basedomain' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7d172224d97_57369433')) {function content_53a7d172224d97_57369433($_smarty_tpl) {?>
<script language='javascript' type='text/javascript'>

$().ready(function() {
    
    $("#validateAccount").validate({
        rules: {
            username: {
                required: true,
                
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

$(document).on('blur','#username', function(){
    var username = $(this).val();
    $.post(basedomain+'user/checkUsername', {username:username}, function(data){

        console.log(data);
        if (!data){
            $('.fieldExist').html('Username Exist');
        }

    });
})

$(document).on('click','.submitData', function(){
    var newPassword = $('#newPassword').val();
    var rePassword = $('#rePassword').val();

    if (newPassword !== rePassword){
        alert('Password not match');
        return false;
    }
})


</script>

<div class="content">
    <div class="sidebar-2-left">
        <ul>
            <li>Profile</li>
            <li><a href="#">Validate Profile</a></li>
           
        </ul>
    </div>
    
    <div class="sidebar-2-right">
        <h2 class="title">Validate Profile</h2>
        <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        <form id="validateAccount" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
activate/accountValid">
            <table class="form-tbl">
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input class="inputbox" type="username" id="username" name="username" /><span class="fieldExist"></span></td>
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
                    <td>
                        <input type="hidden" value="1" name="token"/>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email"/>
                        <input class="btn submitData" type="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
    <div class="clear"></div>
</div><?php }} ?>
