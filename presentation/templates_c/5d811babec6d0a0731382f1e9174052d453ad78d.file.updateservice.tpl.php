<?php /* Smarty version Smarty-3.1.15, created on 2016-03-24 11:32:32
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\updateservice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1757756e0fbdd8c51e3-11000494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d811babec6d0a0731382f1e9174052d453ad78d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\updateservice.tpl',
      1 => 1458716845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757756e0fbdd8c51e3-11000494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fbddb59501_49974265',
  'variables' => 
  array (
    'message' => 0,
    'services' => 0,
    'k' => 0,
    'v' => 0,
    'selectedservices' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fbddb59501_49974265')) {function content_56e0fbddb59501_49974265($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_checkboxes.php';
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
/contractor/update/ac-updateservice">
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
                                    <?php echo smarty_function_html_checkboxes(array('name'=>'services','options'=>$_smarty_tpl->tpl_vars['v']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedservices']->value,'labels'=>"false",'separator'=>''),$_smarty_tpl);?>

                                    
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
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
