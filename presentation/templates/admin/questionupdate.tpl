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
        <h2>Questions</h2>
        <form method="post" action="index.php?admin/questions&action={$path}" enctype="multipart/form-data">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="20" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Services</td><td>
                        <select name="service_id">
                            {html_options options=$services selected=$d.service_id}
                        </select>
                        
                        
                    </td></tr>
                
                <tr><td class="td_title">Questions #</td><td><input type="text" name="question_number" id="question_number" maxlength="20" value="{$d.question_number}"></td></tr>
                <tr><td class="td_title">Questions</td><td><input type="text" name="question_text" id="question_text" maxlength="255" value="{$d.question_text}"></td></tr>
                <tr><td class="td_title">Question type</td><td>
                        <span class="radio">{html_radios name='question_type' options=$gr_questiontype selected=$d.question_type separator=' ' class="inner"}</span>
                </td></tr>
                
                <tr><td class="td_title">Choices</td><td><input type="text" name="question_choices" id="question_choices" maxlength="255" value="{$d.question_choices}"></td></tr>
                <tr><td class="td_title">Other option</td><td>
                        <span class="radio">{html_radios name='question_others' options=$gr_yesno selected=$d.question_others separator=' ' class="inner"}</span></td></tr>
                <tr><td class="td_title">Enabled</td><td>
                        <span class="radio">{html_radios name='status' options=$gr_status selected=$d.status separator=' ' class="inner"}</span></td></tr>
                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>
</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 