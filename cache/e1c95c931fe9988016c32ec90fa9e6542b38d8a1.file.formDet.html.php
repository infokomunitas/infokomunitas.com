<?php /* Smarty version Smarty-3.1.15, created on 2014-06-18 15:32:13
         compiled from "app/view/formDet.html" */ ?>
<?php /*%%SmartyHeaderCode:190776535153a1407d32c7a3-66200220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c95c931fe9988016c32ec90fa9e6542b38d8a1' => 
    array (
      0 => 'app/view/formDet.html',
      1 => 1403076642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190776535153a1407d32c7a3-66200220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'confid_enum' => 0,
    'enum' => 0,
    'taxon' => 0,
    'itemTaxon' => 0,
    'person' => 0,
    'itemPerson' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53a1407d3765e8_89256122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a1407d3765e8_89256122')) {function content_53a1407d3765e8_89256122($_smarty_tpl) {?><form id="formDet" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/insertDet">
    <table class="form-tbl">
        <tr>
            <td colspan="2"><label for="">Confidence of determination</label></td>
            <td>
                <select class="inputbox" name="confid" id="confid">
                    <option value="" selected="1">Choose a level of confidence</option>
                    <?php  $_smarty_tpl->tpl_vars['enum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confid_enum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enum']->key => $_smarty_tpl->tpl_vars['enum']->value) {
$_smarty_tpl->tpl_vars['enum']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['enum']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['enum']->value;?>
</option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><label for="">Using what resource?</label></td>
            <td><input class="inputbox" type="text" id="using" name="using" /></td>
        </tr>
        <tr>
            <td colspan="2"><label for="notes">Notes</label></td>
            <td><textarea class="textareabox" id="notes" name="notes"></textarea></td>
        </tr>
        <tbody id="inputTaxon" style="display: none;">
            <tr>
                <td colspan="2"><label for="">Taxon :</label></td>
                <td>
                    <input type="hidden" id="taxonID" name="taxonID" value=""/>
                    <input class="inputbox" type="text" id="labelTaxon"  disabled="disabled" />
                    <a class="btn" id="resetTaxon">Reset</a>
                </td>
            </tr>
        </tbody>
        <tbody id="autoCompleteTaxon"> <!-- INPUT AUTO COMPLETE TAXON -->
            <tr id="inputFamily">
                <td><label for="">Taxon :</label></td>
                <td><label for="">Family</label></td>
                <td>
                    <input class="inputbox" type="hidden" id="kewid" name="kewid" value=""/>
                    <!--<input class="inputbox" type="text" id="autoTaxon" />
                    <input class="inputbox" type="hidden" id="taxonID" name="taxonID" value=""/>
                    <select class="inputbox" name="taxonID" id="taxonID">
                        <option value="" selected="1">Choose a taxonomy</option>
                        <?php  $_smarty_tpl->tpl_vars['itemTaxon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemTaxon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxon']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemTaxon']->key => $_smarty_tpl->tpl_vars['itemTaxon']->value) {
$_smarty_tpl->tpl_vars['itemTaxon']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['itemTaxon']->value['id'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['itemTaxon']->value['gen']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['itemTaxon']->value['fam']) {?>
                                    (<?php echo $_smarty_tpl->tpl_vars['itemTaxon']->value['fam'];?>
)
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['itemTaxon']->value['gen'];?>
 <?php echo $_smarty_tpl->tpl_vars['itemTaxon']->value['sp'];?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['itemTaxon']->value['morphotype'];?>

                            <?php }?>
                            </option>
                        <?php } ?>
    
                    </select>-->
                    
                    <input class="inputbox" type="text" id="autoFamily" name="family" />
                    <a class="btn" id="nextGenus">Next</a>
                </td>
                <td><a href="#taxon-modal" class="btn" id="taxonPopup">New Taxon</a></td>
            </tr>
            <tr id="inputGenus" style="display: none;">
                <td></td>
                <td><label for="">Genus</label></td>
                <td>
                    <input class="inputbox" type="text" id="autoGenus" name="genus" />
                    <a class="btn" id="nextSpecies">Next</a>
                </td>
            </tr>
            <tr id="inputSpecies" style="display: none;">
                <td></td>
                <td><label for="">Species</label></td>
                <td>
                    <input class="inputbox" type="text" id="autoSpecies" name="species" />
                </td>
            </tr>
        </tbody> <!-- END INPUT AUTO COMPLETE TAXON -->
        <tr>
            <td colspan="2"><label for="">Person</label></td>
            <td>
                <select class="inputbox" name="personID" id="personID">
                    <option value="">Choose a person</option>
                    <?php  $_smarty_tpl->tpl_vars['itemPerson'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemPerson']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['person']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemPerson']->key => $_smarty_tpl->tpl_vars['itemPerson']->value) {
$_smarty_tpl->tpl_vars['itemPerson']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['itemPerson']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemPerson']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['itemPerson']->value['email'];?>
</option>
                    <?php } ?>
                </select>
            </td>
            <td><a href="#person-modal" class="btn" id="personPopup">New Person</a></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td><input class="btn" type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>
<script type="text/javascript">
$().ready(function() {
    
    $("#formDet").validate({
        rules: {
			confid: {
                required: true
			},
            using: {
                required: true
            },
            /*taxonID: {
                required: true
            },*/
            personID: {
                required: true
            }
		},
		messages: {
			confid: {
                required: " Please choose a level"
			},
            using: {
                required: " Please enter a resource"
            },
            /*taxonID: {
                required: " Please choose a taxonomy"
            },*/
            personID: {
                required: " Please choose a person"
            }
		}
    });
    /*$("#autoTaxon").rules("add", {
        required:true,
        messages: {
            required : " Please choose a taxonomy"
        }
    });*/
});
</script>
<?php }} ?>
