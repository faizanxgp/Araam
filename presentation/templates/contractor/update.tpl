{config_load file="test.conf" section="setup"}
{include file="contractorheader.tpl" title="foo"}
<!-- form begin -->


<div class="row">
    
    <div class="col-md-12">
        {if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}
        
        
        <form method="post" data-parsley-validate="" action="{#site_root#}/contractor/update/ac-update">
            <div id="inputform">
                <h3>Update Account</h3>
                <table class="table">
                    <tr>
                        <td>
                    <label>Contact Person Name:</label>  <br />
                            <input name="contact_person" type="text" maxlength="100" value="{$d.contact_person}" /></td>
                    </tr>
                    <tr>
                        <td><label>Phone:</label> <br />
                            <input name="phone" type="text" maxlength="20"  value="{$d.phone}" data-parsley-type="digits" /></td>
                    </tr>
                    <tr><td>			
                            <label>Mobile:</label> <br />
                            <input name="mobile" type="text" maxlength="20" value="{$d.mobile}" data-parsley-type="digits" /></td>
                    </tr>
                    <tr><td>			
                            <label>Email:</label> <br />
                            <input name="email" type="email" maxlength="254" value="{$d.email}" /></td>
                    </tr>
                    <tr><td><label>Password:</label> <br />
                            <input name="pass1" type="password" maxlength="20" value="" /></td>

                    </tr>
                    <tr><td><label>Confirm Password:</label> <br />
                            <input name="pass2" type="password" maxlength="20" data-parsley-equalto="#pass" value="" /></td>
                    </tr>
                </table>

                <table class="table">
                    <tr>	
                        <td><label>Company Name:</label> <br />
                            <input name="company_name" type="text" maxlength="100" value="{$d.company_name}" /></td>

                    </tr>
                    <tr><td><label>Registration/CNIC:</label> <br />
                            <input name="registration" type="text" maxlength="30" value="{$d.registration}" /></td>
                    </tr>
                    <tr>
                        <td><label>Address:</label> <br />
                            <input name="address" type="text" maxlength="254" value="{$d.address}" /></td>

                    </tr>
                    <tr><td><label>City:</label> <br />
                            <select name="city" id="city" >
                                {html_options options=$gr_city selected=$d.city}
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Postcode:</label> <br />
                            <input name="postcode" type="text" maxlength="20" value="postcode" /></td>

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