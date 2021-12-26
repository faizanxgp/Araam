<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 09:38:48
         compiled from "D:\xampp\htdocs\araam\presentation\templates\viewprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:880256f615bad5f875-97535149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a2b80cff654149459ab51f9575a58a89999ec1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\viewprofile.tpl',
      1 => 1459312724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '880256f615bad5f875-97535149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f615bb2b5214_49516141',
  'variables' => 
  array (
    'message' => 0,
    'profile' => 0,
    'profileservices' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f615bb2b5214_49516141')) {function content_56f615bb2b5214_49516141($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <div class="col-md-12">

        <h2>Contractor's Business Profile</h2>

        <div class="row">
            <div class="col-md-3">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['business_logo']!='') {?>
                    <img class="contractorlogo" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['business_logo'];?>
" alt="logo" />
                    <?php }?>
            </div>
            <div class="col-md-9">

                <p><strong>Business Name:</strong> <br /><?php echo $_smarty_tpl->tpl_vars['profile']->value['business_name'];?>
 <br /><br />
                    <strong>Business Description:</strong> <br /><?php echo $_smarty_tpl->tpl_vars['profile']->value['business_description'];?>
</p>


                <h2>Services Profile</h2> <!-- tabs left -->
                <?php if (count($_smarty_tpl->tpl_vars['profileservices']->value)==0) {?>
                    Sorry, there are no services to show
                <?php } else { ?>


                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profileservices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <div class="service-box">
                            <h3><?php echo $_smarty_tpl->tpl_vars['i']->value['service_title'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['i']->value['service_description'];?>
</p>

                            <?php if ($_smarty_tpl->tpl_vars['i']->value['image1']!='') {?>
                                <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image1'];?>
">
                                    <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image1'];?>
" />
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['image2']!='') {?>
                                <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image2'];?>
">
                                    <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image2'];?>
" />
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['image3']!='') {?>
                                <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image3'];?>
">
                                    <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image3'];?>
" />
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['image4']!='') {?>
                                <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image4'];?>
">
                                    <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image4'];?>
" />
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['image5']!='') {?>
                                <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image5'];?>
">
                                    <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['image5'];?>
" />
                                </a>
                            <?php }?>

                        </div>

                    <?php } ?>



                <?php }?>
            </div>
        </div>
    </div>
</div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
