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
        <h2>servicerequest</h2>
        <form method="post" action="index.php?admin/servicerequest&action={$path}">
            <table class="table">

                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Contact Person</td><td><input type="text" name="contact_person" id="contact-person" maxlength="100" value="{$d.contact_person}"></td></tr>
                <tr><td class="td_title">Phone</td><td><input type="text" name="phone" id="phone" maxlength="20" value="{$d.phone}"></td></tr>
                <tr><td class="td_title">Email</td><td><input type="text" name="email" id="email" maxlength="254" value="{$d.email}"></td></tr>
                <tr><td class="td_title">Comapny Name</td><td><input type="text" name="company_name" id="company_name" maxlength="100" value="{$d.company_name}"></td></tr>
                <tr><td class="td_title">Registration</td><td><input type="text" name="registration" id="registration" maxlength="30" value="{$d.registration}"></td></tr>
                <tr><td class="td_title">Address</td><td><input type="text" name="address" id="address" maxlength="254" value="{$d.address}"></td></tr>
                <tr><td class="td_title">City</td><td><input type="text" name="city" id="city" maxlength="30" value="{$d.city}"></td></tr>
                <tr><td class="td_title">Postcode</td><td><input type="text" name="postcode" id="postcode" maxlength="20" value="{$d.postcode}"></td></tr>
                <tr><td class="td_title">Website</td><td><input type="text" name="website" id="website" maxlength="100" value="{$d.website}"></td></tr>
                <tr><td class="td_title">FB Page</td><td><input type="text" name="fb" id="fb" maxlength="100" value="{$d.fb}"></td></tr>
                <tr><td class="td_title">Status</td><td><span class="radio">{html_radios name='status' options=$gr_status selected=$d.status separator=' ' class="inner"}</span></td></tr>
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 