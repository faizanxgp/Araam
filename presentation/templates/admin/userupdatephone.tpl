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
        <h2>User Phone</h2>
        <form method="post" action="index.php?admin/users&action={$path}">


            <table>
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">First name</td><td><input type="text" name="firstname" id="firstname" maxlength="255" value="{$d.firstname}"></td></tr>
                <tr><td class="td_title">Last name</td><td><input type="text" name="lastname" id="lastname" maxlength="255" value="{$d.lastname}"></td></tr>
                <tr><td class="td_title">Address</td><td><textarea name="address" id="address" rows="5" cols="60">{$d.address}</textarea></td></tr>
                <tr><td class="td_title">Area</td>
                    <td>
                        <select name="area" id="area" >
                            {html_options options=$gr_areas selected=$d.area}
                        </select>
                        
                    </td>
                </tr>
                <tr><td class="td_title">City</td>
                    <td>
                        <select name="city" >
                            <option value="Karachi">Karachi</option>
                            <option value="Other">Outside Karachi</option>
                        </select>
                    </td>
                </tr>
                
                <tr><td class="td_title">Mobile</td><td><input type="text" name="mobile" id="mobile" maxlength="11" value="{$d.mobile}"></td></tr>
                <tr><td class="td_title">Phone</td><td><input type="text" name="phone" id="phone" maxlength="11" value="{$d.phone}"></td></tr>
                
                <tr><td class="td_title">Directions</td><td><textarea name="directions" id="directions" rows="5" cols="60">{$d.directions}</textarea></td></tr>
                <tr><td>How Did You Hear About Us? </td>
                    <td>
                        <select name="howhear">
                            {html_options options=$gr_howhear selected=$d.howhear}
                        </select> 
                    </td>
                </tr>
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"><input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>







        </form>
    </div>

</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 