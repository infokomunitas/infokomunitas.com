<?php /* Smarty version Smarty-3.1.15, created on 2014-06-02 11:02:26
         compiled from "app/view/formContentIndiv.html" */ ?>
<?php /*%%SmartyHeaderCode:14441539165375e5b4c32458-88705703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0a7b95b0968b8e79e7f4bf245266c2584bc9b6' => 
    array (
      0 => 'app/view/formContentIndiv.html',
      1 => 1400948417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14441539165375e5b4c32458-88705703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5375e5b4cb04d7_30199160',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375e5b4cb04d7_30199160')) {function content_5375e5b4cb04d7_30199160($_smarty_tpl) {?><div class="content">
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<div class="msg"></div>
    <div class="sidebar-2-left">
        <ul class="step">
            <li>Insert One By One</li>
            <li class="selected"><p>1. Insert Individual plant</p></li>
            <li><p>2. Insert Identification</p></li>
            <li><p>3. Insert Observation</p></li>
            <li><p>4. Insert Image</p></li>
        </ul>
    </div>
    
    <div class="sidebar-2-right">
        <h2 class="title">Insert Individual plant</h2>
        <?php echo $_smarty_tpl->getSubTemplate ('formIndiv.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="clear"></div>
</div>

<!--START MODAL-->
<div id="modal-location" class="modal-background">
    <div class="modal-overlay"></div>
    <div class="modal-dialog dialogStep">
        <button type="button" class="closebtn close"></button>
        <div class="modal-content">
            <div class="modal-body bodyStep">
              <h2 class="title">Insert Location</h2>
                <?php echo $_smarty_tpl->getSubTemplate ('formLocation.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $('a#locationPopup').click(function(){
       $('div#modal-location').fadeToggle("linear");
       $('div.modal-overlay').show();
    });
    $('.close,.modal-overlay').click(function(){
       $('div#modal-location').fadeOut(); 
    });

</script>
<?php }} ?>
