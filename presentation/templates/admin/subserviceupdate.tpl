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
        <h2>Sub Service</h2>
        <form method="post" action="index.php?admin/subservice&action={$path}">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Sub Service Name</td><td><input type="text" name="subservice" id="subservice" maxlength="254" value="{$d.subservice}"></td></tr>
                <tr><td class="td_title">Service</td><td>
                        <select name="service_id" id="service_id" >
                            {html_options options=$services selected=$d.service_id}
                        </select>
                    </td>
                </tr>

                <tr><td class="td_title">Active</td><td><span class="radio">{html_radios name='status' options=$gr_status selected=$d.status separator=' ' class="inner"}</span></td></tr>
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 