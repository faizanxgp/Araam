{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}


{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <div class="col-md-3">
        {include file="adminleftbar.tpl" title="foo"}

    </div>
    <div class="col-md-9">
        <h3>Welcome to Admin Panel</h3>
        
        
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">New Requests</a></li>
            <li><a data-toggle="tab" href="#tab2">New Professionals</a></li>
            
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
        
        <h3>New Requests</h3>
        <table class="table">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Status</th>
                <th>Date/Time</th>
            </tr>
            {foreach from=$data1 key=myId item=i}
                    <tr>
                        <td><a class="btn" href="index.php?admin/requests&id={$i.id}&action=edit">Edit</a> 
                            <a class="btn" href="index.php?admin/requests&id={$i.id}&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Del</a> 
                        </td>
                        
                        <td>{$i.requestby}</td>
                        <td>{$i.email}</td>
                        <td>{$i.mobile}</td>
                        <td>{$i.approved}</td>
                        <td>{$i.datecreated}</td>
                    </tr>
            {/foreach}
        </table>
        
        </div>
            <div id="tab2" class="tab-pane fade">
        
        <h3>New Professionals</h3>
        <table class="table">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Status</th>
                <th>Date/Time</th>
            </tr>
            {foreach from=$data2 key=myId item=i}
                    <tr>
                        <td><a class="btn" href="index.php?admin/contractor&id={$i.id}&action=edit">Edit</a> 
                            <a class="btn" href="index.php?admin/contractor&id={$i.id}&action=delete" onclick="return confirm('Are you sure you want to delete this item?');">Del</a> {if $i.status <> 'active'}<a href="index.php?admin/contractor&id={$i.id}&action=activate">Activate</a>{else}{$i.status}{/if}
                        </td>
                        
                        <td>{$i.contact_person}</td>
                        <td>{$i.email}</td>
                        <td>{$i.phone}</td>
                        <td>{$i.mobile}</td>
                        <td>{$i.city}</td>
                        <td>{$i.status}</td>
                        <td>{$i.datecreated}</td>
                    </tr>
            {/foreach}
        </table>
        
            </div></div>
    </div>
</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 