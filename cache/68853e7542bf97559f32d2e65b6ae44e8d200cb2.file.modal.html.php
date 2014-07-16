<?php /* Smarty version Smarty-3.1.15, created on 2014-04-19 08:40:29
         compiled from "app\view\modal.html" */ ?>
<?php /*%%SmartyHeaderCode:2740953417d0acbe541-80056763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68853e7542bf97559f32d2e65b6ae44e8d200cb2' => 
    array (
      0 => 'app\\view\\modal.html',
      1 => 1397704333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2740953417d0acbe541-80056763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53417d0ad7bce0_96727841',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53417d0ad7bce0_96727841')) {function content_53417d0ad7bce0_96727841($_smarty_tpl) {?><!-- LOGIN MODAL -->

<div id="modal-login" class="modal-background">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4>Login</h4>
              <img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/bg-login.png" />
              <div class="clear"></div>
            </div>
            <div class="modal-body">
              <form action="" method="POST" id="formLogin">
                <div class="form-group">
                  <input type="email" id="login-email" class="input-modal" name="email" placeholder="Email" required aria-required="true"/>
                </div>
                <div class="form-group">
                  <input type="password" id="login-password" class="input-modal" name="pass" placeholder="Password" required aria-required="true"/>
                </div>
                <button type="button" class="btn close" style="width: 49%;">Cancel</button>
                <input type="submit" class="btn" style="width: 49%;" value="Login" />
              </form>
            </div>
            <div class="modal-footer"> 
                Not a member? <a href="#" class="signup">Sign up now!</a><br />
                <a href="#">Forgotten password?</a>
            </div>
        </div>
    </div>
</div>

<!-- LOGIN SIGNUP -->

<div id="modal-signup" class="modal-background">
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
                  <input type="text" id="signup-name" class="input-modal" name="name" placeholder="Name" required aria-required="true"/>
                </div>
                <div class="form-group" id="emailGroup">
                  <input type="email" id="signup-email" class="input-modal" name="email" placeholder="Email" required aria-required="true"/>
                </div>
                <div class="form-group" id="twitterGroup">
                  <label for='signup-twitter' id="usernameValue" style="padding-top: 10px; color: #555; position: absolute; top: 170px; left: 20px; display: none;">@</label>
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
                  <input type="password" id="signup-password" class="input-modal" name="pass" placeholder="Password" required aria-required="true"/>                  
                </div>
                <div class="form-group">
                  <input type="password" id="signup-re_password" class="input-modal" name="re_pass" placeholder="Retype Password" required aria-required="true" oninput="check(this)"/>
                  
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
                Already a member? <a href="#" class="signup">Login now!</a><br />
                <a href="#">Forgotten password?</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {		
        $('a#btn-login').click(function(){
           $('div#modal-login').fadeToggle("linear");
        });
        $('a#btn-signup').click(function(){
           $('div#modal-signup').fadeToggle("linear");
        });
        $('.close').click(function(){
           $('div#modal-login,div#modal-signup').fadeOut(); 
        });
    });

</script><?php }} ?>
