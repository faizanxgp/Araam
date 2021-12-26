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
                {foreach from=$data key=myId item=i}
                    <tr>
                        <td><a class="btn" href="index.php?admin/questions&id={$i.id}&action=edit">Edit</a> 
                            <a class="btn" href="index.php?admin/questions&id={$i.id}&action=delete">Del</a>
                            
                        </td>
                        <td>{$i.id}</td>
                        <td>{$i.subservice}</td>
                        <td>{$i.question_number}</td>
                        <td>{$i.question_text}</td>
                        <td>{$i.question_type}</td>
                        <td>{$i.question_choices}</td>
                        <td>{if $i.question_others eq "yes"}Yes{else}No{/if}</td>
                        
                    </tr>
                {/foreach}
            </table>

            <div class="pagination col-md-6">
                Page: 
                {*for $foo=1 to $pagination.pages}
                    {if $pagination.page == $foo}
                        {$foo} 
                    {else}
                        <a href="index.php?admin/questions&page={$foo}">{$foo}</a> 
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
                <a href="index.php?admin/questions&page=1">First</a>
                <a href="index.php?admin/questions&page={$prev}">Prev</a>
                {$pagination.page}
                <a href="index.php?admin/questions&page={$next}">Next</a>
                <a href="index.php?admin/questions&page={$pagination.pages}">Last</a>
            </div>
        </div>
    </div>






<!-- end contents -->
{include file="adminfooter.tpl"}