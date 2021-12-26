<?php /* Smarty version Smarty-3.1.15, created on 2016-03-29 11:44:16
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\updateprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61056f4c0e2403cf5-34462295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5436ad7007b44c02a5e4e7cfb6b237ff4f78a6e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\updateprofile.tpl',
      1 => 1459233850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61056f4c0e2403cf5-34462295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f4c0e257ad45_53159846',
  'variables' => 
  array (
    'message' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4c0e257ad45_53159846')) {function content_56f4c0e257ad45_53159846($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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
/contractor/profile/ac-update">
            <div id="inputform">
                <h3>Update Profile</h3>
                <table class="table">
                    <tr>
                        <td>
                    <label>Business Name:</label>  <br />
                            <input name="business_name" type="text" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_name'];?>
" /></td>
                    </tr>
                    <tr>
                        <td><label>Business Logo:</label> <br />
                            <input name="logo" id='logo' type="file" /></td>
                    </tr>
                    <tr><td>			
                            <label>Business Description:</label> <br />
                            <textarea name="business_description" id="business-description"><?php echo $_smarty_tpl->tpl_vars['d']->value['business_description'];?>
</textarea></td>
                    </tr>
                    <tr><td>			
                            <label>Email:</label> <br />
                            <input name="business_email" type="email" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_email'];?>
" /></td>
                    </tr>
                    
                    <tr><td>			
                            <label>Phone:</label> <br />
                            <input name="business_phone" type="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_phone'];?>
" /></td>
                    </tr>
                    
                    <tr><td>			
                            <label>Fax:</label> <br />
                            <input name="business_fax" type="text" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_fax'];?>
" /></td>
                    </tr>
                    
                </table>

                <table class="table">
                    <tr>	
                        <td><label>Business Address:</label> <br />
                            <input name="business_address" type="text" maxlength="254" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_address'];?>
" /></td>

                    </tr>
                    <tr><td><label>Area/Locality:</label> <br />
                            <input name="business_area" type="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_area'];?>
" /></td>
                    </tr>
                    <tr>
                        <td><label>City:</label> <br />
                            <input name="business_city" type="text" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_city'];?>
" /></td>

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
