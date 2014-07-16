<?php /* Smarty version Smarty-3.1.15, created on 2014-07-07 16:19:30
         compiled from "app/view/formPerson.html" */ ?>
<?php /*%%SmartyHeaderCode:6266470915368efb14a6e94-96006260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122fd727e9579c8affd97e6e3acd0c9d0c00c509' => 
    array (
      0 => 'app/view/formPerson.html',
      1 => 1403312457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6266470915368efb14a6e94-96006260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5368efb14e7a96_70888944',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368efb14e7a96_70888944')) {function content_5368efb14e7a96_70888944($_smarty_tpl) {?><form id="formPerson" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/insertPerson">
    <table class="form-tbl">
        <tr>
            <td><label for="name">Name</label></td>
            <td><input class="inputbox" type="text" id="name" name="name" /></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input class="inputbox" type="text" id="email" name="email" /></td>
        </tr>
        <tr>
            <td><label for="institutions">Institutions</label></td>
            <td><input class="inputbox" type="text" id="institutions" name="institutions" /></td>
        </tr>
        <tr>
            <td><label for="project">Project</label></td>
            <td><input class="inputbox" type="text" id="project" name="project" /></td>
        </tr>
        <tr>
            <td><label for="twitter">Twitter</label></td>
            <td><input class="inputbox" type="text" id="twitter" name="twitter" /></td>
        </tr>
        <tr>
            <td><label for="website">Website</label></td>
            <td><input class="inputbox" type="text" id="website" name="website" /></td>
        </tr>
        <tr>
            <td><label for="phone">Phone</label></td>
            <td><input class="inputbox" type="text" id="phone" name="phone" /></td>
        </tr>
        <!--<tr>
            <td><label for="username">Username</label></td>
            <td><input class="inputbox" type="text" id="username" name="username" /></td>
        </tr>-->
        <tr>
            <td></td>
            <td><input class="btn" type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>

<script language='javascript' type='text/javascript'>
$().ready(function() {
    
    $("#formPerson").validate({
        submitHandler: function(form){
            do_ajax(form,"formPerson","#modal-person", "Person");
        },
        rules: {
			name: {
                required: true,
                checkNameExist: true
			},
			email: {
				required: true,
				email: true,
                checkEmailExist: true
			},
			twitter: {
				minlength: 2,
                checkTwitterExist: true
			},
			website: {
                url: true
			},
            username: {
                required: true,
                minlength: 3,
                checkUsernameExist: true
            }
		},
		messages: {
			name: {
                required: " Please enter a name"
			},
			email: {
                required: " Please enter a valid email address"
			},
			twitter: {
				minlength: " Please enter a valid twitter account"
			},
			website: {
				url: " Please enter a valid url"
			},
            username: {
                required: " Please enter a username",
                minlength: " Your username should be more than 3 characters",
                checkUsernameExist: " Username already exist"
            }
		}
    });
});
</script><?php }} ?>
