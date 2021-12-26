<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 10:28:58
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractor\controlpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2644656e63441d578a4-63432018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59639f2961ffeab13d53319e267487f02c767f9d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractor\\controlpanel.tpl',
      1 => 1459314481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2644656e63441d578a4-63432018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e63442170b77_80690310',
  'variables' => 
  array (
    'message' => 0,
    'd' => 0,
    'subservices' => 0,
    'areas' => 0,
    'questions' => 0,
    'myId' => 0,
    'i' => 0,
    'q' => 0,
    'gr_reqstatus' => 0,
    'amount' => 0,
    'gr_quotetype' => 0,
    'btype' => 0,
    'cmessage' => 0,
    'points' => 0,
    'messagedata' => 0,
    'sr_id' => 0,
    'contractor_id' => 0,
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e63442170b77_80690310')) {function content_56e63442170b77_80690310($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_radios.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("contractorheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<!-- form begin -->

<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="message alert alert-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<div class="row">
    <div class="col-md-6">
        <h2>Project</h2>


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

            <tr><td class="td_title">Name</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['requestby'];?>
</td></tr>
            <tr><td class="td_title">Email</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
</td></tr>
            <tr><td class="td_title">Phone</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['mobile'];?>
</td></tr>

            <tr><td class="td_title">Images</td><td>
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
    <div class="col-md-6">


        <form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/controlpanel/id-<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/ac-bid" enctype="multipart/form-data">
            <h2>Send Quote </h2>
            <table class="table">
                <input type="hidden" name="servicerequest_id" id="servicerequest_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">

                <tr><td><label>Amount (PKR)</label><br /><input type="text" name="amount" id="amount" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
"></td></tr>

                <tr><td><label>Pricing type</label><br /><div class="radio"><?php echo smarty_function_html_radios(array('name'=>'btype','options'=>$_smarty_tpl->tpl_vars['gr_quotetype']->value,'selected'=>$_smarty_tpl->tpl_vars['btype']->value,'separator'=>' '),$_smarty_tpl);?>
</div></td></tr>

                <tr><td><label>Quote Details </label><textarea name="message" id="message" ><?php echo $_smarty_tpl->tpl_vars['cmessage']->value;?>
</textarea>
                        <p class="tips">Please give more details on what is included or not included, whether you need to make a site visit, is there a charge for site, etc. This is to make the customer feed condident you will do a good job for them. </p>

                    </td></tr>

                <tr><td><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>

                <tr><td>This bid would take <?php echo $_smarty_tpl->tpl_vars['points']->value;?>
 credits.</td></tr>
            </table>

        </form>

        <h3>Messages</h3>
        <?php if (count($_smarty_tpl->tpl_vars['messagedata']->value)>0) {?>
            <!--
            <table class="table">
                <tr>

                    <th>Message</th>
                    <th>Message by</th>
                    <th>Date/Time</th>
                </tr>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                <tr>


                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['messageby'];?>
</td>

                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
</td>
                </tr>
            <?php } ?>
        </table>-->
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value['messageby']=="user") {?>
                    <div class="user-message">
                        <?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
 <br />at <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
 -- by user
                    </div>
                <?php } else { ?>
                    <div class="provider-message">
                        <?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
 <br />at <?php echo $_smarty_tpl->tpl_vars['i']->value['datecreated'];?>
 -- by contractor
                    </div>
                <?php }?>
            <?php } ?>


            <table>
                <tr>
                    <td>
                        <form name="form01" method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/controlpanel/id-<?php echo $_smarty_tpl->tpl_vars['sr_id']->value;?>
/ac-bid">
                            <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['contractor_id']->value;?>
">
                            <input type="hidden" name="u_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">
                            <input type="hidden" name="servicerequest_id" value="<?php echo $_smarty_tpl->tpl_vars['sr_id']->value;?>
">
                            <label>Message:</label>
                            <textarea name="message"></textarea>
                            <input type="submit" class="btn" name="submit02" />
                        </form>


            </table>

        <?php }?>

    </div>
</div>

<!-- form end -->
<?php echo $_smarty_tpl->getSubTemplate ("contractorfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
