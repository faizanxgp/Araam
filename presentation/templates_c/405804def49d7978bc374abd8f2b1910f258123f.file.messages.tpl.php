<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 09:19:31
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712656e63bd3cb2df4-04319190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '405804def49d7978bc374abd8f2b1910f258123f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\messages.tpl',
      1 => 1457927322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712656e63bd3cb2df4-04319190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'messagetitle' => 0,
    'messagedetails' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e63bd3def4b4_87590267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e63bd3def4b4_87590267')) {function content_56e63bd3def4b4_87590267($_smarty_tpl) {?>
<?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

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
        <h2><?php echo $_smarty_tpl->tpl_vars['messagetitle']->value;?>
</h2>
        <?php echo $_smarty_tpl->tpl_vars['messagedetails']->value;?>

    </div>
    
</div>
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
