<?php /* Smarty version Smarty-3.1.15, created on 2014-06-18 15:31:47
         compiled from "app/view/formIndiv.html" */ ?>
<?php /*%%SmartyHeaderCode:19603580015375e5b4cba743-83255551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d78c2f895a8caab68af865a792abdef52c0788' => 
    array (
      0 => 'app/view/formIndiv.html',
      1 => 1402900574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19603580015375e5b4cba743-83255551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5375e5b4d5eec8_20155971',
  'variables' => 
  array (
    'basedomain' => 0,
    'locn' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375e5b4d5eec8_20155971')) {function content_5375e5b4d5eec8_20155971($_smarty_tpl) {?><form id="formIndiv" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/insertIndiv">
    <table class="form-tbl">
        <tr>
            <td><label for="">Plot/Set</label></td>
            <td><input class="inputbox" type="text" id="plot" name="plot" /></td>
        </tr>
        <tr>
            <td><label for="">Tag/Serial number</label></td>
            <td><input class="inputbox" type="text" id="tag" name="tag" /></td>
        </tr>
        <tr>
            <td><label for="">Location</label></td>
            <td>
                <select class="inputbox" name="locnID" id="locnID">
                    <option value="">Choose Location</option>
                    <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['location']->value['locality']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['location']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['location']->value['locality'];?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            </td>
            <td><a href="#testOnebyone-modal" class="btn" id="locationPopup">New Location</a></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn" type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>
<script type="text/javascript">
$().ready(function() {
    
    $("#formIndiv").validate({
        rules: {
            tag: {
                number: true
            },
            locnID: {
                required: true
            }
		},
		messages: {
            tag: {
                number: " Please enter number"
            },
            locnID: {
                required: " Please choose location"
            }
		},
    });
});
</script>
<?php }} ?>
