<?php /* Smarty version Smarty-3.1.15, created on 2014-04-22 12:02:43
         compiled from "app\view\formPerson.html" */ ?>
<?php /*%%SmartyHeaderCode:1174153563e43e93304-53194198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d4e8d98b31cd09b6931967c218091f3611ac374' => 
    array (
      0 => 'app\\view\\formPerson.html',
      1 => 1398158409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174153563e43e93304-53194198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53563e4402c1d3_31817784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53563e4402c1d3_31817784')) {function content_53563e4402c1d3_31817784($_smarty_tpl) {?><div class="content">
    <h2 class="title">Insert Person</h2>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
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
            <tr>
                <td><label for="short_namecode">Short Namecode</label></td>
                <td><input class="inputbox" type="text" id="short_namecode" name="short_namecode" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</div><?php }} ?>
