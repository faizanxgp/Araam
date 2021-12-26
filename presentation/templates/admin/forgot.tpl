{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}

{* debug *}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <div class="col-md-3">
        {include file="adminleftbar.tpl" title="foo"}

    </div>
    <div class="col-md-9">
        
            <form id="form1" name="form1" method="post" action="">
                <center>
                    <table width="200" id="table" style="width: 280px;">
                        <tr bgcolor="#CDDEED">
                            <td colspan="2" class="td_title_head"><h1>Forgot Password?</h1></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br />
                                <input name="admin_email" type="text" id="admin_email" maxlength="100" />
                                <br />
                                Please enter your email address </td>
                        </tr>
                        <tr>
                            <td colspan="2"><br />
                                <input name="submit01" type="submit" id="submit01" value="Proceed" class="btn btn-primary button" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                    </table>
                </center>
            </form>

        </div>
    </div>
    



{include file="adminfooter.tpl"}