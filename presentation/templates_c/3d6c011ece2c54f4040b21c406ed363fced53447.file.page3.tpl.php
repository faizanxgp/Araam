<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 12:48:30
         compiled from "D:\xampp\htdocs\araam\presentation\templates\page3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3263656f0f5a9528a11-66396219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d6c011ece2c54f4040b21c406ed363fced53447' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\page3.tpl',
      1 => 1459323947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3263656f0f5a9528a11-66396219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f0f5a963a154_96662119',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0f5a963a154_96662119')) {function content_56f0f5a963a154_96662119($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?> 



<div class="row main-page2">
    <div class="col-md-12">
        <div class="big-box">
            <h1>Great! We're on it.</h1>
        </div>

        <h2 class="center">We are reaching out professionals in your area who are qulaified to do this job</h2>
        <p>&nbsp;</p>
        <h3>What’s next?</h3>
        <ul>
            <li>Qualified professionals will respond to your request with a custom quote usually within 24 hours.</li>
            <li>You will get 5 quotes from different professionals.</li>
            <li>You can talk to the professionals on our in built message system for more info.</li>
            <li>Compare and book who is best for you!</li>
        </ul>

        <h3>Quote will include</h3>
        <ul>
        <li>Estimate</li>
        <li>Message</li>
        <li>Reviews</li>
        <li>Profile</li>
        <li>Contact</li>
        </ul>
        
        <p><a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard" class="btn btn-primary">Visit your Dashboard</a></p>





    </div>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
