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
        
            <h2>Quotes Received</h2>
            
            <table class="table">
                <tr>
                    <th>Seq</th>
                    <th>Amout</th>
                    <th>Type</th>
                    <th>Message</th>
                    <th>Details</th>
                    <th>Contact Person</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>City</th>
                    

                </tr>
                {foreach from=$data key=myId item=i}
                    <tr>
                        <td>
                            
                        </td>
                        
                        <td>{$i.amount}</td>
                        <td>{$i.btype}</td>
                        <td>{$i.message}</td>
                        <td>{$i.status}</td>
                        <td>{$i.contact_person}</td>
                        <td>{$i.phone}</td>
                        <td>{$i.mobile}</td>
                        <td>{$i.city}</td>
                        
                    </tr>
                {/foreach}
            </table>

            
        </div>
    </div>






<!-- end contents -->
{include file="adminfooter.tpl"} 