{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{* debug *}

<div class="row">
    <!--
    <div class="col-md-3">
    {include file="leftbar.tpl" title="foo"}
    </div>
    -->
    <div class="col-md-8 col-md-offset-4">
        




        <div id="loginform">
            {if $message}
            <div class="message alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {$message}
            </div>
        {/if}
            <h2>Customer Login</h2>
            {* . You may also login using your Facebook account  *}
            <p>Please login below to proceed </p>

            <form id="form1" method="post" action="{#site_root#}/user/ac-login">


                <table>
                    <tr>
                        <td><label>E-mail:</label> 
                            <input name="useremail" type="text" maxlength="255" value="" parsley-trigger="change" parsley-type="email" parsley-type-email-message="Please provide a valid E-mail address" required="" /></td>
                    </tr>
                    <tr>
                        <td><label>Password:</label>
                            <input name="userpass" type="password" maxlength="20" value="" required="" />

                        </td>
                    </tr>
                    <tr>
                        <td><input name="usersubmit" class="btn btn-primary" type="submit" value="Login" /> <a href="{#site_root#}/user/ac-forgot" class="btn btn-secondary">Forgot Password?</a></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>

</div>


{include file="footer.tpl"}