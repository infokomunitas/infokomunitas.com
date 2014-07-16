<?php /* Smarty version Smarty-3.1.15, created on 2014-06-02 11:02:27
         compiled from "app/view/formLocation.html" */ ?>
<?php /*%%SmartyHeaderCode:15445825805368efadda1010-15614519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7e3ace412f1dd3c784d08cd134b74310834179' => 
    array (
      0 => 'app/view/formLocation.html',
      1 => 1401069439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15445825805368efadda1010-15614519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5368efadddb506_60688544',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368efadddb506_60688544')) {function content_5368efadddb506_60688544($_smarty_tpl) {?><form id="formLocation" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/insertLocation">
    <table class="form-tbl">
        <tr>
            <td><label for="longitude">Longitude</label></td>
            <td><input class="inputbox" type="text" id="longitude" name="longitude" /></td>
        </tr>
        <tr>
            <td><label for="latitude">Latitude</label></td>
            <td><input class="inputbox" type="text" id="latitude" name="latitude" /></td>
        </tr>
        <tr>
            <td><label for="elev">Elevation ASL (m)</label></td>
            <td><input class="inputbox" type="text" id="elev" name="elev" /></td>
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
            <td><input class="inputbox" type="text" id="province" name="province" value="Kalimantan Barat" /></td>
        </tr>
        <tr>
            <td><label for="island">Island</label></td>
            <td><input class="inputbox" type="text" id="island" name="island" value="Borneo" /></td>
        </tr>
        <tr>
            <td><label for="country">Country</label></td>
            <td><input class="inputbox" type="text" id="country" name="country" value="Indonesia" /></td>
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
    
    $("#formLocation").validate({
        submitHandler: function(form){
            do_ajax(form,"formLocation","#modal-location", "Location");
        },
        rules: {
            longitude: {
                required: true,
                number: true
            },
            latitude: {
                required: true,
                number: true
            },
			locality: {
                required: true
			},
            elev: {
                required: true,
                number: true
            },
            province: {
                required: true
            },
            island: {
                required: true
            },
            country: {
                required: true
            }
		},
		messages: {
            longitude: {
                required: " Please enter longitude"
            },
            latitude: {
                required: " Please enter latitude"
            },
			locality: {
                required: " Please enter locality"
			},
            elev: {
                required: " Please enter elevation"
            },
            province: {
                required: " Please enter province"
            },
            island: {
                required: " Please enter island"
            },
            country: {
                required: " Please enter country"
            }
		}
    });
});
</script><?php }} ?>
