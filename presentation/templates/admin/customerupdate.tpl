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
        <h2>Customer</h2>
        <form method="post" action="index.php?admin/customer&action={$path}">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Customer Name</td><td><input type="text" name="customername" id="customername" maxlength="100" value="{$d.customername}"></td></tr>
                <tr><td class="td_title">Phone</td><td><input type="text" name="phone" id="phone" maxlength="20" value="{$d.phone}"></td></tr>
                <tr><td class="td_title">Email</td><td><input type="text" name="email" id="email" maxlength="254" value="{$d.email}"></td></tr>
                <tr><td class="td_title">Status</td><td><span class="radio">{html_radios name='status' options=$gr_status selected=$d.status separator=' ' class="inner"}</span></td></tr>
                <tr><td class="td_title">Email Verified</td><td><span class="radio">
                    {html_radios name='email_verified' options=$gr_verified selected=$d.email_verified separator=' ' class="inner"}        
                            </span></td></tr>
                <tr><td class="td_title">Phone Verified</td><td><span class="radio">
                    {html_radios name='phone_verified' options=$gr_verified selected=$d.phone_verified separator=' ' class="inner"}        
                            </span></td></tr>
                <tr><td class="td_title">Date created</td><td><input type="text" name="datecreated" id="datecreated" maxlength="100" value="{$d.datecreated}" readonly=""></td></tr>
                <tr><td class="td_title">Last login</td><td><input type="text" name="lastlogin" id="lastlogin" maxlength="100" value="{$d.lastlogin}" readonly=""></td></tr>
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 