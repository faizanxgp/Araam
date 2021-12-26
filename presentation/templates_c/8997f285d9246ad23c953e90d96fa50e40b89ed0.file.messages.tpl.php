<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 10:45:57
         compiled from "D:\xampp\htdocs\araam\presentation\templates\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2415356e14589b78cc3-35704231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8997f285d9246ad23c953e90d96fa50e40b89ed0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\messages.tpl',
      1 => 1457609558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2415356e14589b78cc3-35704231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e14589c8a406_91110051',
  'variables' => 
  array (
    'message' => 0,
    'messagetitle' => 0,
    'messagedetails' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e14589c8a406_91110051')) {function content_56e14589c8a406_91110051($_smarty_tpl) {?>
<?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
        <h2><?php echo $_smarty_tpl->tpl_vars['messagetitle']->value;?>
</h2>
        <?php echo $_smarty_tpl->tpl_vars['messagedetails']->value;?>

    </div>
    
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
