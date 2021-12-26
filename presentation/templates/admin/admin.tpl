{config_load file=test.conf section="setup"}
{include file="a_header.tpl" title=foo}
<!-- form begin -->
{if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}
<form method="post" action="" enctype="multipart/form-data" name="form1" id="" class="form">
    <table width="450">
        <tr>
            <td colspan="2" class="td_title_head"><h2>Admin Information </h2></td>
        </tr>
        <tr>
            <td class="td_title">Name*</td>
            <td><input type="hidden" name="admin_id" id="admin_id" maxlength="11" value="{$admin_id}" />
                <input type="text" name="admin_name" id="admin_name" maxlength="50" value="{$admin_name}" /></td>
        </tr>
        <tr>
            <td class="td_title">Email*</td>
            <td><input type="text" name="admin_email" id="admin_email" maxlength="100" value="{$admin_email}" /></td>
        </tr>
        <tr>
            <td class="td_title">Username*</td>
            <td><input type="text" name="admin_username" id="admin_username" maxlength="50" value="{$admin_username}" /></td>
        </tr>
        <tr>
            <td class="td_title">Password*</td>
            <td><input type="password" name="admin_password" id="admin_password" maxlength="32" value="{$admin_password}" /></td>
        </tr>
        <tr>
            <td class="td_title">Confirm Password</td>
            <td><input type="password" name="admin_password2" id="admin_password2" maxlength="32" value="{$admin_password}" /></td>
        </tr>
        <tr>
            <td class="td_title">Level</td>
            <td><span class="radio">{html_radios name='admin_level' options=$gr_level selected=$admin_level separator=' ' class="inner"}</span></td>
        </tr>
        <tr>
            <td class="td_title">Status</td>
            <td><span class="radio">{html_radios name='admin_status' options=$gr_status selected=$admin_status separator=' ' class="inner"}</span></td>
        </tr>
        <tr>
            <td class="td_title">Last login</td>
            <td><input type="text" name="last_login" id="last_login" maxlength="19" readonly="" value="{$last_login}" /></td>
        </tr>
        <tr>
            <td class="td_title">Date added</td>
            <td><input type="text" name="date_added" id="date_added" maxlength="19" readonly="" value="{$date_added}" /></td>
        </tr>
        <tr>
            <td class="td_title"></td>
            <td class="buttons"><button type="submit" name="submit01" id="submit01" class="positive btn btn-primary">Submit</button>
                <button type="reset" name="reset01" id="reset01" class="negative">Reset</button></td>
        </tr>
    </table>
</form>
<!-- form end -->
{include file="a_footer.tpl"} 