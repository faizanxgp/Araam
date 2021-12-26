<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 08:44:32
         compiled from "D:\xampp\htdocs\araam\presentation\templates\forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2700956e633a06a3c88-67602540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8b6eb5bbaa646c5f212acc2cb05f49104540cbb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\forgot.tpl',
      1 => 1457926994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2700956e633a06a3c88-67602540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e633a07c8c42_58665593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e633a07c8c42_58665593')) {function content_56e633a07c8c42_58665593($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<div class="row">
    <!--<div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

    </div>-->
    <div class="col-md-8 col-md-offset-4">
        <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
        <?php }?>
        

            <form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/user/ac-forgot">
                <div id="forgotform">
                    <h3>Forgot Password?</h3>
                    <p>To reset your password, please enter your e-mail address. In turn, we will send you a password link via e-mail.</p>
                    <p>&nbsp;</p>
                    <p>Your E-mail <br />
                        <input name="useremail" type="text" maxlength="255" value="" parsley-trigger="change" parsley-type="email" parsley-type-email-message="Please provide a valid email address" required="" />
                    </p>
                    <p>
                    <input name="usersubmit" class="btn btn-primary"  type="submit" value="Process" />
                    </p>
                </div>
            </form>
        
    </div>
    
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
