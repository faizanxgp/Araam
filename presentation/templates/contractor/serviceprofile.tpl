{config_load file="test.conf" section="setup"}

{include file="contractorheader.tpl" title="foo"}



{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    
    <div class="col-md-12">
        

                <h3>Service Profiles</h3>
                <a class="btn button" href="{#site_root#}/contractor/profile/id-0/ac-updateservice">Add New</a>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>Title</th>
                        
                    </tr>
                    {foreach from=$data1 key=myId item=i}
                        <tr>
                            <td><a class="btn" href="{#site_root#}/contractor/profile/id-{$i.id}/ac-updateservice">Update</a> 

                            </td>
                            <td>{$i.subservice}</td>
                            <td>{$i.service_title}</td>
                            

                            
                        </tr>
                    {/foreach}
                </table>
            
        
    </div>

</div>


<!-- end contents -->
{include file="contractorfooter.tpl"} 