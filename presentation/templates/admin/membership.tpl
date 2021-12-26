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
       
            <h2>Credit Status</h2>
            <a class="btn button" href="index.php?admin/contractor&id={$contractor_id}&action=addpoints">Add Credit</a>
            
            <table class="table">
                <tr>
                    <th></th>
                    <th>Seq</th>
                    <th>Date </th>
                    <th>Amount</th>
                    <th>Reference</th>
                    <th>Contractor / Professional</th>
                    
                    <th>Credits</th>
                </tr>
                {foreach from=$data key=myId item=i}
                    <tr>
                        <td><a class="btn" href="index.php?admin/contractor&id={$i.id}&action=editpoints">Edit</a> 
                            <a class="btn" href="index.php?admin/contractor&id={$i.id}&action=deletepoints">Del</a>
                            
                        </td>
                        <td>{$i.id}</td>
                        <td>{$i.date}</td>
                        <td>{$i.amount}</td>
                        <td>{$i.reference}</td>
                        <td>{$i.contact_person} {$i.company_name}</td>
                        
                        <td>{$i.points}</td>
                        
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
                <!--
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
                -->
            </div>
        </div>
    </div>






<!-- end contents -->
{include file="adminfooter.tpl"}