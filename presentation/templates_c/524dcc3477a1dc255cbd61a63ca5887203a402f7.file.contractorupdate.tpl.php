<?php /* Smarty version Smarty-3.1.15, created on 2016-03-22 11:13:03
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\contractorupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3105956e10e859814c5-18689007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524dcc3477a1dc255cbd61a63ca5887203a402f7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\contractorupdate.tpl',
      1 => 1458627172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3105956e10e859814c5-18689007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10e85b3ea38_47306303',
  'variables' => 
  array (
    'message' => 0,
    'path' => 0,
    'd' => 0,
    'gr_status' => 0,
    'gr_verified' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10e85b3ea38_47306303')) {function content_56e10e85b3ea38_47306303($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_radios.php';
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
        <h2>Contractor</h2>
        <form method="post" action="index.php?admin/contractor&action=<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">
            <table class="table">

                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" readonly=""></td></tr>
                <tr><td class="td_title">Contact Person</td><td><input type="text" name="contact_person" id="contact-person" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['contact_person'];?>
"></td></tr>
                <tr><td class="td_title">Phone</td><td><input type="text" name="phone" id="phone" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
"></td></tr>
                <tr><td class="td_title">Email</td><td><input type="text" name="email" id="email" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
"></td></tr>
                <tr><td class="td_title">Comapny Name</td><td><input type="text" name="company_name" id="company_name" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['company_name'];?>
"></td></tr>
                <tr><td class="td_title">Registration</td><td><input type="text" name="registration" id="registration" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['registration'];?>
"></td></tr>
                <tr><td class="td_title">Address</td><td><input type="text" name="address" id="address" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
"></td></tr>
                <tr><td class="td_title">City</td><td><input type="text" name="city" id="city" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
"></td></tr>
                <tr><td class="td_title">Postcode</td><td><input type="text" name="postcode" id="postcode" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['postcode'];?>
"></td></tr>
                <tr><td class="td_title">Website</td><td><input type="text" name="website" id="website" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['website'];?>
"></td></tr>
                <tr><td class="td_title">FB Page</td><td><input type="text" name="fb" id="fb" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fb'];?>
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
