<?php /* Smarty version Smarty-3.1.15, created on 2014-05-05 10:14:46
         compiled from "app/view/onebyone.html" */ ?>
<?php /*%%SmartyHeaderCode:14508671145366f416df9a22-45566465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbecc9d6e780fae70ae4712b7ae4778a1a918dbe' => 
    array (
      0 => 'app/view/onebyone.html',
      1 => 1397704333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14508671145366f416df9a22-45566465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5366f416e15125_26652232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366f416e15125_26652232')) {function content_5366f416e15125_26652232($_smarty_tpl) {?><div class="content">
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/location">Insert Location</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/person">Insert Person</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
onebyone/taxon">Insert Taxon</a></li>
    </ul>
</div><?php }} ?>
