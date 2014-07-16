<?php /* Smarty version Smarty-3.1.15, created on 2014-06-04 15:49:19
         compiled from "app/view/browseIndiv.html" */ ?>
<?php /*%%SmartyHeaderCode:185827025376d35aef29c4-84769456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e4e52db2acfa4dbdf9f4f6a3312f0f46781eec9' => 
    array (
      0 => 'app/view/browseIndiv.html',
      1 => 1400952771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185827025376d35aef29c4-84769456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5376d35b0fc4f9_48123406',
  'variables' => 
  array (
    'title' => 0,
    'dataTitle' => 0,
    'noData' => 0,
    'data' => 0,
    'dataIndiv' => 0,
    'img' => 0,
    'basedomain' => 0,
    'pageno' => 0,
    'prevpage' => 0,
    'lastpage' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5376d35b0fc4f9_48123406')) {function content_5376d35b0fc4f9_48123406($_smarty_tpl) {?><div class="content">
    <div class="btn-back">
        <a href="#" onClick="history.back();return false;"><span>Back</span></a>
    </div>
    <div class="clear"></div>
    <br />
    
    <?php  $_smarty_tpl->tpl_vars['dataTitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dataTitle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['title']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dataTitle']->key => $_smarty_tpl->tpl_vars['dataTitle']->value) {
$_smarty_tpl->tpl_vars['dataTitle']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['dataTitle']->value=='') {?>
            
        <?php } else { ?><h2 class="title"><?php echo $_smarty_tpl->tpl_vars['dataTitle']->value['sp'];?>
</h2>
        <?php }?>
    <?php } ?>
    
    <?php if ($_smarty_tpl->tpl_vars['noData']->value=='empty') {?>
        <i>No data available</i>
    <?php } else { ?>
<!--    
    <div id="search">  
        <form role="form">
            <div class="search-box">
              <input type="text" placeholder="Search" />
              <button class="btn btn-search" type="button">Search</button>
            </div>
        </form>
    </div>
    <div class="clear"></div> 
-->
    
    
    <table class="browse">
        <thead>
            <tr>
                <th style="width: 4%;">Indiv Code</th>
                <th>Location</th>
                <th>Creator</th>
                <th>Images</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php  $_smarty_tpl->tpl_vars['dataIndiv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dataIndiv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dataIndiv']->key => $_smarty_tpl->tpl_vars['dataIndiv']->value) {
$_smarty_tpl->tpl_vars['dataIndiv']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['dataIndiv']->value['indiv']['indivID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['dataIndiv']->value['indiv']['locality'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['dataIndiv']->value['indiv']['name'];?>
</td>
                <td>
                    <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataIndiv']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['img']->value['md5sum']) {?>
                     <a class="gallery<?php echo $_smarty_tpl->tpl_vars['dataIndiv']->value['indiv']['indivID'];?>
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
browse/indivDetail/?id=<?php echo $_smarty_tpl->tpl_vars['dataIndiv']->value['indiv']['indivID'];?>
" class="btn">Detail</a></td>
            </tr>
            <script type="text/javascript">
            var a = "<?php echo $_smarty_tpl->tpl_vars['dataIndiv']->value['indiv']['indivID'];?>
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
browse/indiv/?id=<?php echo $_GET['id'];?>
&&action=<?php echo $_GET['action'];?>
&&pageno=1' class="btn btn-pagination">FIRST</a>
            <?php $_smarty_tpl->tpl_vars['prevpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['pageno']->value-1, null, 0);?>
            <a href='<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/indiv/?id=<?php echo $_GET['id'];?>
&&action=<?php echo $_GET['action'];?>
&&pageno=<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
' class="btn btn-pagination">PREV</a>
        <?php }?>
        Page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['pageno']->value==$_smarty_tpl->tpl_vars['lastpage']->value) {?>
            <button class="btn btn-pagination">NEXT</button> <button class="btn btn-pagination">LAST</button>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['nextpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['pageno']->value+1, null, 0);?>
            <a href='<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/indiv/?id=<?php echo $_GET['id'];?>
&&action=<?php echo $_GET['action'];?>
&&pageno=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
' class="btn btn-pagination">NEXT</a>
            <a href='<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
browse/indiv/?id=<?php echo $_GET['id'];?>
&&action=<?php echo $_GET['action'];?>
&&pageno=<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>
' class="btn btn-pagination">LAST</a>
        <?php }?>
    <?php }?>
    </div>
    
</div>
<?php }} ?>
