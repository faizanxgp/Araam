<?php /* Smarty version Smarty-3.1.15, created on 2016-04-02 09:37:31
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1092556e0fb4f4a5e50-90332069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '415f358daa1cd82eedf87687aebd28e66db05cc8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\main.tpl',
      1 => 1459571846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092556e0fb4f4a5e50-90332069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fb4f6b15c4_31813598',
  'variables' => 
  array (
    'message' => 0,
    'smessage' => 0,
    'points' => 0,
    'data1' => 0,
    'i' => 0,
    'subservices' => 0,
    'areas' => 0,
    'data4' => 0,
    'data2' => 0,
    'data3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fb4f6b15c4_31813598')) {function content_56e0fb4f6b15c4_31813598($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("contractorheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
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
        <p><br />You have <?php echo $_smarty_tpl->tpl_vars['points']->value;?>
 available credits.</p>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">New Leads</a></li>
            <li><a data-toggle="tab" href="#tab1">Quoted</a></li>
            <li><a data-toggle="tab" href="#tab2">Awarded Projects</a></li>
            <li><a data-toggle="tab" href="#tab3">Completed Projects</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <h3>New Leads</h3>
                <!--<table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
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
/contractor/controlpanel/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-bid">Quote</a> 
                            <button type="button" class="btn btn-default">Available</button>
                            </p>
                            <p>Looking for <?php echo $_smarty_tpl->tpl_vars['subservices']->value[$_smarty_tpl->tpl_vars['i']->value['subservice_id']];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['i']->value['area'];?>
 in <?php echo $_smarty_tpl->tpl_vars['areas']->value[$_smarty_tpl->tpl_vars['i']->value['area_id']];?>
</p>
                            
                            <p>By <?php echo $_smarty_tpl->tpl_vars['i']->value['requestby'];?>
</p>
                            
                            

                            <p>Dated <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</p>
                        </div>
                    <?php } ?>
                
            </div>
                    <div id="tab1" class="tab-pane fade">
                <h3>Quoted</h3>
                <!--
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
                    </tr>-->
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <div class="project-box">
                            <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/controlpanel/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-bid">View</a> 
                            <button type="button" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['i']->value['approved'];?>
</button>
                            </p>
                            <p>Looking for <?php echo $_smarty_tpl->tpl_vars['subservices']->value[$_smarty_tpl->tpl_vars['i']->value['subservice_id']];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['i']->value['area'];?>
 in <?php echo $_smarty_tpl->tpl_vars['areas']->value[$_smarty_tpl->tpl_vars['i']->value['area_id']];?>
</p>
                            
                            <p>By <?php echo $_smarty_tpl->tpl_vars['i']->value['requestby'];?>
</p>

                            <p>Dated <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</p>
                        </div>
                    <?php } ?>
                
            </div>
            <div id="tab2" class="tab-pane fade">
                <h3>Awarded Projects</h3>
                <!--
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
                    </tr>-->
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <div class="project-box">
                            <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/controlpanel/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-bid">View</a> 
                            <button type="button" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['i']->value['approved'];?>
</button>
                            </p>
                            <p>Looking for <?php echo $_smarty_tpl->tpl_vars['subservices']->value[$_smarty_tpl->tpl_vars['i']->value['subservice_id']];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['i']->value['area'];?>
 in <?php echo $_smarty_tpl->tpl_vars['areas']->value[$_smarty_tpl->tpl_vars['i']->value['area_id']];?>
</p>
                            
                            <p>By <?php echo $_smarty_tpl->tpl_vars['i']->value['requestby'];?>
</p>

                            <p>Dated <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</p>
                        </div>
                    <?php } ?>
                
            </div>
            <div id="tab3" class="tab-pane fade">
                <h3>Completed Projects</h3>
                <!--
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
                    </tr>-->
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <div class="project-box">
                            <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/controlpanel/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-bid">View</a> 
                            <button type="button" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['i']->value['approved'];?>
</button>
                            </p>
                            <p>Looking for <?php echo $_smarty_tpl->tpl_vars['subservices']->value[$_smarty_tpl->tpl_vars['i']->value['subservice_id']];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['i']->value['area'];?>
 in <?php echo $_smarty_tpl->tpl_vars['areas']->value[$_smarty_tpl->tpl_vars['i']->value['area_id']];?>
</p>
                            
                            <p>By <?php echo $_smarty_tpl->tpl_vars['i']->value['requestby'];?>
</p>

                            <p>Dated <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</p>
                        </div>
                    <?php } ?>
                
            </div>
        </div>
    </div>

</div>


<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
