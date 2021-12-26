<?php /* Smarty version Smarty-3.1.15, created on 2016-03-21 11:30:03
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1887156ef94eb5138c4-34522496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '660d8d8f2344a6af368195a960616e3986ab0a8a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\forgot.tpl',
      1 => 1457926923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1887156ef94eb5138c4-34522496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56ef94eb707936_62567625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ef94eb707936_62567625')) {function content_56ef94eb707936_62567625($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("contractorheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <!--
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("contractorleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>-->
    <div class="col-md-8 col-md-offset-4">
        <h1>Forgot Password?</h1>
        <form id="form1" name="form1" method="post" action="">

            <table >

                <tr>
                    <td ><br />
                        <input name="contractor_email" type="text" id="contractor_email" maxlength="254" />
                        <br />
                        Please enter your email address </td>
                </tr>
                <tr><td>
                    
                        <input name="submit01" type="submit" id="submit01" value="Proceed" class="btn btn-primary button" /></td>
                </tr>

            </table>

        </form>

    </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
