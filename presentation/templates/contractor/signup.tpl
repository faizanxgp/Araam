{* not in use *}
{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{* debug *}

<div class="row">
    <!--
    <div class="col-md-3">
        {include file="leftbar.tpl" title="foo"}

    </div>-->
        
    <div class="col-md-8 col-md-offset-4">
        {if $message}
            <div class="row">
                <div class="col-md-12 message">
                    <h3>Validation Errors</h3>
                    <p>{$message}</p></div>
            </div>
        {/if}
        <form method="post" data-parsley-validate="" action="{#site_root#}/contractors/ac-signup">
            <div id="signupform">
                <h3>Contractor Sign Up</h3>
                <table class="table-contractor">
                    <tr>
                        <td><label>Contact Person Name: <span class="required">*</span> </label> <br />
                            <input name="contact_person" type="text" maxlength="100" value="" required="" /><p class="tips">Your name</p></td>
                    </tr>
                    <tr>
                        <td><label>Phone: </label> <br />
                            <input name="phone" type="text" maxlength="20"  value="" data-parsley-type="digits" /><p class="tips">Your phone number e.g. 0421234567</p></td>
                    </tr>
                    <tr><td><label>Mobile: <span class="required">*</span></label> <br />
                            <input name="mobile" type="text" maxlength="20" value="" required="" data-parsley-type="digits" data-parsley-length="11" /><p class="tips">Your mobile number e.g. 03001234567</p></td>
                    </tr>
                    <tr><td>			
                            <label>Email: <span class="required">*</span></label> <br />
                            <input name="email" type="email" maxlength="254" value="" required="" /><p class="tips">Your valid email address</p></td>
                    </tr>
                    <tr><td><label>Password: <span class="required">*</span></label> <br />
                            <input name="pass1" id="pass1" type="password" data-parsley-length="[8, 20]" value="" required="" /><p class="tips">A unique password between 8 to 20 characters</p></td>

                    </tr>
                    <tr><td><label>Confirm Password: <span class="required">*</span></label> <br />
                            <input name="pass2" type="password" data-parsley-equalto="#pass1" data-parsley-length="[8, 20]" value="" required=""  /><p class="tips">Same as password field</p></td>
                    </tr>
                </table>

                <table class="table-contractor">
                    <tr>	
                        <td><label>Company Name: </label> <br />
                            <input name="company_name" type="text" maxlength=100" value=""  /><p class="tips">Your company name</p></td>

                    </tr>
                    <tr><td><label>Registration/CNIC:</label> <br />
                            <input name="registration" type="text" maxlength="30" value="" /><p class="tips">Company registration or your personal CNIC</p></td>
                    </tr>
                    <tr>
                        <td><label>Address: </label> <br />
                            <input name="address" type="text" maxlength="254" value=""  /><p class="tips">Business location</p></td>

                    </tr>
                    <tr><td><label>City: </label> <br />
                            <select name="city" id="city" >
                                {html_options options=$gr_city }
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Postcode:</label> <br />
                            <input name="postcode" type="text" maxlength="20" value="" /><p class="tips"></p></td>

                    </tr>

                    <tr>
                        <td><input name="usersubmit" class="btn btn-primary"  type="submit" value="Sign Up" /> <a href="{#site_root#}/contractors/ac-login" class="btn btn-secondary">Sign in</a></td>
                    </tr>

                </table>

            </div>



        </form>


    </div>

</div>


{include file="footer.tpl"}