{config_load file="test.conf" section="setup"}

{include file="contractorheader.tpl" title=foo}
<!-- form begin -->

{if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}
<div class="row">
    <div class="col-md-6">
        <h2>Project</h2>


        <table class="table">


            <tr><td class="td_title">Service</td><td>{$subservices[$d.subservice_id]}</td></tr>
            <tr><td class="td_title">Area</td><td>{$areas[$d.area_id]}</td></tr>

            {foreach from=$questions key=myId item=i}
                {assign var=question_num value=$myId}
                <tr><td class="td_title">{$i}</td><td>{$q[$myId]}</td></tr>
                    {/foreach}
            <!--
            <tr><td class="td_title">Question 1</td><td>{$q.question_1}</td></tr>
            <tr><td class="td_title">Question 2</td><td>{$d.question_2}</td></tr>
            <tr><td class="td_title">Question 3</td><td>{$d.question_3}</td></tr>
            <tr><td class="td_title">Question 4</td><td>{$d.question_4}</td></tr>
            <tr><td class="td_title">Question 5</td><td>{$d.question_5}</td></tr>
            <tr><td class="td_title">Question 6</td><td>{$d.question_6}</td></tr>
            -->
            <tr><td class="td_title">Expected Date</td><td>{$d.expected_date}</td></tr>
            <tr><td class="td_title">Estimated Date</td><td>{$d.estimated_date}</td></tr>
            <tr><td class="td_title">Project Description</td><td>{$d.service_description}</td></tr>
            <tr><td class="td_title">Budget</td><td>{$d.budget}</td></tr>

            <tr><td class="td_title">Name</td><td>{$d.requestby}</td></tr>
            <tr><td class="td_title">Email</td><td>{$d.email}</td></tr>
            <tr><td class="td_title">Phone</td><td>{$d.mobile}</td></tr>

            <tr><td class="td_title">Images</td><td>
                    {if $d.attach1 neq ""}
                        <a class="fancybox" rel="group" href="{#site_root#}/{$d.attach1}">
                            <img class="thumb" src="{#site_root#}/{$d.attach1}" />
                        </a>
                    {/if}
                    {if $d.attach2 neq ""}
                        <a class="fancybox" rel="group" href="{#site_root#}/{$d.attach2}">
                            <img class="thumb" src="{#site_root#}/{$d.attach2}" />
                        </a>
                    {/if}
                    {if $d.attach3 neq ""}
                        <a class="fancybox" rel="group" href="{#site_root#}/{$d.attach3}">
                            <img class="thumb" src="{#site_root#}/{$d.attach3}" />
                        </a>
                    {/if}
                    {if $d.attach4 neq ""}
                        <a class="fancybox" rel="group" href="{#site_root#}/{$d.attach4}">
                            <img class="thumb" src="{#site_root#}/{$d.attach4}" />
                        </a>
                    {/if}
                    {if $d.attach5 neq ""}
                        <a class="fancybox" rel="group" href="{#site_root#}/{$d.attach5}">
                            <img class="thumb" src="{#site_root#}/{$d.attach5}" />
                        </a>
                    {/if}
                </td></tr>
            <!--
            <tr><td class="td_title">Promo code</td><td><input type="text" name="promocode" id="promocode" maxlength="100" value="{$d.promocode}"></td></tr>
            <tr><td class="td_title">Status</td><td>{html_radios name='approved' options=$gr_reqstatus selected=$d.approved separator=' '}</td></tr>
            <tr><td class="td_title">Date created</td><td><input type="text" name="datecreated" id="datecreated" maxlength="100" value="{$d.datecreated}" readonly="" ></td></tr>
            
            -->
        </table>

    </div>
    <div class="col-md-6">


        <form method="post" action="{#site_root#}/contractor/controlpanel/id-{$d.id}/ac-bid" enctype="multipart/form-data">
            <h2>Send Quote </h2>
            <table class="table">
                <input type="hidden" name="servicerequest_id" id="servicerequest_id" value="{$d.id}">

                <tr><td><label>Amount (PKR)</label><br /><input type="text" name="amount" id="amount" maxlength="10" value="{$amount}"></td></tr>

                <tr><td><label>Pricing type</label><br /><div class="radio">{html_radios name='btype' options=$gr_quotetype selected=$btype separator=' '}</div></td></tr>

                <tr><td><label>Quote Details </label><textarea name="message" id="message" >{$cmessage}</textarea>
                        <p class="tips">Please give more details on what is included or not included, whether you need to make a site visit, is there a charge for site, etc. This is to make the customer feed condident you will do a good job for them. </p>

                    </td></tr>

                <tr><td><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>

                <tr><td>This bid would take {$points} credits.</td></tr>
            </table>

        </form>

        
        {if $messagedata|@count gt 0}
            <!--
            <table class="table">
                <tr>

                    <th>Message</th>
                    <th>Message by</th>
                    <th>Date/Time</th>
                </tr>
            {foreach from=$messagedata key=myId item=i}
                <tr>


                    <td>{$i.message}</td>
                    <td>{$i.messageby}</td>

                    <td>{$i.datecreated}</td>
                </tr>
            {/foreach}
        </table>-->
            <h3>Messages</h3>
            {foreach from=$messagedata key=myId item=i}
                {if $i.messageby eq "user"}
                    <div class="user-message">
                        {$i.message} <br />at {$i.datecreated} -- by user
                    </div>
                {else}
                    <div class="provider-message">
                        {$i.message} <br />at {$i.datecreated} -- by contractor
                    </div>
                {/if}
            {/foreach}


            <table>
                <tr>
                    <td>
                        <form name="form01" method="post" action="{#site_root#}/contractor/controlpanel/id-{$sr_id}/ac-bid">
                            <input type="hidden" name="p_id" value="{$contractor_id}">
                            <input type="hidden" name="u_id" value="{$user_id}">
                            <input type="hidden" name="servicerequest_id" value="{$sr_id}">
                            <label>Message:</label>
                            <textarea name="message"></textarea>
                            <input type="submit" class="btn" name="submit02" />
                        </form>


            </table>

        {/if}

    </div>
</div>

<!-- form end -->
{include file="contractorfooter.tpl"} 