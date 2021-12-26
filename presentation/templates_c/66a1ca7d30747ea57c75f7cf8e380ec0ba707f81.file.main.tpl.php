<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 10:15:01
         compiled from "D:\xampp\htdocs\araam\presentation\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3042356e0fa0a9e7539-21434836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a1ca7d30747ea57c75f7cf8e380ec0ba707f81' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\main.tpl',
      1 => 1459314075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3042356e0fa0a9e7539-21434836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fa0aabe2e9_99538393',
  'variables' => 
  array (
    'message' => 0,
    'message2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fa0aabe2e9_99538393')) {function content_56e0fa0aabe2e9_99538393($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo",'showHeader'=>"Yes"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['message2']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message2']->value;?>
</div>
    </div>
<?php }?>
</div></div>

<div class="container main-page">
<div class="row">
    <div class="col-md-12 center">
        <h2>The faster and easier way to hire services in Pakistan</h2>
        <div class="main-box">
        <form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/main/ac-page2">
            <!--
            <input type="text" name="category" />
            <input type="text" name="area" />
            -->
            <div class="service">
            <label>What services do you need?</label>
            <input type="text" name="services" class="biginput" id="services" required="" value="" />
            <div id='areaidfield'></div>
            <p class="tips">Plumbing, Electrical, Interior Design</p>    
            
            
            </div>
            <div class="area">
            <label>Where do you need it?</label>
            <input type="text" name="areas" class="biginput" id="areas" required="" value="" />
            <div id='serviceidfield'></div>
            <p class="tips">Available in Lahore, Islamabad and Rawalpindi</p></div>
            <div class="submit">
                <label>&nbsp;</label>
            <input type="submit" value="Get free quotes" class="btn btn-primary" />
            </div>
        </form>
        </div>
        
        <p>Get up to 5 custom quotes to compare & hire the best. </p>
        <p>Quick. Easy. Free.</p>
        <p>Cras ornare vulputate velit a luctus. Nam molestie gravida dolor. Maecenas consectetur est bibendum, varius justo et, aliquet justo. Aliquam eget felis eget risus rhoncus pellentesque in at dui. Nunc rhoncus semper nibh vel pharetra. Duis nibh quam, bibendum nec consequat eget, egestas eget urna. Vivamus sit amet convallis dui. Sed a dui vel erat dapibus dictum ac eget elit. Curabitur mollis turpis vel lorem pretium consequat. Nunc elementum augue quis tempor sodales. Aenean eleifend risus nec tellus suscipit dictum. Nunc aliquet nec orci sit amet ultrices. Aliquam ultrices dolor at risus tristique, vitae feugiat justo hendrerit.</p>

    </div>
    

</div>
</div>
<div class="container workers-page">

<div class="row ">
    <div class="col-md-12 center">
        <h2>Apply to become a Service Provider now</h2>
        <p>Are you a service provider? <br />
        Potential clients are looking for you right now. <br />
        Signup for FREE!</p>
        <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-signup">Signup as Service Provider</a></p>
        
        
    </div>
</div>
</div><div>
<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
