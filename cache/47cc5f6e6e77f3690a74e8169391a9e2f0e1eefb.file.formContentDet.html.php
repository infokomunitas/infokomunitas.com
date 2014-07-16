<?php /* Smarty version Smarty-3.1.15, created on 2014-06-18 15:32:13
         compiled from "app/view/formContentDet.html" */ ?>
<?php /*%%SmartyHeaderCode:208102354753a1407d280680-43999622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cc5f6e6e77f3690a74e8169391a9e2f0e1eefb' => 
    array (
      0 => 'app/view/formContentDet.html',
      1 => 1400948417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208102354753a1407d280680-43999622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53a1407d324ad8_52846826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a1407d324ad8_52846826')) {function content_53a1407d324ad8_52846826($_smarty_tpl) {?><div class="content">
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

    <div class="msg"></div>
    <div class="sidebar-2-left">
        <ul class="step">
            <li>Insert One By One</li>
            <li><p>1. Insert Individual plant</p></li>
            <li class="selected"><p>2. Insert Identification</p></li>
            <li><p>3. Insert Observation</p></li>
            <li><p>4. Insert Image</p></li>
        </ul>
    </div>
    
    <div class="sidebar-2-right">
        <h2 class="title">Insert Identification</h2>
        <?php echo $_smarty_tpl->getSubTemplate ('formDet.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="clear"></div>
</div>

<!--START MODAL PERSON-->
<div id="modal-person" class="modal-background">
    <div class="modal-overlay"></div>
    <div class="modal-dialog dialogStep">
        <button type="button" class="closebtn close"></button>
        <div class="modal-content">
            <div class="modal-body bodyStep">
              <h2 class="title">Insert Person</h2>
                <?php echo $_smarty_tpl->getSubTemplate ('formPerson.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
</div>

<!--START MODAL TAXON-->
<div id="modal-taxon" class="modal-background">
    <div class="modal-overlay"></div>
    <div class="modal-dialog dialogStep">
        <button type="button" class="closebtn close"></button>
        <div class="modal-content">
            <div class="modal-body bodyStep">
              <h2 class="title">Insert Taxon</h2>
                <?php echo $_smarty_tpl->getSubTemplate ('formTaxon.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $('a#personPopup').click(function(){
       $('div#modal-person').fadeToggle("linear");
       $('div.modal-overlay').show();
    });
    $('.close,.modal-overlay').click(function(){
       $('div#modal-person').fadeOut(); 
    });
    
    $('a#taxonPopup').click(function(){
       $('div#modal-taxon').fadeToggle("linear");
       $('div.modal-overlay').show();
    });
    $('.close,.modal-overlay').click(function(){
       $('div#modal-taxon').fadeOut(); 
    });

</script>
<?php }} ?>
