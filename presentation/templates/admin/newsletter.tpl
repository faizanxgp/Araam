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
        
            <h2>Newsletters</h2>
            <a class="btn button" href="index.php?admin/newsletter&action=add">Add New</a>
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Subject</th>
                    <th>Last Sent</th>
                    

                </tr>
                {foreach from=$data key=myId item=i}
                    <tr>
                        <td>
                            <a href="index.php?admin/newsletter&id={$i.id}&action=edit">Edit</a> 
                            <a href="index.php?admin/newsletter&id={$i.id}&action=delete">Delete</a> 
                            <a href="index.php?admin/newsletter&id={$i.id}&action=send">Preview</a>
                            <br />
                            <a href="index.php?admin/newsletter&id={$i.id}&action=process">Process</a>
                        </td>
                        
                        <td>{$i.name}</td>
                        <td>{$i.type}</td>
                        <td>{$i.subject}</td>
                        <td>{$i.lastsent}</td>
                        
                    </tr>
                {/foreach}
            </table>

            <div class="pagination col-md-6">
                Page: 
                {for $foo=1 to $pagination.pages}
                    {if $pagination.page == $foo}
                        {$foo} 
                    {else}

                        <a href="index.php?admin/newsletter&page={$foo}">{$foo}</a> 

                    {/if}
                {/for}
            </div>
        </div>
    </div>






<!-- end contents -->
{include file="adminfooter.tpl"} 