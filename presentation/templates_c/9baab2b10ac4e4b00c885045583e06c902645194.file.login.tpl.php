<?php /* Smarty version Smarty-3.1.15, created on 2016-04-02 09:11:58
         compiled from "D:\xampp\htdocs\araam\presentation\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:581756e146019a37d7-72624810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9baab2b10ac4e4b00c885045583e06c902645194' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\login.tpl',
      1 => 1459492029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581756e146019a37d7-72624810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e14601b169b1_80166715',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e14601b169b1_80166715')) {function content_56e14601b169b1_80166715($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<div class="row">
    <!--
    <div class="col-md-3">
    <?php echo $_smarty_tpl->getSubTemplate ("leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

    </div>
    -->
    <div class="col-md-8 col-md-offset-4">
        




        <div id="loginform">
            <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="message alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
        <?php }?>
            <h2>Customer Login</h2>
            
            <p>Please login below to proceed </p>

            <form id="form1" method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/user/ac-login">


                <table>
                    <tr>
                        <td><label>E-mail:</label> 
                            <input name="useremail" type="text" maxlength="255" value="" parsley-trigger="change" parsley-type="email" parsley-type-email-message="Please provide a valid E-mail address" required="" /></td>
                    </tr>
                    <tr>
                        <td><label>Password:</label>
                            <input name="userpass" type="password" maxlength="20" value="" required="" />

                        </td>
                    </tr>
                    <tr>
                        <td><input name="usersubmit" class="btn btn-primary" type="submit" value="Login" /> <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/user/ac-forgot" class="btn btn-secondary">Forgot Password?</a></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
