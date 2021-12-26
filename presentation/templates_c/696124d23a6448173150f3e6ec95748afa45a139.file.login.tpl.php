<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 08:43:48
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:967656e10a397435f0-60885185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '696124d23a6448173150f3e6ec95748afa45a139' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\login.tpl',
      1 => 1457927012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967656e10a397435f0-60885185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10a39883b45_11396547',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10a39883b45_11396547')) {function content_56e10a39883b45_11396547($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("adminheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <!--<div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("adminleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>-->
    <div class="col-md-8 col-md-offset-4">
        
            <form method="post" data-parsley-validate="" action="index.php?admin/admin&action=login">
                <div id="loginform">

                    <h3>Admin Login</h3>
                    <table>
                        <tr><td>
                                Email: <br />
                                <input name="adminemail" type="text" maxlength="100" value="" required="" /></td></tr>

                        <tr><td>Password: <br />
                                <input name="adminpassword" type="password" maxlength="20" value="" required="" /></td></tr>
                        <tr><td>
                                <input class="btn btn-primary" name="usersubmit"  type="submit" value="Login" /> </td></tr>
                    </table>


                </div>



            </form>

        
    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
