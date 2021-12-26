{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}

{*debug*}

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
       
            <h2>Users</h2>
            <a class="btn button" href="index.php?admin/users&action=add">Add New</a>
            <a class="btn button" href="index.php?admin/users&action=addphone">Add Phone User</a>
            <form method="post" action="index.php?admin/users&action=search">Name or Phone: <input type="text" name="name" value="" max="255" /> <input type="submit" name="submitquery" value="Search" /></form>
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    
                    <th>How hear?</th>
                    <th>Joined</th>
                </tr>
                {foreach from=$data key=myId item=i}
                    <tr>
                        <td>
                            <a class="btn" href="index.php?admin/users&id={$i.id}&action=loginas">Login as</a> 
                            <a class="btn" href="index.php?admin/users&id={$i.id}&action=credit">Credit</a> 
                            <a class="btn" href="index.php?admin/users&id={$i.id}&action=credithistory">Credit History</a> 
                            <a href="index.php?admin/users&id={$i.id}&action=edit">Edit</a> <a href="index.php?admin/users&id={$i.id}&action=delete">Delete</a></td>
                        <td>{$i.id}</td>
                        <td>{$i.firstname} {$i.lastname}</td>
                        <td>{$i.email}</td> 
                        <td>{$i.area} {$i.city}</td>
                        <td>{$i.phone} {$i.phone2} {$i.mobile} {$i.mobile2}</td>
                        <td>{$i.howhear}</td>
                        <td>{$i.register_ts|date_format: "%a, %b %e, %Y %I:%M %p"}</td>
                    </tr>
                {/foreach}
            </table>

            <div class="pagination col-md-6">
                Page: 
                {*for $foo=1 to $pagination.pages}
                    {if $pagination.page == $foo}
                        {$foo} 
                    {else}

                        <a href="index.php?admin/users&page={$foo}">{$foo}</a> 

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
                <a href="index.php?admin/users&page=1">First</a>
                <a href="index.php?admin/users&page={$prev}">Prev</a>
                {$pagination.page}
                <a href="index.php?admin/users&page={$next}">Next</a>
                <a href="index.php?admin/users&page={$pagination.pages}">Last</a>
            </div>
        </div>
    </div>






<!-- end contents -->
{include file="adminfooter.tpl"} 