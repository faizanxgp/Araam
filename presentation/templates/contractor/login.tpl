{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{* debug *}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <!--
    <div class="col-md-3">
        {include file="leftbar.tpl" title="foo"}

    </div>-->
    <div class="col-md-8 col-md-offset-4">
        
            <form method="post" data-parsley-validate="" action="{#site_root#}/contractors/ac-login">
                <div id="loginform">
                    <h3>Contractor Login</h3>
                    <table>
                        <tr>
                            <td><label>Email:</label> <br />
                                <input name="contractoremail" type="text" maxlength="254" value="" required="" /></td></tr>

                        <tr><td><label>Password:</label> <br />
                                <input name="contractorpassword" type="password" maxlength="20" value="" required="" /></td></tr>

                        <tr><td><input class="btn btn-primary" name="usersubmit"  type="submit" value="Login" /> <a href="{#site_root#}/contractor/ac-forgot" class="btn btn-secondary">Forgot Password?</a></td></tr>

                    </table>

                </div>



            </form>

        
    </div>

</div>


{include file="footer.tpl"} 