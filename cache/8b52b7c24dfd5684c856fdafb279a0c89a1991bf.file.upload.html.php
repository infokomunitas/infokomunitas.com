<?php /* Smarty version Smarty-3.1.15, created on 2014-04-19 08:52:13
         compiled from "app\view\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:25165533be5f5af7a32-56938775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b52b7c24dfd5684c856fdafb279a0c89a1991bf' => 
    array (
      0 => 'app\\view\\upload.html',
      1 => 1397704333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25165533be5f5af7a32-56938775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533be5f5cdaea5_71224964',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533be5f5cdaea5_71224964')) {function content_533be5f5cdaea5_71224964($_smarty_tpl) {?><!--<div>
    <div class="errorbox"></div>
	Upload Zip :
    <form onsubmit="return validateFormUpload();" id="upload_file" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
upload/zip" enctype="multipart/form-data">
        <label for="username">Username :</label>
        <input name="username" id="username" />
        <label for="zip_file">Zip File :</label>
        <input name="imagezip" id="zip_file" type="file" />
        <input id="box_button" type="submit" value="Submit" />
    </form>
    <div id="progressbox">
        <div id="progressbar">
            <div id="statustxt">
                <p></p>
            </div>
            <div id="report"></div>
        </div>
    </div>
</div> -->
<style>

.progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
.bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
<div class="content">
    <div>
    	<h2 class="title">Upload Excel :</h2>
        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
upload/parseExcel" enctype="multipart/form-data" id="uploadExcel">
            <label for="zip_file"></label>
            <input name="tes" id="zip_file" type="file" />
            <input class="btn" type="submit" value="Submit" />
        </form>
        
    	<div class="progress" style="margin-top: 15px;">
            <div class="bar"></div >
            <div class="percent">0%</div >
        </div>
        
        <div id="status"></div>
    </div>
</div>
<script>

	(function() {
		
	var bar = $('.bar');
	var percent = $('.percent');
	var status = $('#status');
	
	$('#uploadExcel').ajaxForm({
		beforeSend: function() {
			status.empty();
			var percentVal = '0%';
			bar.width(percentVal)
			percent.html(percentVal);
		},
		uploadProgress: function(event, position, total, percentComplete) {
			var percentVal = percentComplete + '%';
			var zip_file = $('#zip_file').val();
			if (zip_file){
				bar.width(percentVal)
				percent.html(percentVal);
			}
			
		},
		success: function() {
			var percentVal = '100%';
			var zip_file = $('#zip_file').val();
			
			if (zip_file){
				bar.width(percentVal)
				percent.html(percentVal);
			}
		},
		complete: function(xhr) {
			status.html(xhr.responseText);
		}
	}); 

	})();       

</script><?php }} ?>
