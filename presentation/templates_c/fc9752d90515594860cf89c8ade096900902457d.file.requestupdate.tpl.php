<?php /* Smarty version Smarty-3.1.15, created on 2016-03-21 12:42:53
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\requestupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2865756e6511d581d69-16731321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc9752d90515594860cf89c8ade096900902457d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\requestupdate.tpl',
      1 => 1458546167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2865756e6511d581d69-16731321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e6511d75e6d3_95157830',
  'variables' => 
  array (
    'message' => 0,
    'path' => 0,
    'd' => 0,
    'services' => 0,
    'areas' => 0,
    'gr_reqstatus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6511d75e6d3_95157830')) {function content_56e6511d75e6d3_95157830($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
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
        <h2>Requests</h2>
        <form method="post" action="index.php?admin/requests&action=<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" enctype="multipart/form-data">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" readonly=""></td></tr>
                <tr><td class="td_title">Service</td><td>
                    <select name="subservice_id">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['services']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['subservice_id']),$_smarty_tpl);?>

                    </select></td></tr>
                <tr><td class="td_title">Area</td><td>
                    <select name="area_id">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['areas']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['area_id']),$_smarty_tpl);?>

                    </select> </td></tr>
                
                <tr><td class="td_title">Question 1</td><td><input type="text" name="question_1" id="question_1" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_1'];?>
"></td></tr>
                <tr><td class="td_title">Question 2</td><td><input type="text" name="question_2" id="question_2" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_2'];?>
"></td></tr>
                <tr><td class="td_title">Question 3</td><td><input type="text" name="question_3" id="question_3" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_3'];?>
"></td></tr>
                <tr><td class="td_title">Question 4</td><td><input type="text" name="question_4" id="question_4" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_4'];?>
"></td></tr>
                <tr><td class="td_title">Question 5</td><td><input type="text" name="question_5" id="question_5" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_5'];?>
"></td></tr>
                <tr><td class="td_title">Question 6</td><td><input type="text" name="question_6" id="question_6" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_6'];?>
"></td></tr>
                
                <tr><td class="td_title">Expected Date</td><td><input type="text" name="expected_date" id="expected_date" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['expected_date'];?>
"></td></tr>
                <tr><td class="td_title">Estimated Date</td><td><input type="text" name="estimated_date" id="estimated_date" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['estimated_date'];?>
"></td></tr>
                <tr><td class="td_title">Project Description</td><td><textarea name="service_description" id="service_description" ><?php echo $_smarty_tpl->tpl_vars['d']->value['service_description'];?>
</textarea></td></tr>
                <tr><td class="td_title">Budget</td><td><input type="text" name="budget" id="budget" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['budget'];?>
" /></td></tr>
                <tr><td class="td_title">Name</td><td><input type="text" name="requestby" id="requestby" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['requestby'];?>
"></td></tr>
                <tr><td class="td_title">Email</td><td><input type="text" name="email" id="email" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
"></td></tr>
                <tr><td class="td_title">Phone</td><td><input type="text" name="mobile" id="mobile" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['mobile'];?>
"></td></tr>
                
                <tr><td class="td_title">Promotion code</td><td><input type="text" name="promocode" id="promocode" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['promocode'];?>
"></td></tr>
                <tr><td class="td_title">Status</td><td><span class="radio"><?php echo smarty_function_html_radios(array('name'=>'approved','options'=>$_smarty_tpl->tpl_vars['gr_reqstatus']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['approved'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
</span></td></tr>
                <tr><td class="td_title">Date created</td><td><input type="text" name="datecreated" id="datecreated" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['datecreated'];?>
" readonly="" ></td></tr>
                
                
                
                
                
                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>
</div>
<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
