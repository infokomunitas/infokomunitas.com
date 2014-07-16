<?php /* Smarty version Smarty-3.1.15, created on 2014-05-22 09:54:31
         compiled from "app/view/editProfile.html" */ ?>
<?php /*%%SmartyHeaderCode:10438642275369d9dc2dc336-92052561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82dde77ad81ae8ea88bb5944b98743c3015fc0d1' => 
    array (
      0 => 'app/view/editProfile.html',
      1 => 1400646021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10438642275369d9dc2dc336-92052561',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5369d9dc4c6c86_02983421',
  'variables' => 
  array (
    'user' => 0,
    'basedomain' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5369d9dc4c6c86_02983421')) {function content_5369d9dc4c6c86_02983421($_smarty_tpl) {?><literal>
<script language='javascript' type='text/javascript'>
$().ready(function() {
    
    $("#formEditPerson").validate({
        rules: {
			name: {
                required: true,
                checkNameExist: {
                    depends: function(element) {
                        // Do what you want to test
                        return $('#name').val()!='<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['name'];?>
';
                      }
                }
			},
			email: {
				required: true,
				email: true,
                checkEmailExist: {
                    depends: function(element) {
                        // Do what you want to test
                        return $('#email').val()!='<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['email'];?>
';
                      }
                }
			},
            username: {
				required: true,
                alphanumeric: true,
                checkUsernameExist: {
                    depends: function(element) {
                        // Do what you want to test
                        return $('#username').val()!='<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['username'];?>
';
                      }
                }
			},
			twitter: {
				minlength: 2,
                checkTwitterExist: {
                    depends: function(element) {
                        // Do what you want to test
                        return $('#twitter').val()!='<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['twitter'];?>
';
                      }
                }
			},
			website: {
                url: true
			}
		},
		messages: {
			name: {
                required: " Please enter a name"
			},
			email: {
                required: " Please enter a valid email address"
			},
            username: {
                required: " Please enter a username"
			},
			twitter: {
				minlength: " Please enter a valid twitter account"
			},
			website: {
				url: " Please enter a valid url"
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
            <li class="selected"><a href="#">Edit Profile</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user/editPassword">Password</a></li>
        </ul>
    </div>
    
    <div class="sidebar-2-right">
        <h2 class="title">Edit Profile</h2>
        <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        <form id="formEditPerson" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user/doEditProfile">
            <table class="form-tbl">
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input class="inputbox" type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['name'];?>
" /></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input class="inputbox" type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['email'];?>
"/></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input class="inputbox" type="text" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['username'];?>
"/></td>
                </tr>
                <tr>
                    <td><label for="institutions">Institutions</label></td>
                    <td><input class="inputbox" type="text" id="institutions" name="institutions" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['institutions'];?>
" /></td>
                </tr>
                <tr>
                    <td><label for="project">Project</label></td>
                    <td><input class="inputbox" type="text" id="project" name="project" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['project'];?>
" /></td>
                </tr>
                <tr>
                    <td><label for="twitter">Twitter</label></td>
                    <td><input class="inputbox" type="text" id="twitter" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['twitter'];?>
"/></td>
                </tr>
                <tr>
                    <td><label for="website">Website</label></td>
                    <td><input class="inputbox" type="text" id="website" name="website" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['website'];?>
"/></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone</label></td>
                    <td><input class="inputbox" type="text" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login']['phone'];?>
"/></td>
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
