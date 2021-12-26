<?php /* Smarty version Smarty-3.1.15, created on 2016-03-23 10:37:09
         compiled from "D:\xampp\htdocs\araam\presentation\templates\quotemessages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181356e1578c978039-99731118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86c3e30122816689d6ff6b83e42c1dd3cfe2ce8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\quotemessages.tpl',
      1 => 1457930654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181356e1578c978039-99731118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e1578cb0e496_95978955',
  'variables' => 
  array (
    'message' => 0,
    'pname' => 0,
    'messagedata' => 0,
    'i' => 0,
    'data1' => 0,
    'q_id' => 0,
    'p_id' => 0,
    'r_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1578cb0e496_95978955')) {function content_56e1578cb0e496_95978955($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?> 

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

    </div>
    <div class="col-md-9">
        

                <h3>Messages with <?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
</h3>
                
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value['messageby']=="user") {?>
                    <div class="user-message">
                        <?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
 <br />at <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
 -- by user
                    </div>
                <?php } else { ?>
                    <div class="provider-message">
                        <?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
 <br />at <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
 -- by contractor
                    </div>
                <?php }?>
                <?php } ?>
            
                <!--
                <table class="table">
                    <tr>
                        
                        <th>Message by</th>
                        <th>Message</th>
                        <th>Date created</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <tr>
                            

                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['messageby'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</td>
                            
                        </tr>
                    <?php } ?>
                </table> -->
                
                <table>
                    <tr>
                        <td>
                            <form name="form01" method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['q_id']->value;?>
/ac-messages">
                            <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['p_id']->value;?>
">
                            <input type="hidden" name="r_id" value="<?php echo $_smarty_tpl->tpl_vars['r_id']->value;?>
">
                            <input type="hidden" name="q_id" value="<?php echo $_smarty_tpl->tpl_vars['q_id']->value;?>
">
                            <label>Message:</label>
                            <textarea name="message"></textarea>
                            <input type="submit" class="btn" name="submit01" />
                            </form>
                    
                    
                </table>
            
            
        
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
