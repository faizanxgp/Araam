<?php /* Smarty version Smarty-3.1.15, created on 2017-03-14 13:44:53
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\subserviceupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1828258c7ad852ab009-07834528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '801a78f2da319114db5169b3d7617a9e325e7e7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\subserviceupdate.tpl',
      1 => 1457932584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828258c7ad852ab009-07834528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'path' => 0,
    'd' => 0,
    'services' => 0,
    'gr_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58c7ad853fedd6_86057688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c7ad853fedd6_86057688')) {function content_58c7ad853fedd6_86057688($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_radios.php';
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
        <h2>Sub Service</h2>
        <form method="post" action="index.php?admin/subservice&action=<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" readonly=""></td></tr>
                <tr><td class="td_title">Sub Service Name</td><td><input type="text" name="subservice" id="subservice" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['subservice'];?>
"></td></tr>
                <tr><td class="td_title">Service</td><td>
                        <select name="service_id" id="service_id" >
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['services']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['service_id']),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>

                <tr><td class="td_title">Active</td><td><span class="radio"><?php echo smarty_function_html_radios(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['gr_status']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['status'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
</span></td></tr>
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
