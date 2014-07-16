<?php /* Smarty version Smarty-3.1.15, created on 2014-05-17 10:50:47
         compiled from "app/view/zip.html" */ ?>
<?php /*%%SmartyHeaderCode:14971568285368efb8187ec4-32197363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49708d5a0600da44b74142396dfca3995079c252' => 
    array (
      0 => 'app/view/zip.html',
      1 => 1400246582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14971568285368efb8187ec4-32197363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5368efb81a2114_01228925',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368efb81a2114_01228925')) {function content_5368efb81a2114_01228925($_smarty_tpl) {?><div class="content">

    <div class="sidebar-2-left">
        <ul class="step">
            <li>Batch Upload</li>
            <li><p>Step 1 - Upload Excel</p></li>
            <li class="selected"><p>Step 2 - Extract Zip</p></li>
        </ul>
    </div>
    
    <div class="sidebar-2-right">
        <h2 class="title">Extract ZIP</h2>
        <div class="message"></div>
        <div class="errorbox"></div>
        <form onsubmit="zipExtract();return false;" id="extract_zip" method="POST" action=""> <!-- zipExtract();return false; / http://localhost/florakb/zip/extract-->
            <table class="form-tbl">
                <!--
                <tr>
                    <td><label for="username">Short Name</label></td>
                    <td><input class="inputbox" name="username" id="username" /></td>
                </tr>
                
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input class="inputbox" name="email" id="email" value="<?php echo $_SESSION['login']['email'];?>
" /></td>
                </tr>
                -->
                
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
    </div>
    <div class="clear"></div>
</div><?php }} ?>
