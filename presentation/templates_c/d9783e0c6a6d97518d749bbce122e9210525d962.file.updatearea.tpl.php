<?php /* Smarty version Smarty-3.1.15, created on 2016-03-24 11:32:45
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\updatearea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1219256e0fc77369320-46747666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9783e0c6a6d97518d749bbce122e9210525d962' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\updatearea.tpl',
      1 => 1458716845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1219256e0fc77369320-46747666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fc77574aa8_06014609',
  'variables' => 
  array (
    'message' => 0,
    'areas' => 0,
    'selectedareas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fc77574aa8_06014609')) {function content_56e0fc77574aa8_06014609($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_checkboxes.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("contractorheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

<!-- form begin -->
<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="message alert alert-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("contractorleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
        <form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/update/ac-updatearea">
            <div id="updateform">
                <h3>Areas where you provide services</h3>
                <table class="table">
                    <tr>
                        <td>
                            <ul class="areas">
                                <?php echo smarty_function_html_checkboxes(array('name'=>'areas','options'=>$_smarty_tpl->tpl_vars['areas']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedareas']->value,'labels'=>"false",'separator'=>''),$_smarty_tpl);?>

                                
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><input name="submit01" class="btn btn-primary"  type="submit" value="Update" /> </td>
                    </tr>
                </table>
            </div>
        </form>
    </div></div>
<!-- form end -->
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
