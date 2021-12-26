<?php /* Smarty version Smarty-3.1.15, created on 2016-04-02 09:12:12
         compiled from "D:\xampp\htdocs\araam\presentation\templates\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:685056e1482f4f7c77-89925558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8fb48d5d7a6b0cd6dd82998979270e5ea0a3ea6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\dashboard.tpl',
      1 => 1459492871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685056e1482f4f7c77-89925558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e1482f6093b2_38228637',
  'variables' => 
  array (
    'message' => 0,
    'smessage' => 0,
    'data1' => 0,
    'i' => 0,
    'data2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1482f6093b2_38228637')) {function content_56e1482f6093b2_38228637($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['smessage']->value&&$_smarty_tpl->tpl_vars['smessage']->value!='') {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['smessage']->value;?>
</div>
    </div>
<?php }?>  
<div class="row">
    
    <div class="col-md-12">
        <p></p>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">My Projects</a></li>
            <li><a data-toggle="tab" href="#tab2">Completed Projects</a></li>

        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <h3>My Projects</h3>
                <!--<table class="table">
                    <tr>
                        <th></th>
                        <th>Area</th>
                        <th>Service</th>
                        <th>Date/Time</th>
                        <th>Status</th>
                    </tr>-->
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <div class="project-box">
                        <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-quotes">Quotes</a> <?php if ($_smarty_tpl->tpl_vars['i']->value['approved']=="approved") {?><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-cancel">Cancel</a> <?php }?><?php if ($_smarty_tpl->tpl_vars['i']->value['approved']=="approved") {?><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-complete">Complete</a><?php }?></p>

                        <p>Looking for: <?php echo $_smarty_tpl->tpl_vars['i']->value['subservice'];?>
</p>
                        <p>in <?php echo $_smarty_tpl->tpl_vars['i']->value['area'];?>
 of <?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
</p>
                        <p>Created On: <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</p>
                        <p>Status: <?php echo $_smarty_tpl->tpl_vars['i']->value['approved'];?>
</p>
                    </div>
                <?php } ?>

            </div>
            <div id="tab2" class="tab-pane fade">
                <h3>Completed Projects</h3>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <div class="project-box">
                        <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-quotes">Quotes</a> <?php if ($_smarty_tpl->tpl_vars['i']->value['approved']=="approved") {?><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-cancel">Cancel</a> <?php }?><?php if ($_smarty_tpl->tpl_vars['i']->value['approved']=="approved") {?><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-complete">Complete</a><?php }?></p>

                        <p>Looking for: <?php echo $_smarty_tpl->tpl_vars['i']->value['subservice'];?>
</p>
                        <p>in <?php echo $_smarty_tpl->tpl_vars['i']->value['area'];?>
 of <?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
</p>
                        <p>Created On: <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</p>
                        <p>Status: <?php echo $_smarty_tpl->tpl_vars['i']->value['approved'];?>
</p>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
