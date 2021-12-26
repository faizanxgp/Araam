<?php /* Smarty version Smarty-3.1.15, created on 2016-03-31 10:13:53
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\updateserviceprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120056f4c6735173c7-82926559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ab2fcc39931ba56a5764fb279bab0f5a8190f7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\updateserviceprofile.tpl',
      1 => 1459401229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120056f4c6735173c7-82926559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f4c673722b47_64918098',
  'variables' => 
  array (
    'message' => 0,
    'd' => 0,
    'gr_service' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4c673722b47_64918098')) {function content_56f4c673722b47_64918098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("contractorheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

<!-- form begin -->

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("contractorleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
        <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="message alert alert-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
        
        
        <form method="post" enctype="multipart/form-data" data-parsley-validate="" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/profile/id-<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/ac-updateservice">
            <div id="inputform">
                <h3>Update Profile Services</h3>
                
                <table class="table">
                    <tr>	
                        <td><label>Service:</label> <br />
                            <select name="service_id" id="service-id" >
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gr_service']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['service_id']),$_smarty_tpl);?>

                            </select></td>

                    </tr>
                    <tr>
                        <td>
                    <label>Service Title:</label>  <br />
                            <input name="service_title" type="text" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['service_title'];?>
" /></td>
                    </tr>
                    <tr><td>			
                            <label>Service Description:</label> <br />
                            <textarea name="service_description"><?php echo $_smarty_tpl->tpl_vars['d']->value['service_description'];?>
</textarea></td>
                    </tr>
                    
                    <tr>
                        <td><label>Service Images:</label> <br />
                            <input name="attach[]" id='attach' type="file" multiple="" /></td>
                    </tr>
                    
                    <tr>
                        <td><input name="submit01" class="btn btn-primary"  type="submit" value="Update" /> </td>
                    </tr>

                </table>

            </div>



        </form>
    </div>
</div>
<!-- form end -->
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
