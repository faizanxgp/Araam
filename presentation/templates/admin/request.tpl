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
        
            <h2>User Requests</h2>
            <a class="btn button" href="index.php?admin/requests&action=add">Add New</a>
            <form method="post" action="index.php?admin/requests&action=search" id="searchform"><input type="text" name="searchtext" value="" max="255" /> <input class="btn btn-search" type="submit" name="submitquery" value="Search" /></form>
            
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>ID</th>
                    <th>Service</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Date</th>
                    
                </tr>
                {foreach from=$data key=myId item=i}
                    <tr>
                        <td><a class="btn" href="index.php?admin/requests&id={$i.id}&action=edit">Edit</a> <a class="btn" href="index.php?admin/requests&id={$i.id}&action=delete">Del</a> <a class="btn" href="index.php?admin/requests&id={$i.id}&action=bids">Quotes</a> {if $i.approved eq "submitted"}<a class="btn" href="index.php?admin/requests&id={$i.id}&action=approve">Approve</a>{else}Approved{/if}
                        </td>
                        <td>{$i.id}</td>
                        <td>{$i.subservice}</td>
                        <td>{$i.area}</td>
                        <td>{$i.city}</td>
                        <td>{$i.requestby}</td>
                        <td>{$i.email}</td>
                        <td>{$i.mobile}</td>
                        <td>{$i.approved}</td>
                        <td>{$i.datecreated}</td>
                    </tr>
                {/foreach}
            </table>

            <div class="pagination col-md-6">
                Page: 
                {*for $foo=1 to $pagination.pages}
                {if $pagination.page == $foo}
                {$foo} 
                {else}
                <a href="index.php?admin/requests&page={$foo}">{$foo}</a> 
                {/if}
                {/for*}

                {if $pagination.page > 1}
                    {assign var=prev value=$pagination.page-1}
                {else}
                    {assign var=prev value=$pagination.page}
                {/if}
                {if $pagination.page < $pagination.pages}
                    {assign var=next value=$pagination.page+1}
                {else}
                    {assign var=next value=$pagination.page}
                {/if}
                <a href="index.php?admin/requests&page=1">First</a>
                <a href="index.php?admin/requests&page={$prev}">Prev</a>
                {$pagination.page}
                <a href="index.php?admin/requests&page={$next}">Next</a>
                <a href="index.php?admin/requests&page={$pagination.pages}">Last</a>
            </div>
        </div>
    </div>






<!-- end contents -->
{include file="adminfooter.tpl"}