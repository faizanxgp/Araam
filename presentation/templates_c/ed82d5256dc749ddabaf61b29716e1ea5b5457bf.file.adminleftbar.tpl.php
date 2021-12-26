<?php /* Smarty version Smarty-3.1.15, created on 2016-03-30 11:34:57
         compiled from "D:\xampp\htdocs\araam\presentation\templates\adminleftbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2026656e10a39de6b04-42991869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed82d5256dc749ddabaf61b29716e1ea5b5457bf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\adminleftbar.tpl',
      1 => 1459318185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2026656e10a39de6b04-42991869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10a39e02096_78426868',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10a39e02096_78426868')) {function content_56e10a39e02096_78426868($_smarty_tpl) {?><h3>Admin Options</h3>
<table class="admin-options">
    <?php if (isset($_SESSION['adminname'])) {?>
        <tr><td><a class="nav-link" href="index.php?admin/main">Home</a></td></tr>
        <tr><td><a class="nav-link" href="index.php?admin/requests">User Requests</a></td></tr>
        <tr><td><a class="nav-link" href="index.php?admin/contractor">Contractors</a></td></tr>
        <tr><td><a class="nav-link" href="index.php?admin/contractor&action=points">Credits</a></td></tr>
        <tr><td><a class="nav-link" href="index.php?admin/customer">Customer</a></td></tr>
        <tr><td><a class="nav-link" href="index.php?admin/pages">Pages</a></td></tr>

        <tr><td><a class="nav-link" href="index.php?admin/area">Area</a></td></tr>
        
        <tr><td><a class="nav-link" href="index.php?admin/service">Services</a></td></tr>
        <tr><td><a class="nav-link" href="index.php?admin/subservice">Sub Services</a></td></tr>
        <tr><td><a class="nav-link" href="index.php?admin/questions">Questions</a></td></tr>

        <tr><td><a href="index.php?admin/admin&action=logout">Logout</a></td></tr>

<?php } else { ?>
    <tr><td><a href="index.php?admin/admin&action=login">Login</a></td></tr>
    <tr><td>Please login to proceed.</td></tr>
<?php }?>
</table><?php }} ?>
