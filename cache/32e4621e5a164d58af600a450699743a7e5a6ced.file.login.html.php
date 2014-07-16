<?php /* Smarty version Smarty-3.1.15, created on 2014-07-16 15:11:23
         compiled from "app/view/login.html" */ ?>
<?php /*%%SmartyHeaderCode:177220651453c0a2eeb00606-58840528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e4621e5a164d58af600a450699743a7e5a6ced' => 
    array (
      0 => 'app/view/login.html',
      1 => 1405494674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177220651453c0a2eeb00606-58840528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53c0a2eed007e3_92899285',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c0a2eed007e3_92899285')) {function content_53c0a2eed007e3_92899285($_smarty_tpl) {?> <div class="container">

    <!-- Forms  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1 id="forms"></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="well">
                    <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
register/signup">
                        <fieldset>
                            <legend>Register</legend>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="signUpEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Gender</label>
                                <div class="col-lg-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            
        </div>

        

        <div class="clearfix" style="height:50px;"></div>

        <script type="text/javascript">
        
            jQuery(function ($) {
                $('[data-toggle="popover"]').popover();
                $('[data-toggle="tooltip"]').tooltip();
            });
        
        </script>

        <!-- sample templates end -->

    </div><?php }} ?>
