{config_load file="test.conf" section="setup"}

{include file="contractorheader.tpl" title="foo"}

{* debug *}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <!--
    <div class="col-md-3">
        {include file="contractorleftbar.tpl" title="foo"}

    </div>-->
    <div class="col-md-8 col-md-offset-4">
        <h1>Forgot Password?</h1>
        <form id="form1" name="form1" method="post" action="">

            <table >

                <tr>
                    <td ><br />
                        <input name="contractor_email" type="text" id="contractor_email" maxlength="254" />
                        <br />
                        Please enter your email address </td>
                </tr>
                <tr><td>
                    
                        <input name="submit01" type="submit" id="submit01" value="Proceed" class="btn btn-primary button" /></td>
                </tr>

            </table>

        </form>

    </div>
</div>




{include file="contractorfooter.tpl"}