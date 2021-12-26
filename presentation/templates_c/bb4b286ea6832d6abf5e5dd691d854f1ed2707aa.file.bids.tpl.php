<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 11:36:14
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\bids.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260756fb73de2b8c01-36878801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4b286ea6832d6abf5e5dd691d854f1ed2707aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\bids.tpl',
      1 => 1457610433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260756fb73de2b8c01-36878801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'data' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56fb73de43f661_97909630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fb73de43f661_97909630')) {function content_56fb73de43f661_97909630($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

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
        
            <h2>Quotes Received</h2>
            
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>Amout</th>
                    <th>Type</th>
                    <th>Message</th>
                    <th>Details</th>
                    <th>Contact Person</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>City</th>
                    

                </tr>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <tr>
                        <td>
                            
                        </td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['amount'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['btype'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['contact_person'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['mobile'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
</td>
                        
                    </tr>
                <?php } ?>
            </table>

            
        </div>
    </div>






<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
