{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{* debug *}

<div class="row">
    
    <div class="col-md-6">
        
        <div class="row">

            <form method="post" action="{#site_root#}/user/ac-forgotupdate">
                <div id="forgotform">
                    {if $message}
            <div class="message alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {$message}
            </div>
        {/if}
                    <h3>Update Password</h3>
                    <p></p>
                    <p>&nbsp;</p>
                    
                    <p>Your E-mail <br />
                        {$email}
                        <input type="hidden" name="e" value="{$email}" />
                        <input type="hidden" name="ref" value="{$pass}" />
                    </p>
                    <p>New Password<br />
                        <input name="pass1" type="password" maxlength="20" value="" parsley-trigger="change" required="" />
                    </p>
                    <p>Confirm Password<br />
                        <input name="pass2" type="password" maxlength="20" value="" parsley-trigger="change" required="" />
                    </p>
                    <p>
                    <input name="usersubmit" class="btn btn-primary sendbutton"  type="submit" value="" />
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-3">
        {include file="rightbar.tpl" title="foo"}
    </div>
</div>
{include file="footer.tpl"}