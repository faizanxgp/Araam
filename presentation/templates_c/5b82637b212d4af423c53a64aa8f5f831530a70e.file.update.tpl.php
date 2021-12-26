<?php /* Smarty version Smarty-3.1.15, created on 2016-03-29 10:25:54
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1321056e0fb5906e095-47651786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b82637b212d4af423c53a64aa8f5f831530a70e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\update.tpl',
      1 => 1459229150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321056e0fb5906e095-47651786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fb59210077_85466332',
  'variables' => 
  array (
    'message' => 0,
    'd' => 0,
    'gr_city' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fb59210077_85466332')) {function content_56e0fb59210077_85466332($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("contractorheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

<!-- form begin -->


<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("contractorleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
        <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="message alert alert-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
        
        
        <form method="post" data-parsley-validate="" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/update/ac-update">
            <div id="inputform">
                <h3>Update Account</h3>
                <table class="table">
                    <tr>
                        <td>
                    <label>Contact Person Name:</label>  <br />
                            <input name="contact_person" type="text" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['contact_person'];?>
" /></td>
                    </tr>
                    <tr>
                        <td><label>Phone:</label> <br />
                            <input name="phone" type="text" maxlength="20"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
" data-parsley-type="digits" /></td>
                    </tr>
                    <tr><td>			
                            <label>Mobile:</label> <br />
                            <input name="mobile" type="text" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['mobile'];?>
" data-parsley-type="digits" /></td>
                    </tr>
                    <tr><td>			
                            <label>Email:</label> <br />
                            <input name="email" type="email" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
" /></td>
                    </tr>
                    <tr><td><label>Password:</label> <br />
                            <input name="pass1" type="password" maxlength="20" value="" /></td>

                    </tr>
                    <tr><td><label>Confirm Password:</label> <br />
                            <input name="pass2" type="password" maxlength="20" data-parsley-equalto="#pass" value="" /></td>
                    </tr>
                </table>

                <table class="table">
                    <tr>	
                        <td><label>Company Name:</label> <br />
                            <input name="company_name" type="text" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['company_name'];?>
" /></td>

                    </tr>
                    <tr><td><label>Registration/CNIC:</label> <br />
                            <input name="registration" type="text" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['registration'];?>
" /></td>
                    </tr>
                    <tr>
                        <td><label>Address:</label> <br />
                            <input name="address" type="text" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
" /></td>

                    </tr>
                    <tr><td><label>City:</label> <br />
                            <select name="city" id="city" >
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gr_city']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['city']),$_smarty_tpl);?>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Postcode:</label> <br />
                            <input name="postcode" type="text" maxlength="20" value="postcode" /></td>

                    </tr>

                    <tr>
                        <td><input name="submit01" class="btn btn-primary"  type="submit" value="Update" /> </td>
                    </tr>

                </table>

            </div>



        </form>
    </div>
</div>
<!-- form end -->
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
