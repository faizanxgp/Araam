{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{*debug*}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <div class="col-md-3">
        {include file="leftbar.tpl" title="foo"}

    </div>
    <div class="col-md-6">
        <div class="row">
            <!--
            <p><a href="index.php?myaccount&action=update">Account Details</a> | <a href="index.php?myaccount&action=history">Order History</a> | <a href="index.php?myaccount&action=request">Manage Requests</a> | <a href="">Special Offers</a> | <a href="">Preferences</a> | <a href="">Referrals</a></p>
            -->
            {if $message}
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {$message}
            </div>
            {/if}

            <form method="post" action="{#site_root#}/myaccount/ac-update" parsley-validate>
                <div id="signupform">
                    <h3>Account Details</h3>
                    <table>
                        <tr>
                            <td>First Name <br />
                                <input name="userfirstname" type="text" maxlength="30" value="{$d.firstname}" required="" /></td>

                            <td>Last Name <br />
                                <input name="userlastname" type="text" maxlength="30"  value="{$d.lastname}" required=""  /></td></tr>
                        <tr>
                            <td>Email <br />
                                <input name="useremail" type="text" maxlength="255" value="{$d.email}" required=""  /></td>
                        </tr>
                        <tr>
                            <td>Password <br />
                                <input name="userpass" type="password" maxlength="20" value="" /></td>

                            <td>Confirm Password <br />
                                <input name="userpass2" type="password" maxlength="20" value="" /></td>
                        </tr>
                        <tr>
                            <td>Mobile  <br />
                                <input name="phone" type="text" maxlength="20" value="{$d.mobile}" required=""  /></td>

                            <td>Phone (alternate) <br />
                                <input name="phone2" type="text" maxlength="20" value="{$d.phone}" /></td>
                        </tr>
                        <!--<tr>
                            <td>Mobile (required) <br />
                                <input name="mobile" type="text" maxlength="20" value="{$d.mobile}" required=""  /></td>

                            <td>Mobile (alternate) <br />
                                <input name="mobile2" type="text" maxlength="20" value="{$d.mobile2}" /></td>
                        </tr>-->
                        <tr>
                            <td colspan="2">Address <br />
                                <textarea name="address">{$d.address}</textarea>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>City <br />
                                <select name="city" >
                                    {html_options options=$gr_cities selected=$d.city}
                                </select>
                            </td>
                            <td>Area <br />
                                
                                <select name="area" id="area" >
                                    {html_options options=$gr_areas selected=$d.area}
                                </select>
                            </td>

                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <strong>Karachi:</strong> 	<span class="red">Please <strong>SELECT AREA</strong> for quick and accurate delivery.</span><br /><br />
                                <strong>Outside Karachi:</strong> 	<span class="red">Please enter <strong>COMPLETE ADDRESS</strong> and <strong>SELECT "Outside Karachi"</strong> in AREA.<span>
                                        <br /><br />
                                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="usersubmit" class="btnx submitbutton"  type="submit" value="" />
                            </td>
                        </tr>
                    </table>


                </div>



            </form>

        </div>
    </div>
    <div class="col-md-3">
        {include file="rightbar.tpl" title="foo"}
    </div>
</div>


{include file="footer.tpl"}