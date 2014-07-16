<?php /* Smarty version Smarty-3.1.15, created on 2014-06-18 15:32:13
         compiled from "app/view/formTaxon.html" */ ?>
<?php /*%%SmartyHeaderCode:17515241625368efb30b9352-01969861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ebb42146160953d527d84abb3d66ae211938cf7' => 
    array (
      0 => 'app/view/formTaxon.html',
      1 => 1401069439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17515241625368efb30b9352-01969861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5368efb30e9f26_92497201',
  'variables' => 
  array (
    'basedomain' => 0,
    'subtype_enum' => 0,
    'enum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368efb30e9f26_92497201')) {function content_5368efb30e9f26_92497201($_smarty_tpl) {?><form id="formTaxon" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/insertTaxon">
    <table class="form-tbl">
        <tr>
            <td><label for="morphotype">Morphotype</label></td>
            <td><input class="inputbox" type="text" id="morphotype" name="morphotype" /></td>
        </tr>
        <tr>
            <td><label for="fam">Family</label></td>
            <td><input class="inputbox" type="text" id="fam" name="fam" /></td>
        </tr>
        <tr>
            <td><label for="gen">Genus</label></td>
            <td><input class="inputbox" type="text" id="gen" name="gen" /></td>
        </tr>
        <tr>
            <td><label for="sp">Species</label></td>
            <td><input class="inputbox" type="text" id="sp" name="sp" /></td>
        </tr>
        <tr>
            <td><label for="subtype">Subtype</label></td>
            <td>
                <select class="inputbox" name="subtype" id="subtype">
                    <option value="" selected="1">Choose a subtype</option>
                    <?php  $_smarty_tpl->tpl_vars['enum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subtype_enum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enum']->key => $_smarty_tpl->tpl_vars['enum']->value) {
$_smarty_tpl->tpl_vars['enum']->_loop = true;
?>confid
                        <option value="<?php echo $_smarty_tpl->tpl_vars['enum']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['enum']->value;?>
</option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="ssp">Sub Species</label></td>
            <td><input class="inputbox" type="text" id="ssp" name="ssp" /></td>
        </tr>
        <tr>
            <td><label for="auth">Author</label></td>
            <td><input class="inputbox" type="text" id="auth" name="auth" /></td>
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

<script language='javascript' type='text/javascript'>
$().ready(function() {
    
    $("#formTaxon").validate({
        submitHandler: function(form){
            do_ajax(form,"formTaxon","#modal-taxon", "Taxon");
        },
        rules: {
            gen: {
                required: function(element) {
                    return (!$("#morphotype").hasClass('valid'));
                }
            },
            sp: {
                required: function(element) {
                    return (!$("#morphotype").hasClass('valid'));
                }
            }
		},
		messages: {
            gen: {                            
                required: " Please enter genus and species or enter a morphotype"
            },
            sp: {
                required: " Please enter genus and species or enter a morphotype"
            }
		}
    });
});
</script><?php }} ?>
