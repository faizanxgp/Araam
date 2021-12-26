{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{* debug *}

<div class="row">
    <!--<div class="col-md-3">
        {include file="leftbar.tpl" title="foo"}
    </div>-->
    <div class="col-md-8 col-md-offset-4">
        
        

            <form method="post" action="{#site_root#}/user/ac-forgot">
                <div id="forgotform">
                    {if $message}
            <div class="message alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {$message}
            </div>
        {/if}
                    <h3>Forgot Password?</h3>
                    <p>To reset your password, please enter your e-mail address. In turn, we will send you a password link via e-mail.</p>
                    <p>&nbsp;</p>
                    <p>Your E-mail <br />
                        <input name="useremail" type="text" maxlength="255" value="" parsley-trigger="change" parsley-type="email" parsley-type-email-message="Please provide a valid email address" required="" />
                    </p>
                    <p>
                    <input name="usersubmit" class="btn btn-primary"  type="submit" value="Process" />
                    </p>
                </div>
            </form>
        
    </div>
    
</div>
{include file="footer.tpl"}