<?php /* Smarty version Smarty-3.1.15, created on 2014-04-19 08:40:41
         compiled from "app\view\formLocation.html" */ ?>
<?php /*%%SmartyHeaderCode:214853521a69796da3-69220211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9462c3c7a895fdb5344b457d8ecf186290045d9' => 
    array (
      0 => 'app\\view\\formLocation.html',
      1 => 1397704333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214853521a69796da3-69220211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53521a698e6c66_95586121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53521a698e6c66_95586121')) {function content_53521a698e6c66_95586121($_smarty_tpl) {?><div class="content">
    <h2 class="title">Insert Location</h2>
    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/insertLocation">
        <table class="form-tbl">
            <tr>
                <td><label for="short_namecode">Short Namecode</label></td>
                <td><input class="inputbox" type="text" id="short_namecode" name="short_namecode" /></td>
            </tr>
            <tr>
                <td><label for="longitude">Longitude</label></td>
                <td><input class="inputbox" type="text" id="longitude" name="longitude" /></td>
            </tr>
            <tr>
                <td><label for="latitude">Latitude</label></td>
                <td><input class="inputbox" type="text" id="latitude" name="latitude" /></td>
            </tr>
            <tr>
                <td><label for="elevation">Elevation ASL (m)</label></td>
                <td><input class="inputbox" type="text" id="elevation" name="elev" /></td>
            </tr>
            <tr>
                <td><label for="geomorph">Geomorph</label></td>
                <td><input class="inputbox" type="text" id="geomorph" name="geomorph" /></td>
            </tr>
            <tr>
                <td><label for="locality">Locality<br /><i>(Descriptive name of place)</i></label></td>
                <td><input class="inputbox" type="text" id="locality" name="locality" /></td>
            </tr>
            <tr>
                <td><label for="county">County</label></td>
                <td><input class="inputbox" type="text" id="county" name="county" /></td>
            </tr>
            <tr>
                <td><label for="province">Province</label></td>
                <td><input class="inputbox" type="text" id="province" name="province" /></td>
            </tr>
            <tr>
                <td><label for="island">Island</label></td>
                <td><input class="inputbox" type="text" id="island" name="island" /></td>
            </tr>
            <tr>
                <td><label for="country">Country</label></td>
                <td><input class="inputbox" type="text" id="country" name="country" /></td>
            </tr>
            <tr>
                <td><label for="notes">Notes</label></td>
                <td><textarea class="textareabox" id="notes" name="notes"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</div><?php }} ?>
