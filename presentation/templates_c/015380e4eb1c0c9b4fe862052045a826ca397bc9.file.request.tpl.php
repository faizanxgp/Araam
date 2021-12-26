<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 11:34:57
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223156e10a5b668656-47422199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '015380e4eb1c0c9b4fe862052045a826ca397bc9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\request.tpl',
      1 => 1459318186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223156e10a5b668656-47422199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10a5b8f0de9_31245517',
  'variables' => 
  array (
    'message' => 0,
    'data' => 0,
    'i' => 0,
    'pagination' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10a5b8f0de9_31245517')) {function content_56e10a5b8f0de9_31245517($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

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
        
            <h2>User Requests</h2>
            <a class="btn button" href="index.php?admin/requests&action=add">Add New</a>
            <form method="post" action="index.php?admin/requests&action=search" id="searchform"><input type="text" name="searchtext" value="" max="255" /> <input class="btn btn-search" type="submit" name="submitquery" value="Search" /></form>
            
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>ID</th>
                    <th>Service</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Date</th>
                    
                </tr>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <tr>
                        <td><a class="btn" href="index.php?admin/requests&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=edit">Edit</a> <a class="btn" href="index.php?admin/requests&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=delete">Del</a> <a class="btn" href="index.php?admin/requests&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=bids">Quotes</a> <?php if ($_smarty_tpl->tpl_vars['i']->value['approved']=="submitted") {?><a class="btn" href="index.php?admin/requests&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=approve">Approve</a><?php } else { ?>Approved<?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['subservice'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['area'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
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

            <div class="pagination col-md-6">
                Page: 
                

                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']>1) {?>
                    <?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page']-1, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page'], null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']<$_smarty_tpl->tpl_vars['pagination']->value['pages']) {?>
                    <?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page']+1, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page'], null, 0);?>
                <?php }?>
                <a href="index.php?admin/requests&page=1">First</a>
                <a href="index.php?admin/requests&page=<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
">Prev</a>
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value['page'];?>

                <a href="index.php?admin/requests&page=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">Next</a>
                <a href="index.php?admin/requests&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['pages'];?>
">Last</a>
            </div>
        </div>
    </div>






<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
