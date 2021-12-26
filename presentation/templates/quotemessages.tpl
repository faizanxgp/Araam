{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}



{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if} 

<div class="row">
    
    <div class="col-md-12">
        

                <h3>Messages with {$pname}</h3>
                
                {foreach from=$messagedata key=myId item=i}
                {if $i.messageby eq "user"}
                    <div class="user-message">
                        {$i.message} <br />at {$i.datecreated} -- by user
                    </div>
                {else}
                    <div class="provider-message">
                        {$i.message} <br />at {$i.datecreated} -- by contractor
                    </div>
                {/if}
                {/foreach}
            
                <!--
                <table class="table">
                    <tr>
                        
                        <th>Message by</th>
                        <th>Message</th>
                        <th>Date created</th>
                    </tr>
                    {foreach from=$data1 key=myId item=i}
                        <tr>
                            

                            <td>{$i.messageby}</td>
                            <td>{$i.message}</td>
                            <td>{$i.datecreated}</td>
                            
                        </tr>
                    {/foreach}
                </table> -->
                
                <table>
                    <tr>
                        <td>
                            <form name="form01" method="post" action="{#site_root#}/dashboard/id-{$q_id}/ac-messages">
                            <input type="hidden" name="p_id" value="{$p_id}">
                            <input type="hidden" name="r_id" value="{$r_id}">
                            <input type="hidden" name="q_id" value="{$q_id}">
                            <label>Message:</label>
                            <textarea name="message"></textarea>
                            <input type="submit" class="btn" name="submit01" />
                            </form>
                    
                    
                </table>
            
            
        
    </div>
</div>

{include file="footer.tpl"} 