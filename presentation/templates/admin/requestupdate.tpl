{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}


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
        <h2>User Request</h2>
        <form method="post" action="index.php?admin/requests&action={$path}" enctype="multipart/form-data">
            <table class="table">
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="20" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Service</td><td>
                    <select name="subservice_id">
                        {html_options options=$services selected=$d.subservice_id}
                    </select></td></tr>
                <tr><td class="td_title">Area</td><td>
                    <select name="area_id">
                        {html_options options=$areas selected=$d.area_id}
                    </select> </td></tr>
                
                <tr><td class="td_title">Question 1</td><td><input type="text" name="question_1" id="question_1" maxlength="100" value="{$d.question_1}"></td></tr>
                <tr><td class="td_title">Question 2</td><td><input type="text" name="question_2" id="question_2" maxlength="100" value="{$d.question_2}"></td></tr>
                <tr><td class="td_title">Question 3</td><td><input type="text" name="question_3" id="question_3" maxlength="100" value="{$d.question_3}"></td></tr>
                <tr><td class="td_title">Question 4</td><td><input type="text" name="question_4" id="question_4" maxlength="100" value="{$d.question_4}"></td></tr>
                <tr><td class="td_title">Question 5</td><td><input type="text" name="question_5" id="question_5" maxlength="100" value="{$d.question_5}"></td></tr>
                <tr><td class="td_title">Question 6</td><td><input type="text" name="question_6" id="question_6" maxlength="100" value="{$d.question_6}"></td></tr>
                
                <tr><td class="td_title">Expected Date</td><td><input type="text" name="expected_date" id="expected_date" maxlength="100" value="{$d.expected_date}"></td></tr>
                <tr><td class="td_title">Estimated Date</td><td><input type="text" name="estimated_date" id="estimated_date" maxlength="100" value="{$d.estimated_date}"></td></tr>
                <tr><td class="td_title">Project Description</td><td><textarea name="service_description" id="service_description" >{$d.service_description}</textarea></td></tr>
                <tr><td class="td_title">Budget</td><td><input type="text" name="budget" id="budget" value="{$d.budget}" /></td></tr>
                <tr><td class="td_title">Name</td><td><input type="text" name="requestby" id="requestby" maxlength="100" value="{$d.requestby}"></td></tr>
                <tr><td class="td_title">Email</td><td><input type="text" name="email" id="email" maxlength="100" value="{$d.email}"></td></tr>
                <tr><td class="td_title">Phone</td><td><input type="text" name="mobile" id="mobile" maxlength="100" value="{$d.mobile}"></td></tr>
                
                <tr><td class="td_title">Promotion code</td><td><input type="text" name="promocode" id="promocode" maxlength="100" value="{$d.promocode}"></td></tr>
                <tr><td class="td_title">Status</td><td><span class="radio">{html_radios name='approved' options=$gr_reqstatus selected=$d.approved separator=' ' class="inner"}</span></td></tr>
                <tr><td class="td_title">Date created</td><td><input type="text" name="datecreated" id="datecreated" maxlength="100" value="{$d.datecreated}" readonly="" ></td></tr>
                
                
                
                
                
                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>
</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 