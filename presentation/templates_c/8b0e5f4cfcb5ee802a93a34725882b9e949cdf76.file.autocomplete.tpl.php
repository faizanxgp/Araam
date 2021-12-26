<?php /* Smarty version Smarty-3.1.15, created on 2016-03-21 12:33:07
         compiled from "D:\xampp\htdocs\araam\presentation\templates\autocomplete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064356e0fa08a488a2-88630479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b0e5f4cfcb5ee802a93a34725882b9e949cdf76' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\autocomplete.tpl',
      1 => 1458545556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064356e0fa08a488a2-88630479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fa08b17957_25409905',
  'variables' => 
  array (
    'servicedata' => 0,
    's' => 0,
    'areadata' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fa08b17957_25409905')) {function content_56e0fa08b17957_25409905($_smarty_tpl) {?><script type="text/javascript">
    $(function () {
        var services = [
    <?php if (isset($_smarty_tpl->tpl_vars['servicedata']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
        { value: "<?php echo $_smarty_tpl->tpl_vars['s']->value['subservice'];?>
 - <?php echo $_smarty_tpl->tpl_vars['s']->value['service'];?>
", data: "<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" },
        <?php } ?>
    <?php }?>
        ];
        var areas = [
    <?php if (isset($_smarty_tpl->tpl_vars['areadata']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areadata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
        { value: "<?php echo $_smarty_tpl->tpl_vars['a']->value['area'];?>
", data: "<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" },
        <?php } ?>
    <?php }?>
        ];
// setup autocomplete function pulling from currencies[] array
                $('#areas').autocomplete({
                    lookup: areas,
                    onSelect: function (suggestiona) {
                        var thehtml = '<input type="hidden" name="area_id" value="' + suggestiona.data + '" />';
                        $('#areaidfield').html(thehtml);
                    }
                });

// setup autocomplete function pulling from currencies[] array
                $('#services').autocomplete({
                    lookup: services,
                    onSelect: function (suggestionb) {
                        var thehtml = '<input type="hidden" name="subservice_id" value="' + suggestionb.data + '" />';
                        $('#serviceidfield').html(thehtml);
                    }
                });

            });
</script><?php }} ?>
