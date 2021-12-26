<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 12:54:01
         compiled from "D:\xampp\htdocs\araam\presentation\templates\completerequest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1119456f632a4bce9c7-21294563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5422c56b6858573c04c13be8377d3be9d60f3ea0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\completerequest.tpl',
      1 => 1459324434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1119456f632a4bce9c7-21294563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f632a4d0ef09_88231633',
  'variables' => 
  array (
    'message' => 0,
    'sr_id' => 0,
    'gr_review' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f632a4d0ef09_88231633')) {function content_56f632a4d0ef09_88231633($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_options.php';
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
        <h2>Provide Feedback about your experience</h2> <!-- tabs left -->

        <div class="tabbable tabs-left">
            <div class="row">
                <div class="col-md-3">  

                </div>
                <div class="col-md-9">
                    <div class="box-wrapper">
                        <form name="form01" method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['sr_id']->value;?>
/ac-complete">
                            <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['sr_id']->value;?>
">
                            <label>Rating</label>
                            <select name="rating" id="rating" >
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gr_review']->value),$_smarty_tpl);?>

                            </select>
                            <br />
                            <label>Your Review:</label>
                            <textarea name="review"></textarea>
                            <input type="submit" class="btn" name="submit01" value="Send Feedback" />
                        </form>
                    </div>




                </div>




            </div>
        </div>




    </div>
</div>














<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
