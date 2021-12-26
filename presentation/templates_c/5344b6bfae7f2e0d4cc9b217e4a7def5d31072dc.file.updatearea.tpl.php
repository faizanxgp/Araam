<?php /* Smarty version Smarty-3.1.15, created on 2016-03-21 10:24:38
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\updatearea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1595956e649bec38f54-43599112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5344b6bfae7f2e0d4cc9b217e4a7def5d31072dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\updatearea.tpl',
      1 => 1458537872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1595956e649bec38f54-43599112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e649bede2c39_14496699',
  'variables' => 
  array (
    'message' => 0,
    'contractor_id' => 0,
    'areas' => 0,
    'selectedareas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e649bede2c39_14496699')) {function content_56e649bede2c39_14496699($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_checkboxes.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("adminheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

<!-- form begin -->
<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>


<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("adminleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
        <form method="post" action="index.php?admin/contractor&id=<?php echo $_smarty_tpl->tpl_vars['contractor_id']->value;?>
&action=updatearea">
            <input type="hidden" name="contractor_id" value="<?php echo $_smarty_tpl->tpl_vars['contractor_id']->value;?>
" />
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
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
