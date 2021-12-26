{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}

{*debug*}

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
        <h2>EMails</h2>
        
        
        <form method="post" action="index.php?admin/emails&action={$path}">
            <table>
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Email Title</td><td><input type="text" name="subject" id="subject" maxlength="255" value="{$d.subject}"></td></tr>
                
                <tr><td class="td_title">Body</td><td><textarea name="body" id="body" rows="10" cols="80">{$d.body}</textarea></td></tr>
                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
                
                <tr><td colspan="2">
                    {literal}
                    {{username}} -- Complete user name <br />
                    {{firstname}} -- User first name <br />
                    {{ordernumber}} -- Order number <br />
                    {{orderdetails}} -- Order details - order receive mail only <br />
                    {{link}} -- Forgot password link <br />
                    {{email}} -- User email - newsletter <br />
                    {/literal}
                    
                    </td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 