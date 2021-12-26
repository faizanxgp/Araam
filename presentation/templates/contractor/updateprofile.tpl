{config_load file="test.conf" section="setup"}
{include file="contractorheader.tpl" title="foo"}
<!-- form begin -->


<div class="row">
    
    <div class="col-md-12">
        {if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}
        
        
        <form method="post" enctype="multipart/form-data" data-parsley-validate="" action="{#site_root#}/contractor/profile/ac-update">
            <div id="inputform">
                <h3>Update Profile</h3>
                <table class="table">
                    <tr>
                        <td>
                    <label>Business Name:</label>  <br />
                            <input name="business_name" type="text" maxlength="100" value="{$d.business_name}" /></td>
                    </tr>
                    <tr>
                        <td><label>Business Logo:</label> <br />
                            <input name="logo" id='logo' type="file" /></td>
                    </tr>
                    <tr><td>			
                            <label>Business Description:</label> <br />
                            <textarea name="business_description" id="business-description">{$d.business_description}</textarea></td>
                    </tr>
                    <tr><td>			
                            <label>Email:</label> <br />
                            <input name="business_email" type="email" maxlength="254" value="{$d.business_email}" /></td>
                    </tr>
                    
                    <tr><td>			
                            <label>Phone:</label> <br />
                            <input name="business_phone" type="text" maxlength="50" value="{$d.business_phone}" /></td>
                    </tr>
                    
                    <tr><td>			
                            <label>Fax:</label> <br />
                            <input name="business_fax" type="text" maxlength="20" value="{$d.business_fax}" /></td>
                    </tr>
                    
                </table>

                <table class="table">
                    <tr>	
                        <td><label>Business Address:</label> <br />
                            <input name="business_address" type="text" maxlength="254" value="{$d.business_address}" /></td>

                    </tr>
                    <tr><td><label>Area/Locality:</label> <br />
                            <input name="business_area" type="text" maxlength="50" value="{$d.business_area}" /></td>
                    </tr>
                    <tr>
                        <td><label>City:</label> <br />
                            <input name="business_city" type="text" maxlength="20" value="{$d.business_city}" /></td>

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