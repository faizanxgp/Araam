<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 08:46:43
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282356e0fa07cdc839-92400851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c68681b9b64b0936dc30490267417c11b437501' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\signup.tpl',
      1 => 1457927198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282356e0fa07cdc839-92400851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fa07ea5911_74791979',
  'variables' => 
  array (
    'message' => 0,
    'gr_city' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fa07ea5911_74791979')) {function content_56e0fa07ea5911_74791979($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
?>
<?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<div class="row">
    <!--
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>-->
        
    <div class="col-md-8 col-md-offset-4">
        <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="row">
                <div class="col-md-12 message">
                    <h3>Validation Errors</h3>
                    <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></div>
            </div>
        <?php }?>
        <form method="post" data-parsley-validate="" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-signup">
            <div id="signupform">
                <h3>Contractor Sign Up</h3>
                <table class="table-contractor">
                    <tr>
                        <td><label>Contact Person Name: <span class="required">*</span> </label> <br />
                            <input name="contact_person" type="text" maxlength="100" value="" required="" /><p class="tips">Your name</p></td>
                    </tr>
                    <tr>
                        <td><label>Phone: </label> <br />
                            <input name="phone" type="text" maxlength="20"  value="" data-parsley-type="digits" /><p class="tips">Your phone number e.g. 0421234567</p></td>
                    </tr>
                    <tr><td><label>Mobile: <span class="required">*</span></label> <br />
                            <input name="mobile" type="text" maxlength="20" value="" required="" data-parsley-type="digits" data-parsley-length="11" /><p class="tips">Your mobile number e.g. 03001234567</p></td>
                    </tr>
                    <tr><td>			
                            <label>Email: <span class="required">*</span></label> <br />
                            <input name="email" type="email" maxlength="254" value="" required="" /><p class="tips">Your valid email address</p></td>
                    </tr>
                    <tr><td><label>Password: <span class="required">*</span></label> <br />
                            <input name="pass1" id="pass1" type="password" data-parsley-length="[8, 20]" value="" required="" /><p class="tips">A unique password between 8 to 20 characters</p></td>

                    </tr>
                    <tr><td><label>Confirm Password: <span class="required">*</span></label> <br />
                            <input name="pass2" type="password" data-parsley-equalto="#pass1" data-parsley-length="[8, 20]" value="" required=""  /><p class="tips">Same as password field</p></td>
                    </tr>
                </table>

                <table class="table-contractor">
                    <tr>	
                        <td><label>Company Name: </label> <br />
                            <input name="company_name" type="text" maxlength=100" value=""  /><p class="tips">Your company name</p></td>

                    </tr>
                    <tr><td><label>Registration/CNIC:</label> <br />
                            <input name="registration" type="text" maxlength="30" value="" /><p class="tips">Company registration or your personal CNIC</p></td>
                    </tr>
                    <tr>
                        <td><label>Address: </label> <br />
                            <input name="address" type="text" maxlength="254" value=""  /><p class="tips">Business location</p></td>

                    </tr>
                    <tr><td><label>City: </label> <br />
                            <select name="city" id="city" >
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gr_city']->value),$_smarty_tpl);?>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Postcode:</label> <br />
                            <input name="postcode" type="text" maxlength="20" value="" /><p class="tips"></p></td>

                    </tr>

                    <tr>
                        <td><input name="usersubmit" class="btn btn-primary"  type="submit" value="Sign Up" /> <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-login" class="btn btn-secondary">Sign in</a></td>
                    </tr>

                </table>

            </div>



        </form>


    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
