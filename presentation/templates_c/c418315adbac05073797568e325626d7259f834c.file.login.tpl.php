<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 08:44:14
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2464556e0fb1381afa9-53991327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c418315adbac05073797568e325626d7259f834c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\login.tpl',
      1 => 1457927049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2464556e0fb1381afa9-53991327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fb13b18a56_56281319',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fb13b18a56_56281319')) {function content_56e0fb13b18a56_56281319($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <!--
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>-->
    <div class="col-md-8 col-md-offset-4">
        
            <form method="post" data-parsley-validate="" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-login">
                <div id="loginform">
                    <h3>Contractor Login</h3>
                    <table>
                        <tr>
                            <td><label>Email:</label> <br />
                                <input name="contractoremail" type="text" maxlength="254" value="" required="" /></td></tr>

                        <tr><td><label>Password:</label> <br />
                                <input name="contractorpassword" type="password" maxlength="20" value="" required="" /></td></tr>

                        <tr><td><input class="btn btn-primary" name="usersubmit"  type="submit" value="Login" /> <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/ac-forgot" class="btn btn-secondary">Forgot Password?</a></td></tr>

                    </table>

                </div>



            </form>

        
    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
