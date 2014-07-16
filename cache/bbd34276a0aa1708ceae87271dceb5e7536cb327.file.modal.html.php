<?php /* Smarty version Smarty-3.1.15, created on 2014-06-28 14:14:54
         compiled from "app/view/modal.html" */ ?>
<?php /*%%SmartyHeaderCode:16406138275366f3f9596c07-38282393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd34276a0aa1708ceae87271dceb5e7536cb327' => 
    array (
      0 => 'app/view/modal.html',
      1 => 1403936066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16406138275366f3f9596c07-38282393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5366f3f9666626_28212287',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366f3f9666626_28212287')) {function content_5366f3f9666626_28212287($_smarty_tpl) {?><!-- LOGIN MODAL -->

<div id="modal-login" class="modal-background">
    <div class="modal-overlay"></div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4>Login</h4>
              <img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/bg-login.png" />
              <div class="clear"></div>
            </div>
            <div class="modal-body">
              <form action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
login/doLogin" method="POST" id="formLogin">
                <div class="form-group">
                  <input type="username" id="login-username" class="input-modal" name="username" placeholder="Username" required aria-required="true"/>
                </div>
                <div class="form-group">
                  <input type="password" id="login-password" class="input-modal" name="password" placeholder="Password" required aria-required="true"/>
                </div>
                <button type="button" class="btn close" style="width: 49%;">Cancel</button>
                <input type="submit" class="btn" style="width: 49%;" value="Login" />
              </form>
            </div>
            <div class="modal-footer"> 
                <!--Not a member? <a href="#" class="signup">Sign up now!</a><br />
                <a href="#">Forgotten password?</a>-->
            </div>
        </div>
    </div>
</div>

<!-- LOGIN SIGNUP -->

<div id="modal-signup" class="modal-background">
    <div class="modal-overlay"></div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4>Sign Up</h4>
              <img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/bg-signup.png" />
              <div class="clear"></div>
            </div>
            <div class="modal-body">
            <form action="" method="POST" id="formSignup">
                <div class="form-group" id="nameGroup">
                  <input type="text" id="signup-name" class="input-modal" name="name" placeholder="Name (Required)" required aria-required="true"/>
                </div>
                <div class="form-group" id="emailGroup">
                  <input type="email" id="signup-email" class="input-modal" name="email" placeholder="Email (Required)" required aria-required="true"/>
                </div>
                <div class="form-group" id="usernameGroup">
                  <input type="text" id="signup-username" class="input-modal" name="username" placeholder="Username (Required)" pattern="[a-zA-Z0-9_]+" required aria-required="true"/>
                </div>
                <div class="form-group" id="twitterGroup">
                  <label for='signup-twitter' id="usernameValue" style="padding-top: 10px; color: #555; position: absolute; top: 250px; left: 20px; display: none;">@</label>
                    <input type="text" id="signup-twitter" class="input-modal" name="twitter" placeholder="Twitter" oninput="usernameValue()"/>
                 <script language='javascript' type='text/javascript'>
					
                    function usernameValue() {
                        $('label#usernameValue').show();
                        $('input#signup-twitter').css("padding-left","20px");
                        $('input#signup-twitter').css("width","315px");
                    }
					
                    </script>   
                  
                </div>
                <div class="form-group">
                  <input type="url" id="signup-website" class="input-modal" name="website" placeholder="Website"/>
                </div>
                <div class="form-group">
                  <input type="text" id="signup-phone" class="input-modal" name="phone" placeholder="Phone"/>
                </div>
                <div class="form-group">
                  <input type="password" id="signup-password" class="input-modal" name="password" placeholder="Password (Required)" required aria-required="true"/>                  
                </div>
                <div class="form-group">
                  <input type="password" id="signup-re_password" class="input-modal" name="rePassword" placeholder="Retype Password (Required)" required aria-required="true" oninput="check(this)"/>
                  
                  <script language='javascript' type='text/javascript'>
                    
					function check(input) {
                        if (input.value != document.getElementById('signup-password').value) {
                            input.setCustomValidity('The two passwords must match.');
                        } else {
                            // input is valid -- reset the error message
                            input.setCustomValidity('');
                       }
                    }
					
                    </script>
                  
                  
                </div>
                <button type="button" class="btn close" style="width: 49%;">Cancel</button>
                <input type="submit" class="btn" style="width: 49.5%;" value="Signup" />
              </form>
            </div>
            <div class="modal-footer"> 
                <!--Already a member? <a href="#" class="signup">Login now!</a><br />
                <a href="#">Forgotten password?</a>-->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    	$('a#btn-login').click(function(){
           $('div#modal-login').fadeToggle("linear");
           $('div.modal-overlay').show();
        });
        $('a#btn-signup').click(function(){
           $('div#modal-signup').fadeToggle("linear");
           $('div.modal-overlay').show();
        });
        $('.close,.modal-overlay').click(function(){
           $('div#modal-login,div#modal-signup').fadeOut(); 
        });

</script><?php }} ?>
