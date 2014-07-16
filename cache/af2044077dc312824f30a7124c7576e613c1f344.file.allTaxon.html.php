<?php /* Smarty version Smarty-3.1.15, created on 2014-06-28 15:47:55
         compiled from "app/view/browse/allTaxon.html" */ ?>
<?php /*%%SmartyHeaderCode:122403563053ae732be1edb8-40584916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2044077dc312824f30a7124c7576e613c1f344' => 
    array (
      0 => 'app/view/browse/allTaxon.html',
      1 => 1403506184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122403563053ae732be1edb8-40584916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noData' => 0,
    'basedomain' => 0,
    'data' => 0,
    'dataTaxon' => 0,
    'img' => 0,
    'pageno' => 0,
    'prevpage' => 0,
    'lastpage' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53ae732c209661_59998679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ae732c209661_59998679')) {function content_53ae732c209661_59998679($_smarty_tpl) {?><div class="content">    
    <h2 class="title">Browse Data Taxon</h2>
    
    <?php if ($_smarty_tpl->tpl_vars['noData']->value=='empty') {?>
        <div class="btn-back">
            <a href="#" onClick="history.back();return false;"><span>Back</span></a>
        </div>
        <div class="clear"></div>
        <br />
        <i>No data available</i>
    <?php } else { ?>
    <div id="search">  
        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/searchTaxon/" method="GET">
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
                <th>Morphotype</th>
                <th>Family</th>
                <th>Genus</th>
                <th>Species</th>
                <th>Images</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['morphotype'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['fam'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['gen'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['sp'];?>
</td>
                <td>
                    <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataTaxon']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                     <?php if ($_smarty_tpl->tpl_vars['img']->value['md5sum']) {?>
                     <a class="gallery<?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/img/500px/<?php echo $_smarty_tpl->tpl_vars['img']->value['md5sum'];?>
.500px.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/img/100px/<?php echo $_smarty_tpl->tpl_vars['img']->value['md5sum'];?>
.100px.jpg" /></a>
                     
                     <?php }?>
                     <?php }
if (!$_smarty_tpl->tpl_vars['img']->_loop) {
?><i>No image available</i>
                    <?php } ?>
                </td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/indiv/?id=<?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['id'];?>
&&action=indivTaxon" class="btn">Detail</a></td>
            </tr>
            <script type="text/javascript">
            var a = "<?php echo $_smarty_tpl->tpl_vars['dataTaxon']->value['taxon']['id'];?>
";
            
                $('a.gallery'+a).colorbox({ opacity:0.5 , rel:'group'+a });
            
            </script>
            <?php } ?>
        </tbody>
    </table>
    <?php }?>
    
    <br />
    
    <?php if ($_smarty_tpl->tpl_vars['noData']->value=='empty') {?>
    <?php } else { ?>
    
    <div align="center">
        <?php if ($_smarty_tpl->tpl_vars['pageno']->value=='1') {?>
            <button class="btn btn-pagination">FIRST</button> <button class="btn">PREV</button>
        <?php } else { ?>
            <a href='<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataTaxon/?pageno=1' class="btn btn-pagination">FIRST</a>
            <?php $_smarty_tpl->tpl_vars['prevpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['pageno']->value-1, null, 0);?>
            <a href='<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataTaxon/?pageno=<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
' class="btn btn-pagination">PREV</a>
        <?php }?>
        Page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['pageno']->value==$_smarty_tpl->tpl_vars['lastpage']->value) {?>
            <button class="btn btn-pagination">NEXT</button> <button class="btn btn-pagination">LAST</button>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['nextpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['pageno']->value+1, null, 0);?>
            <a href='<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataTaxon/?pageno=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
' class="btn btn-pagination">NEXT</a>
            <a href='<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/dataTaxon/?pageno=<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>
' class="btn btn-pagination">LAST</a>
        <?php }?>
    <?php }?>
    </div>
</div>
<?php }} ?>
