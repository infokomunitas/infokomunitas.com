<?php /* Smarty version Smarty-3.1.15, created on 2014-05-06 22:20:36
         compiled from "app/view/formImage.html" */ ?>
<?php /*%%SmartyHeaderCode:10134747985368efb4777c09-68882783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88cd2c45c179fd933408ee66072421a3a0102ccc' => 
    array (
      0 => 'app/view/formImage.html',
      1 => 1399384137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10134747985368efb4777c09-68882783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5368efb47a9133_69257744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368efb47a9133_69257744')) {function content_5368efb47a9133_69257744($_smarty_tpl) {?><script language='javascript' type='text/javascript'>
$().ready(function() {
    
    $("#formImage").validate({
        rules: {
			email: {
                required: true,
                email: true,
                checkEmailNotExist: true
			},
			filename: {
				required: true
			}
		},
		messages: {
			email: {
                required: " Please enter a valid email address"
			},
			filename: {
                required: " Please choose an image file"
			}
		}
    });
});
</script>
<div class="content">
    <div class="sidebar-2-left">
        <ul>
            <li>Insert One By One</li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/location">Insert Location</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/person">Insert Person</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/taxon">Insert Taxon</a></li>
            <li class="selected"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/image">Insert Image</a></li>
        </ul>
    </div>

    <div class="sidebar-2-right">
        <h2 class="title">Insert Image</h2>
        <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        <form id="formImage" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/insertImage" enctype="multipart/form-data">
            <table class="form-tbl">
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input class="inputbox" type="text" id="email" name="email" /></td>
                </tr>
                <tr>
                    <td><label for="filename">File Image</label></td>
                    <td><input class="inputbox" type="file" id="filename" name="filename" /></td>
                </tr>
                <tr>
                    <td><label for="plantpart">Plantpart</label></td>
                    <td><input class="inputbox" type="text" id="plantpart" name="plantpart" /></td>
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
    </div>
    <div class="clear"></div>
</div><?php }} ?>
