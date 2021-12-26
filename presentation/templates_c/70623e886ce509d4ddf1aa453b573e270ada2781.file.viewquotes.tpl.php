<?php /* Smarty version Smarty-3.1.15, created on 2016-04-02 10:06:02
         compiled from "D:\xampp\htdocs\araam\presentation\templates\viewquotes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1647156e152363e5a37-82438444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70623e886ce509d4ddf1aa453b573e270ada2781' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\viewquotes.tpl',
      1 => 1459571929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647156e152363e5a37-82438444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e1523657be96_87435165',
  'variables' => 
  array (
    'message' => 0,
    'data1' => 0,
    'myId' => 0,
    'i' => 0,
    'data2' => 0,
    'i2' => 0,
    'sr_id' => 0,
    'd' => 0,
    'subservices' => 0,
    'areas' => 0,
    'questions' => 0,
    'q' => 0,
    'travel' => 0,
    'gr_reqstatus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1523657be96_87435165')) {function content_56e1523657be96_87435165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_radios.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?> 

<div class="row">
    <div class="col-md-12">
        <h2>Quotes Received</h2> <!-- tabs left -->
        <?php if (count($_smarty_tpl->tpl_vars['data1']->value)==0) {?>
            Sorry, there are no quotes to show
        <?php } else { ?>
            <div class="tabbable tabs-left">
                <div class="row">
                    <div class="col-md-3">  
                        <ul class="nav nav-tabs">

                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                <li <?php if ($_smarty_tpl->tpl_vars['myId']->value==0) {?>class="active"<?php }?>><a href="#tab<?php echo $_smarty_tpl->tpl_vars['myId']->value;?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['i']->value['contact_person'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['i']->value['company_name'];?>
</a></li>
                                    <?php } ?>


                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['myId']->value==0) {?>active<?php }?>" id="tab<?php echo $_smarty_tpl->tpl_vars['myId']->value;?>
">   
                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['provider_id'];?>
/ac-profile" target="_blank">View Profile</a> <?php if ($_smarty_tpl->tpl_vars['i']->value['approved']=="approved") {?><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['bidid'];?>
/ac-hire">Hire</a><?php }?><?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="selected") {?><a class="btn btn-primary" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
/ac-complete">Complete</a><?php }?>
                                    <table>
                                        <tr>
                                            <td colspan="2">
<h3>Quote Details</h3>
                                            </td>
                                        </tr>
                                        <tr><td><label>Amount (PKR)</label></td><td><?php echo $_smarty_tpl->tpl_vars['i']->value['amount'];?>
</td></tr>
                                        <tr><td><label>Quote Type</label></td><td><?php echo $_smarty_tpl->tpl_vars['i']->value['btype'];?>
</td></tr>

                                        <tr><td><label>Details</label></td><td><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</td></tr>

                                        </tr>

                                    </table>
                                    
                                    <?php if (count($_smarty_tpl->tpl_vars['data2']->value)==0) {?>
                                        <h3>Sorry, there are no messages to show</h3>
                                    <?php } else { ?>
                                        <h3>Messages</h3>
                                        <?php  $_smarty_tpl->tpl_vars['i2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i2']->_loop = false;
 $_smarty_tpl->tpl_vars['myId2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i2']->key => $_smarty_tpl->tpl_vars['i2']->value) {
$_smarty_tpl->tpl_vars['i2']->_loop = true;
 $_smarty_tpl->tpl_vars['myId2']->value = $_smarty_tpl->tpl_vars['i2']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->value['provider_id']==$_smarty_tpl->tpl_vars['i2']->value['provider_id']) {?>

                                                <?php if ($_smarty_tpl->tpl_vars['i2']->value['messageby']=="user") {?>
                                                    <div class="user-message">
                                                        <?php echo $_smarty_tpl->tpl_vars['i2']->value['message'];?>
 <br />at <?php echo $_smarty_tpl->tpl_vars['i2']->value['datecreated'];?>
 -- by user
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="provider-message">
                                                        <?php echo $_smarty_tpl->tpl_vars['i2']->value['message'];?>
 <br />at <?php echo $_smarty_tpl->tpl_vars['i2']->value['datecreated'];?>
 -- by contractor
                                                    </div>
                                                <?php }?>
                                            <?php }?>


                                        <?php } ?>
                                    <?php }?>
                                    <table>
                                        <tr>
                                            <td>
                                                <form name="form01" method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['sr_id']->value;?>
/ac-quotes">
                                                    <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['sr_id']->value;?>
">
                                                    <input type="hidden" name="r_id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['provider_id'];?>
">
                                                    <input type="hidden" name="q_id" value="0">
                                                    <label>New Message:</label>
                                                    <textarea name="message"></textarea>
                                                    <input type="submit" class="btn" name="submit02" value="Send Message to Professional" />
                                                </form>


                                    </table>

                                </div>
                            <?php } ?>



                        </div>
                    </div>

                </div><!-- /tabs -->


            </div></div></div>
        <?php }?>


<div class="row">
    <div class="col-md-12">

        <h2>Project Details</h2>

        <table class="table">


            <tr><td class="td_title">Service</td><td><?php echo $_smarty_tpl->tpl_vars['subservices']->value[$_smarty_tpl->tpl_vars['d']->value['subservice_id']];?>
</td></tr>
            <tr><td class="td_title">Area</td><td><?php echo $_smarty_tpl->tpl_vars['areas']->value[$_smarty_tpl->tpl_vars['d']->value['area_id']];?>
</td></tr>

            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                <?php $_smarty_tpl->tpl_vars['question_num'] = new Smarty_variable($_smarty_tpl->tpl_vars['myId']->value, null, 0);?>
                <tr><td class="td_title"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['q']->value[$_smarty_tpl->tpl_vars['myId']->value];?>
</td></tr>
                    <?php } ?>
            <!--
            <tr><td class="td_title">Question 1</td><td><?php echo $_smarty_tpl->tpl_vars['q']->value['question_1'];?>
</td></tr>
            <tr><td class="td_title">Question 2</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['question_2'];?>
</td></tr>
            <tr><td class="td_title">Question 3</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['question_3'];?>
</td></tr>
            <tr><td class="td_title">Question 4</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['question_4'];?>
</td></tr>
            <tr><td class="td_title">Question 5</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['question_5'];?>
</td></tr>
            <tr><td class="td_title">Question 6</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['question_6'];?>
</td></tr>
            -->
            <tr><td class="td_title">Expected Date</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['expected_date'];?>
</td></tr>
            <tr><td class="td_title">Estimated Date</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['estimated_date'];?>
</td></tr>
            <tr><td class="td_title">Project Description</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['service_description'];?>
</td></tr>
            <tr><td class="td_title">Budget</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['budget'];?>
</td></tr>
            
            <tr><td class="td_title">Travel</td><td><?php echo $_smarty_tpl->tpl_vars['travel']->value[$_smarty_tpl->tpl_vars['d']->value['contacting_preference']];?>
</td></tr>
            

            <tr><td class="td_title">Name</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['requestby'];?>
</td></tr>
            <tr><td class="td_title">Email</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
</td></tr>
            <tr><td class="td_title">Phone</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['mobile'];?>
</td></tr>
            <tr><td class="td_title">Image</td><td>
                <?php if ($_smarty_tpl->tpl_vars['d']->value['attach1']!='') {?>
                    <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach1'];?>
">
                        <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach1'];?>
" />
                    </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['d']->value['attach2']!='') {?>
                    <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach2'];?>
">
                        <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach2'];?>
" />
                    </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['d']->value['attach3']!='') {?>
                    <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach3'];?>
">
                        <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach3'];?>
" />
                    </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['d']->value['attach4']!='') {?>
                    <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach4'];?>
">
                        <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach4'];?>
" />
                    </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['d']->value['attach5']!='') {?>
                    <a class="fancybox" rel="group" href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach5'];?>
">
                        <img class="thumb" src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['attach5'];?>
" />
                    </a>
                <?php }?>
            </td></tr>
            <!--
            <tr><td class="td_title">Promo code</td><td><input type="text" name="promocode" id="promocode" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['promocode'];?>
"></td></tr>
            <tr><td class="td_title">Status</td><td><?php echo smarty_function_html_radios(array('name'=>'approved','options'=>$_smarty_tpl->tpl_vars['gr_reqstatus']->value,'selected'=>$_smarty_tpl->tpl_vars['d']->value['approved'],'separator'=>' '),$_smarty_tpl);?>
</td></tr>
            <tr><td class="td_title">Date created</td><td><input type="text" name="datecreated" id="datecreated" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['datecreated'];?>
" readonly="" ></td></tr>
            
            -->
        </table>

    </div>
</div>










<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
