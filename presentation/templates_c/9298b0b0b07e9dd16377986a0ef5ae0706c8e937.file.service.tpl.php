<?php /* Smarty version Smarty-3.1.15, created on 2016-03-21 10:59:07
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1451856ef8dab4d46e4-50150359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9298b0b0b07e9dd16377986a0ef5ae0706c8e937' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\service.tpl',
      1 => 1456982702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451856ef8dab4d46e4-50150359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'data' => 0,
    'i' => 0,
    'pagination' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56ef8dab6ad1d9_57692611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ef8dab6ad1d9_57692611')) {function content_56ef8dab6ad1d9_57692611($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("adminheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("adminleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
        
            <h2>Service</h2>
            <a class="btn button" href="index.php?admin/service&action=add">Add New</a>
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>ID</th>
                    <th>Service Name</th>

                </tr>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <tr>
                        <td><a href="index.php?admin/service&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=edit">Edit</a> <a href="index.php?admin/service&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=delete">Delete</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['service'];?>
</td>

                    </tr>
                <?php } ?>
            </table>

            <div class="pagination col-md-6">
                Page: 
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pagination']->value['pages']+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagination']->value['pages'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']==$_smarty_tpl->tpl_vars['foo']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 
                    <?php } else { ?>

                        <a href="index.php?admin/service&page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a> 

                    <?php }?>
                <?php }} ?>
            </div>
        </div>
    </div>






<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
