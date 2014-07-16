<?php /* Smarty version Smarty-3.1.15, created on 2014-05-22 09:42:58
         compiled from "app/view/browseSearchResult.html" */ ?>
<?php /*%%SmartyHeaderCode:1094011351537d5622067598-55736063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e18208ff9a03065696c4e04fcf1a8a0dbc29309' => 
    array (
      0 => 'app/view/browseSearchResult.html',
      1 => 1400681906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1094011351537d5622067598-55736063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noData' => 0,
    'basedomain' => 0,
    'data' => 0,
    'dataTaxon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537d56224fa8e8_95243396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d56224fa8e8_95243396')) {function content_537d56224fa8e8_95243396($_smarty_tpl) {?><div class="content">
    <div class="btn-back">
        <a href="#" onClick="history.back();return false;"><span>Back</span></a>
    </div>
    <div class="clear"></div>
    <br />
    
    <h2 class="title">Search Data</h2>
    
    <?php if ($_smarty_tpl->tpl_vars['noData']->value=='empty') {?>
        <i>No result found</i>
    <?php } else { ?>
    <i><?php echo $_smarty_tpl->tpl_vars['noData']->value;?>
 data found</i>
    <div id="search">  
        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/search/" method="GET">
            <div class="search-box">
              <input type="text" placeholder="Search" name="search" />
              <input class="btn-search" type="submit" value="Search" />
              
            </div>
        </form>
    </div>
    <div class="clear"></div> 
    
    <table class="browse">
        <thead>
            <tr>
                <th>Species</th>
                <th>Genus</th>
                <th>Family</th>
                <th style="width: 4%;">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php  $_smarty_tpl->tpl_vars['dataTaxon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dataTaxon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dataTaxon']->key => $_smarty_tpl->tpl_vars['dataTaxon']->value) {
$_smarty_tpl->tpl_vars['dataTaxon']->_loop = true;
?>
            <tr>
                <td><i><?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['sp'];?>
</i></td>
                <td><?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['gen'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['fam'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/indiv/?id=<?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['id'];?>
" class="btn">Detail</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }?>
</div>
<?php }} ?>
