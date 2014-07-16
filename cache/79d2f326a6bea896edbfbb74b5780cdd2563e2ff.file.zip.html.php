<?php /* Smarty version Smarty-3.1.15, created on 2014-04-22 11:20:37
         compiled from "app\view\zip.html" */ ?>
<?php /*%%SmartyHeaderCode:25803533be64f839e80-38726781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d2f326a6bea896edbfbb74b5780cdd2563e2ff' => 
    array (
      0 => 'app\\view\\zip.html',
      1 => 1397891950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25803533be64f839e80-38726781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533be64f8f0ca9_18172642',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533be64f8f0ca9_18172642')) {function content_533be64f8f0ca9_18172642($_smarty_tpl) {?><div class="content">
    <h2 class="title">Upload ZIP</h2>
    <div class="message"></div>
    <div class="errorbox"></div>
    <form onsubmit="zipExtract();return false;" id="extract_zip" method="POST" action=""> <!-- zipExtract();return false; -->
        <table class="form-tbl">
            <tr>
                <td><label for="username">Username</label></td>
                <td><input class="inputbox" name="username" id="username" /></td>
            </tr>
            <tr>
                <td>
                    <label for="zip_file">Filename<br /><i>(with zip extention ex. User-date.zip)</i></label>
                </td>
                <td><input class="inputbox" name="imagezip" id="zip_file" type="text" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" id="box_button" type="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</div><?php }} ?>
