<?php /* Smarty version Smarty-3.1.15, created on 2014-06-02 11:02:25
         compiled from "app/view/upload.html" */ ?>
<?php /*%%SmartyHeaderCode:15801671015366f412218f53-57361957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b2e114782f1c70e31ae1f0e1eb31ec147adc09' => 
    array (
      0 => 'app/view/upload.html',
      1 => 1400950600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15801671015366f412218f53-57361957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5366f41226ddc0_12050555',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366f41226ddc0_12050555')) {function content_5366f41226ddc0_12050555($_smarty_tpl) {?><!--<div>
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

.progress { position:relative; width:400px; border: 0px solid #ddd; padding: 1px; border-radius: 3px; }
.bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
<div class="content">

    <div class="sidebar-2-left">
        <ul class="step">
            <li>Batch Upload</li>
            <li class="selected"><p>Step 1 - Upload Excel</p></li>
            <li><p>Step 2 - Extract Zip</p></li>
        </ul>
    </div>
    
    <div class="sidebar-2-right">
        <h2 class="title">Upload Excel :</h2>
        <div id="status"></div>
        <a style="float: right;" class="btn" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
template/spreadsheet.xls">Download Template</a>
        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
upload/parseExcel" enctype="multipart/form-data" id="uploadExcel">
            <table class="form-tbl">
                <tr>
                    <td>
                        <label for="zip_file">Browse Excel File : <br /></label>
                    </td>
                    <td><input name="excelfile" id="zip_file" type="file" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn" id="box_button" type="submit" value="Submit" /></td>
                </tr>
            </table>    

        </form>
        <div id="results"></div>
        <div class="progress" style="margin-top: 15px;">
            
        </div>
        
        

    </div>
    
    <div class="clear"></div>
</div>
<script>

    (function() {
       
    });
        var first_error = '<div class="messages erroren"><a href="#" class="closeMessage"></a><p>';
        var first_info = '<div class="messages info"><a href="#" class="closeMessage"></a><p>';
        var first_success = '<div class="messages success"><a href="#" class="closeMessage"></a><p>';
        var first_warning = '<div class="messages warning"><a href="#" class="closeMessage"></a><p>';
        var end = '</p></div>';
            
        var bar = $('.bar');
        var percent = $('.percent');
        var status = $('#status');
    
    
    /*
    
    $(document).ready(function(){
        
        $.post(basedomain+'upload/showUploadProcess', {param:true}, function(data){

            var lastSize = data.size;

            setInterval(function(){

                // if(lastSize){
                    $.getJSON(basedomain+'upload/showUploadProcess/?ajax=1&lastsize='+lastSize, function(data) {
                        lastSize = data.size;
                        $.each(data.data, function(key, value) {
                                $("#results").append('' + value + '<br/>');
                        });
                   
                    });

                // }
                

             },3000);
            
        },"JSON"); 


    })
     
    */

    /*
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
            status.html(first_info + xhr.responseText + end);
        }
    }); 
    
    */
    
    
    var uploadXlsFile = {
        dataType:  'json',  
        beforeSubmit: function(data) { 
             
        // $(".progress").html("Please wait ..."); 
        // status.html(first_info + 'Please Wait ...' + end);     
        $('#status').html(first_info + 'Please Wait ...' + end); 
        },
        success : function(data) {}, 
        complete: function(xhr) {
            
            $(".progress").html('');

            var resultExtract = JSON.parse(xhr.responseText);
            if(resultExtract.status){
                
                $('#status').html(first_success + resultExtract.msg + end);

                if (resultExtract.finish){
                    
                    setTimeout(function(){
                        window.location.href=basedomain+'zip';
                    },2000);
                }
                

            }else{

                $('#status').html(first_error + resultExtract.msg + end);
            }

            // $(".progress").html('');
            // status.html(first_info + xhr.responseText + end);
        }
    };                  

    $("#uploadExcel").ajaxForm(uploadXlsFile);
    

</script><?php }} ?>
