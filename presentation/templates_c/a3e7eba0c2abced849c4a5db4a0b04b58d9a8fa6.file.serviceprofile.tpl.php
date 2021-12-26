<?php /* Smarty version Smarty-3.1.15, created on 2016-03-31 10:13:38
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\serviceprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1156556f4ccf85dc5c1-00436661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3e7eba0c2abced849c4a5db4a0b04b58d9a8fa6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\serviceprofile.tpl',
      1 => 1459401209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1156556f4ccf85dc5c1-00436661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f4ccf8839dd0_31899997',
  'variables' => 
  array (
    'message' => 0,
    'data1' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4ccf8839dd0_31899997')) {function content_56f4ccf8839dd0_31899997($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("contractorheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("contractorleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
        

                <h3>Service Profiles</h3>
                <a class="btn button" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/profile/id-0/ac-updateservice">Add New</a>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>Title</th>
                        
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <tr>
                            <td><a class="btn" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/profile/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-updateservice">Update</a> 

                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['subservice'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['service_title'];?>
</td>
                            

                            
                        </tr>
                    <?php } ?>
                </table>
            
        
    </div>

</div>


<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
