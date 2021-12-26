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
        
            <h2>EMails</h2>
            <a class="btn button" href="index.php?admin/emails&action=add">Add New</a>
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>ID</th>
                    <th>Title</th>
                    
                </tr>
                {foreach from=$data key=myId item=i}
                    <tr>
                        <td><a href="index.php?admin/emails&id={$i.id}&action=edit">Edit</a> <a href="index.php?admin/emails&id={$i.id}&action=delete">Delete</a></td>
                        <td>{$i.id}</td>
                        <td>{$i.subject}</td>
                        

                    </tr>
                {/foreach}
            </table>

            <div class="pagination col-md-6">
                Page: 
                {for $foo=1 to $pagination.pages}
                    {if $pagination.page == $foo}
                        {$foo} 
                    {else}

                        <a href="index.php?admin/emails&page={$foo}">{$foo}</a> 

                    {/if}
                {/for}
            </div>
        </div>
    </div>






<!-- end contents -->
{include file="adminfooter.tpl"} 