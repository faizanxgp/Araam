<h3>Admin Options</h3>
<table class="admin-options">
    {if isset($smarty.session.adminname)}
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

{else}
    <tr><td><a href="index.php?admin/admin&action=login">Login</a></td></tr>
    <tr><td>Please login to proceed.</td></tr>
{/if}
</table>