<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 10:05:03
         compiled from "D:\xampp\htdocs\araam\presentation\templates\admin\question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:735756e645afc5a726-26316654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0394f3c39c2d66bd356e6d3b36111bb7a546072' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\admin\\question.tpl',
      1 => 1457931898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '735756e645afc5a726-26316654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e645afea8537_78404423',
  'variables' => 
  array (
    'message' => 0,
    'data' => 0,
    'i' => 0,
    'pagination' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e645afea8537_78404423')) {function content_56e645afea8537_78404423($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("adminheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>




<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="row">
        <div class="col-md-12 message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<div class="row">
    <div class="col-md-3">
        <?php echo $_smarty_tpl->getSubTemplate ("adminleftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"foo"), 0);?>


    </div>
    <div class="col-md-9">
       
            <h2>Service Questions</h2>
            <a class="btn button" href="index.php?admin/questions&action=add">Add New</a>
            
            
            <table class="table">
                <tr>
                    <th></th>
                    <th>Seq</th>
                    <th>Service </th>
                    <th>Question #</th>
                    <th>Question</th>
                    <th>Type</th>
                    <th>Choices</th>
                    <th>Active</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <tr>
                        <td><a class="btn" href="index.php?admin/questions&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=edit">Edit</a> 
                            <a class="btn" href="index.php?admin/questions&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&action=delete">Del</a>
                            
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['subservice'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['question_number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['question_text'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['question_type'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['question_choices'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['i']->value['question_others']=="yes") {?>Yes<?php } else { ?>No<?php }?></td>
                        
                    </tr>
                <?php } ?>
            </table>

            <div class="pagination col-md-6">
                Page: 
                
                
                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']>1) {?>
                    <?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page']-1, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page'], null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']<$_smarty_tpl->tpl_vars['pagination']->value['pages']) {?>
                    <?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page']+1, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['page'], null, 0);?>
                <?php }?>
                <a href="index.php?admin/questions&page=1">First</a>
                <a href="index.php?admin/questions&page=<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
">Prev</a>
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value['page'];?>

                <a href="index.php?admin/questions&page=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">Next</a>
                <a href="index.php?admin/questions&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['pages'];?>
">Last</a>
            </div>
        </div>
    </div>






<!-- end contents -->
<?php echo $_smarty_tpl->getSubTemplate ("adminfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
