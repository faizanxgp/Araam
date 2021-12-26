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
        <h2>Credits</h2>
        <form method="post" action="index.php?admin/contractor&action=addpoints" enctype="multipart/form-data">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="20" value="{$d.id}" readonly=""></td></tr>
                
                <tr><td class="td_title">Provider</td><td>
                        <select name="provider_id" id="provider_id" >
                            {html_options options=$providers selected=$d.provider_id}
                        </select>
                        
                        </td></tr>
                
                <tr><td class="td_title">Date</td><td><input type="text" name="date" id="datepicker" maxlength="10" value="{$d.date}"></td></tr>
                
                <tr><td class="td_title">Amount</td><td><input type="text" name="amount" id="amount" maxlength="10" value="{$d.amount}"></td></tr>
                
                <tr><td class="td_title">Type</td><td><input type="text" name="mtype" id="mtype" maxlength="10" value="{$d.mtype}"></td></tr>
                
                <tr><td class="td_title">Reference</td><td><input type="text" name="reference" id="reference" maxlength="50" value="{$d.reference}"></td></tr>
                
                <tr><td class="td_title">Received from</td><td><input type="text" name="receivedfrom" id="receivedfrom" maxlength="50" value="{$d.receivedfrom}"></td></tr>
                
                <tr><td class="td_title">Credits</td><td><input type="text" name="points" id="points" maxlength="10" value="{$d.points}"></td></tr>
                
                
                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>
</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 