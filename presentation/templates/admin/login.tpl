{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}

{* debug *}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <!--<div class="col-md-3">
        {include file="adminleftbar.tpl" title="foo"}

    </div>-->
    <div class="col-md-8 col-md-offset-4">
        
            <form method="post" data-parsley-validate="" action="index.php?admin/admin&action=login">
                <div id="loginform">

                    <h3>Admin Login</h3>
                    <table>
                        <tr><td>
                                Email: <br />
                                <input name="adminemail" type="text" maxlength="100" value="" required="" /></td></tr>

                        <tr><td>Password: <br />
                                <input name="adminpassword" type="password" maxlength="20" value="" required="" /></td></tr>
                        <tr><td>
                                <input class="btn btn-primary" name="usersubmit"  type="submit" value="Login" /> </td></tr>
                    </table>


                </div>



            </form>

        
    </div>

</div>


{include file="adminfooter.tpl"} 