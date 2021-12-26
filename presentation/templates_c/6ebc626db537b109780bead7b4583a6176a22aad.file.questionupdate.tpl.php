<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 10:16:45
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\questionupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3123756e64684a15187-84938892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ebc626db537b109780bead7b4583a6176a22aad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\questionupdate.tpl',
      1 => 1457932583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3123756e64684a15187-84938892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e64684bedc73_96645543',
  'variables' => 
  array (
    'message' => 0,
    'path' => 0,
    'd' => 0,
    'services' => 0,
    'gr_questiontype' => 0,
    'gr_yesno' => 0,
    'gr_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e64684bedc73_96645543')) {function content_56e64684bedc73_96645543($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
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
        <h2>Questions</h2>
        <form method="post" action="index.php?admin/questions&action=<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" enctype="multipart/form-data">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" readonly=""></td></tr>
                <tr><td class="td_title">Services</td><td>
                        <select name="service_id">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['services']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['service_id']),$_smarty_tpl);?>

                        </select>
                        
                        
                    </td></tr>
                
                <tr><td class="td_title">Questions #</td><td><input type="text" name="question_number" id="question_number" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_number'];?>
"></td></tr>
                <tr><td class="td_title">Questions</td><td><input type="text" name="question_text" id="question_text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_text'];?>
"></td></tr>
                <tr><td class="td_title">Question type</td><td>
                        <span class="radio"><?php echo smarty_function_html_radios(array('name'=>'question_type','options'=>$_smarty_tpl->tpl_vars['gr_questiontype']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['question_type'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
</span>
                </td></tr>
                
                <tr><td class="td_title">Choices</td><td><input type="text" name="question_choices" id="question_choices" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['question_choices'];?>
"></td></tr>
                <tr><td class="td_title">Other option</td><td>
                        <span class="radio"><?php echo smarty_function_html_radios(array('name'=>'question_others','options'=>$_smarty_tpl->tpl_vars['gr_yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['question_others'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
</span></td></tr>
                <tr><td class="td_title">Enabled</td><td>
                        <span class="radio"><?php echo smarty_function_html_radios(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['gr_status']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['status'],'separator'=>' ','class'=>"inner"),$_smarty_tpl);?>
</span></td></tr>
                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>
</div>
<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
