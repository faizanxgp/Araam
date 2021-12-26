<?php /* Smarty version Smarty-3.1.15, created on 2016-03-18 10:41:38
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\updateservice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912156eb95123fe670-04015017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13aa04098e381f995bdeca2eeb92b4f41ed00db3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\updateservice.tpl',
      1 => 1457932694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912156eb95123fe670-04015017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'contractor_id' => 0,
    'services' => 0,
    'k' => 0,
    'v' => 0,
    'selectedservices' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56eb95127c7351_16654607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb95127c7351_16654607')) {function content_56eb95127c7351_16654607($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_checkboxes.php';
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
&action=updateservice">
            <input type="hidden" name="contractor_id" value="<?php echo $_smarty_tpl->tpl_vars['contractor_id']->value;?>
" />
            <div id="updateform">
                <h3>Services you provide</h3>
                <table class="table">
                    <tr>
                        <td>
                            <ul class="services">
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</h3>
                                    <span class="checkbox"><?php echo smarty_function_html_checkboxes(array('name'=>'services','options'=>$_smarty_tpl->tpl_vars['v']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedservices']->value,'labels'=>"false",'separator'=>' '),$_smarty_tpl);?>
</span>
                                    
                                <?php } ?>
                            </ul>
                        </td>
                    </tr>


                    <tr>
                        <td><input name="submit01" class="btn btn-primary"  type="submit" value="Update" /> </td>
                    </tr>

                </table>

            </div>



        </form>
    </div>
</div>
</div>
<!-- form end -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
