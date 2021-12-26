{config_load file="test.conf" section="setup"}
{include file="contractorheader.tpl" title="foo"}
<!-- form begin -->

<div class="row">
    
    <div class="col-md-12">
        {if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}
        
        
        <form method="post" enctype="multipart/form-data" data-parsley-validate="" action="{#site_root#}/contractor/profile/id-{$d.id}/ac-updateservice">
            <div id="inputform">
                <h3>Update Profile Services</h3>
                
                <table class="table">
                    <tr>	
                        <td><label>Service:</label> <br />
                            <select name="service_id" id="service-id" >
                                {html_options options=$gr_service selected=$d.service_id}
                            </select></td>

                    </tr>
                    <tr>
                        <td>
                    <label>Service Title:</label>  <br />
                            <input name="service_title" type="text" maxlength="100" value="{$d.service_title}" /></td>
                    </tr>
                    <tr><td>			
                            <label>Service Description:</label> <br />
                            <textarea name="service_description">{$d.service_description}</textarea></td>
                    </tr>
                    
                    <tr>
                        <td><label>Service Images:</label> <br />
                            <input name="attach[]" id='attach' type="file" multiple="" /></td>
                    </tr>
                    
                    <tr>
                        <td><input name="submit01" class="btn btn-primary"  type="submit" value="Update" /> </td>
                    </tr>

                </table>

            </div>



        </form>
    </div>
</div>
<!-- form end -->
{include file="contractorfooter.tpl"} 