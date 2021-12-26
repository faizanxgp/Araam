<?php /* Smarty version Smarty-3.1.15, created on 2016-03-22 11:11:49
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\customerupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2183856f0e225427c33-88424786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a730a5703cf50dcf14af1edaa820b1f392352a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\customerupdate.tpl',
      1 => 1458627065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183856f0e225427c33-88424786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'path' => 0,
    'd' => 0,
    'gr_status' => 0,
    'gr_verified' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f0e2256798b4_04420241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0e2256798b4_04420241')) {function content_56f0e2256798b4_04420241($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_radios.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

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
        <h2>Customer</h2>
        <form method="post" action="index.php?admin/customer&action=<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" readonly=""></td></tr>
                <tr><td class="td_title">Customer Name</td><td><input type="text" name="customername" id="customername" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['customername'];?>
"></td></tr>
                <tr><td class="td_title">Phone</td><td><input type="text" name="phone" id="phone" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
"></td></tr>
                <tr><td class="td_title">Email</td><td><input type="text" name="email" id="email" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
"></td></tr>
                <tr><td class="td_title">Status</td><td><span class="radio"><?php echo smarty_function_html_radios(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['gr_status']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['status'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
</span></td></tr>
                <tr><td class="td_title">Email Verified</td><td><span class="radio">
                    <?php echo smarty_function_html_radios(array('name'=>'email_verified','options'=>$_smarty_tpl->tpl_vars['gr_verified']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['email_verified'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
        
                            </span></td></tr>
                <tr><td class="td_title">Phone Verified</td><td><span class="radio">
                    <?php echo smarty_function_html_radios(array('name'=>'phone_verified','options'=>$_smarty_tpl->tpl_vars['gr_verified']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['phone_verified'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
        
                            </span></td></tr>
                <tr><td class="td_title">Date created</td><td><input type="text" name="datecreated" id="datecreated" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['datecreated'];?>
" readonly=""></td></tr>
                <tr><td class="td_title">Last login</td><td><input type="text" name="lastlogin" id="lastlogin" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['lastlogin'];?>
" readonly=""></td></tr>
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
