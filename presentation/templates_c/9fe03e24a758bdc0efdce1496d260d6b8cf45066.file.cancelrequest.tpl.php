<?php /* Smarty version Smarty-3.1.15, created on 2016-03-29 10:29:35
         compiled from "D:\xampp\htdocs\araam\presentation\templates\cancelrequest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2317956f228da1375e8-11385757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fe03e24a758bdc0efdce1496d260d6b8cf45066' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\cancelrequest.tpl',
      1 => 1459229369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2317956f228da1375e8-11385757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f228da421817_08524440',
  'variables' => 
  array (
    'message' => 0,
    'id' => 0,
    'gr_cancelreason' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f228da421817_08524440')) {function content_56f228da421817_08524440($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\xampp\\htdocs\\araam\\includes\\Smarty\\libs\\plugins\\function.html_radios.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?> 

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>

    </div>
    <div class="col-md-9">
        

                
                <table class="table">
                    <tr>
                        <td>
                           <h2>Have you hired a professional on Araam for your project?</h2>
                           <p></p>
                           <p>No, because...</p>
                           
                           <form name="form01" method="post" action="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/dashboard/id-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/ac-cancel">
                               <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                               <div class="inner-radio">
                               <?php echo smarty_function_html_radios(array('name'=>'cancelreason','options'=>$_smarty_tpl->tpl_vars['gr_cancelreason']->value,'selected'=>'','separator'=>' ','class'=>"radio"),$_smarty_tpl);?>

                               </div> 
                               <input class="btn btn-primary" type="submit" value="Submit" name="submit01">
                               
                               
                               
                           </form>
                        </td>
                    </tr>
                </table>
            
            
        
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
