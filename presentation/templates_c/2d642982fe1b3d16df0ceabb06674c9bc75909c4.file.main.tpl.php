<?php /* Smarty version Smarty-3.1.15, created on 2017-03-13 19:03:04
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:504656e10a4c3d0d90-06741658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d642982fe1b3d16df0ceabb06674c9bc75909c4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\main.tpl',
      1 => 1459406418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504656e10a4c3d0d90-06741658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10a4c5c0f91_88967619',
  'variables' => 
  array (
    'message' => 0,
    'data1' => 0,
    'i' => 0,
    'data2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10a4c5c0f91_88967619')) {function content_56e10a4c5c0f91_88967619($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

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
        <h3>Welcome to Admin Panel</h3>
        
        
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">New Requests</a></li>
            <li><a data-toggle="tab" href="#tab2">New Professionals</a></li>
            
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
        
        <h3>New Requests</h3>
        <table class="table">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Status</th>
                <th>Date/Time</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <tr>
                        <td><a class="btn" href="index.php?admin/requests&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=edit">Edit</a> 
                            <a class="btn" href="index.php?admin/requests&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Del</a> 
                        </td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['requestby'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['mobile'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['approved'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</td>
                    </tr>
            <?php } ?>
        </table>
        
        </div>
            <div id="tab2" class="tab-pane fade">
        
        <h3>New Professionals</h3>
        <table class="table">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Status</th>
                <th>Date/Time</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <tr>
                        <td><a class="btn" href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=edit">Edit</a> 
                            <a class="btn" href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Del</a> <?php if ($_smarty_tpl->tpl_vars['i']->value['status']!='active') {?><a href="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=activate">Activate</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
<?php }?>
                        </td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['contact_person'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['mobile'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</td>
                    </tr>
            <?php } ?>
        </table>
        
            </div></div>
    </div>
</div>
<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
