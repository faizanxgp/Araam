<?php /* Smarty version Smarty-3.1.15, created on 2016-03-22 11:09:56
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\contractor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467456e10b748e9578-91337723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8062133b432289352a3459cd66b5ae8a837c17ba' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\contractor.tpl',
      1 => 1458626989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467456e10b748e9578-91337723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10b74b17f71_35808704',
  'variables' => 
  array (
    'message' => 0,
    'data' => 0,
    'i' => 0,
    'pagination' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10b74b17f71_35808704')) {function content_56e10b74b17f71_35808704($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

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
        
            <h2>Contractors</h2>
            <a class="btn button" href="index.php?admin/contractor&action=add">Add New</a>
            <form method="post" action="index.php?admin/contractor&action=search" id="searchform"><input type="text" name="searchtext" value="" max="255" /> <input class="btn btn-search" type="submit" name="submitquery" value="Search" /></form>
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>ID</th>
                    <th>Contact Person</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Comapny Name</th>
                    <th>City</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <tr>
                        <td><a href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=edit">Edit</a> <a href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=updateservice">Services</a>  <a href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=updatearea">Areas</a> <a href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=points">Credits</a> <a href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> <?php if ($_smarty_tpl->tpl_vars['i']->value['status']!='active') {?><a href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=activate">Approve</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
<?php }?> </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['contact_person'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['company_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['i']->value['email_verified']==1) {?>Yes<?php } else { ?>No<?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['i']->value['phone_verified']==1) {?>Yes<?php } else { ?>No<?php }?></td>
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

                        <a href="index.php?admin/contractor&page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
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
