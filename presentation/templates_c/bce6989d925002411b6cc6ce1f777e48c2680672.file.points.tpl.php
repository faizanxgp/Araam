<?php /* Smarty version Smarty-3.1.15, created on 2016-03-10 11:00:46
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\points.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1626956e10d8e06c730-56705383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce6989d925002411b6cc6ce1f777e48c2680672' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\points.tpl',
      1 => 1457524144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1626956e10d8e06c730-56705383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'd' => 0,
    'providers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10d8e1fed14_22631321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10d8e1fed14_22631321')) {function content_56e10d8e1fed14_22631321($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
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
        <h2>Credits</h2>
        <form method="post" action="index.php?admin/contractor&action=addpoints" enctype="multipart/form-data">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" readonly=""></td></tr>
                
                <tr><td class="td_title">Provider</td><td>
                        <select name="provider_id" id="provider_id" >
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['providers']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['provider_id']),$_smarty_tpl);?>

                        </select>
                        
                        </td></tr>
                
                <tr><td class="td_title">Date</td><td><input type="text" name="date" id="datepicker" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['date'];?>
"></td></tr>
                
                <tr><td class="td_title">Amount</td><td><input type="text" name="amount" id="amount" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['amount'];?>
"></td></tr>
                
                <tr><td class="td_title">Type</td><td><input type="text" name="mtype" id="mtype" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['mtype'];?>
"></td></tr>
                
                <tr><td class="td_title">Reference</td><td><input type="text" name="reference" id="reference" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['reference'];?>
"></td></tr>
                
                <tr><td class="td_title">Received from</td><td><input type="text" name="receivedfrom" id="receivedfrom" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['receivedfrom'];?>
"></td></tr>
                
                <tr><td class="td_title">Credits</td><td><input type="text" name="points" id="points" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['points'];?>
"></td></tr>
                
                
                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>
</div>
<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
