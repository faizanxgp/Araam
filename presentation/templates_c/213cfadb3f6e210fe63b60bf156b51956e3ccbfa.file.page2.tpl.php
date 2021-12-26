<?php /* Smarty version Smarty-3.1.15, created on 2016-03-29 11:54:07
         compiled from "D:\xampp\htdocs\araam\presentation\templates\page2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1676056e102866ac0e5-61291066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '213cfadb3f6e210fe63b60bf156b51956e3ccbfa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\page2.tpl',
      1 => 1459233023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1676056e102866ac0e5-61291066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e1028693c582_60420147',
  'variables' => 
  array (
    'message' => 0,
    'd' => 0,
    'questions' => 0,
    'i' => 0,
    'choices' => 0,
    'i2' => 0,
    'gr_contactpref' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1028693c582_60420147')) {function content_56e1028693c582_60420147($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_radios.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?> 



<div class="row main-page2">
    <div class="col-md-12">
        <h2><?php echo $_smarty_tpl->tpl_vars['d']->value['services'];?>
</h2>
    </div>
    <div class="col-md-6">
        <div class="instructions">
            <h3>Steps</h3>

            <p><strong>Step 1:</strong> Answer the following questions.</p>
            <p><strong>Step 2:</strong> You'll get up to 5 quotes to compare together with reviews & profiles.</p>
            <p><strong>Step 3:</strong> Book your favourite service provider.</p>


        </div>

    </div>
    <div class="col-md-6">
        <h3>Please provide some details:</h3>
        <form method="post" enctype="multipart/form-data" data-parsley-validate="" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/main/ac-page3" >
            <input type="hidden" name="services" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['services'];?>
" />
            <input type="hidden" name="subservice_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['subservice_id'];?>
" />
            <input type="hidden" name="areas" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['areas'];?>
" />
            <input type="hidden" name="area_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['area_id'];?>
" />

            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                <div class="question">
                    <label><?php echo $_smarty_tpl->tpl_vars['i']->value['question_text'];?>
</label>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value['question_type']=="textbox") {?>
                        <input type="text" name="question_<?php echo $_smarty_tpl->tpl_vars['i']->value['question_number'];?>
" />
                    <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['question_type']=="textarea") {?>
                        <textarea name="question_<?php echo $_smarty_tpl->tpl_vars['i']->value['question_number'];?>
"></textarea>
                    <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['question_type']=="radio") {?>
                        <?php $_smarty_tpl->tpl_vars['choices'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['i']->value['question_choices']), null, 0);?>
                        <div class="inner-radio">
                            <?php  $_smarty_tpl->tpl_vars['i2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['choices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i2']->key => $_smarty_tpl->tpl_vars['i2']->value) {
$_smarty_tpl->tpl_vars['i2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['i2']->key;
?>
                                <label><input type="radio" name="question_<?php echo $_smarty_tpl->tpl_vars['i']->value['question_number'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['i2']->value;?>
" required=""><?php echo $_smarty_tpl->tpl_vars['i2']->value;?>
</label>
                            <?php } ?>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['question_type']=="checkbox") {?>
                        <?php $_smarty_tpl->tpl_vars['choices'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['i']->value['question_choices']), null, 0);?>
                        <div class="inner-checkbox">
                            <?php  $_smarty_tpl->tpl_vars['i2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['choices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i2']->key => $_smarty_tpl->tpl_vars['i2']->value) {
$_smarty_tpl->tpl_vars['i2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['i2']->key;
?>
                                <label><input type="checkbox" name="question_<?php echo $_smarty_tpl->tpl_vars['i']->value['question_number'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['i2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i2']->value;?>
</label>
                                <?php } ?>
                        </div>
                    <?php } else { ?>
                    <?php }?>
                </div>
            <?php } ?>
            <div class="question">
                <label>Please describe the job in detail (optional)</label>
                <p class="tips">This helps greatly in getting a more accurate quote.</p>
                <textarea name="service_description"></textarea>
            </div>

            <div class="question"><label>Your budget</label>
                <input type="text" name="budget" />
                <p class="tips">Your estimated budget for this work</p></div>
                
                
            <div class="question"><label>Your contacting preferences</label>
                <div class="inner-radio">
                    <?php echo smarty_function_html_radios(array('name'=>'contacting_preference','options'=>$_smarty_tpl->tpl_vars['gr_contactpref']->value,'selected'=>' ','separator'=>' '),$_smarty_tpl);?>
</div>
                <p class="tips">Your travel preference for this work</p></div>


            <div class="question">
                <label>When do you need it?</label>
                <p class="tips">This helps greatly in getting a more accurate quote.</p>
                <input type="text" name="expected_date" id="datepicker" /></div>
            <!--
                        <label>Where do you need it?</label>
                        <p>This helps greatly in getting a more accurate quote.</p>
                        <input type="text" name="whereneed" /> -->
            
            <div class="question"><label>Where do you need it?</label>
                <input type="text" name="area" />
                <p class="tips">Location for this work</p></div>

            <div class="question">
                <label>Attachments</label>
                <p class="tips">More pictures, better quotes.</p>
                <input name="attach[]" id='attach' type="file" multiple="multiple" />
                <p class="tips">Upload up to 5 files (.jpg .png .pdf .docx .doc .txt) of 2MB each</p>
                <!--<input type="file" name="attach1" />
                <input type="file" name="attach2" />
                <input type="file" name="attach3" />
                <input type="file" name="attach4" />
                <input type="file" name="attach5" />-->
            </div>

            <p><strong>Your contact information</strong></p>
            <div class="question">
                <label>Name: <span class="required">*</span></label>
                <input type="text" name="requestby" required="" />
                <p class="tips">Your complete name</p>
            </div>
            <div class="question"><label>Email address: <span class="required">*</span></label>
                <input type="email" name="email" required="" />
                <p class="tips">Your valid email address</p>
            </div>
            <div class="question"><label>Phone number</label>
                <input type="text" name="mobile" data-parsley-type="digits" />
                <p class="tips">Your privacy is important to us. We do not disclose your email and telephone number to any service provider or 3rd parties unless you have booked them through us.</p></div>

            <div class="question"><label>Promotion code (if any)</label>
                <input type="text" name="promocode" />
                <p class="tips"></p>
            </div>

            <!--p><strong>Special notice: </strong></p-->

            <p><input type="submit" class="btn btn-primary" value="Submit Request" /></p>

            <p>By sending your request, you agree to the <a href="#">Terms of Use</a>.</p>

        </form>

    </div>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
