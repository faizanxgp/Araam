{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if} 

<div class="row">
    <div class="col-md-12">
        <h2>Quotes Received</h2> <!-- tabs left -->
        {if $data1|count eq 0}
            Sorry, there are no quotes to show
        {else}
            <div class="tabbable tabs-left">
                <div class="row">
                    <div class="col-md-3">  
                        <ul class="nav nav-tabs">

                            {foreach from=$data1 key=myId item=i}
                                <li {if $myId eq 0}class="active"{/if}><a href="#tab{$myId}" data-toggle="tab">{$i.contact_person}<br />{$i.company_name}</a></li>
                                    {/foreach}


                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            {foreach from=$data1 key=myId item=i}
                                <div class="tab-pane {if $myId eq 0}active{/if}" id="tab{$myId}">   
                                    <a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.provider_id}/ac-profile" target="_blank">View Profile</a> {if $i.approved eq "approved"}<a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.bidid}/ac-hire">Hire</a>{/if}{if $i.status eq "selected"}<a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.id}/ac-complete">Complete</a>{/if}
                                    <table>
                                        <tr>
                                            <td colspan="2">
<h3>Quote Details</h3>
                                            </td>
                                        </tr>
                                        <tr><td><label>Amount (PKR)</label></td><td>{$i.amount}</td></tr>
                                        <tr><td><label>Quote Type</label></td><td>{$i.btype}</td></tr>

                                        <tr><td><label>Details</label></td><td>{$i.message}</td></tr>

                                        </tr>

                                    </table>
                                    
                                    {if $data2|count eq 0}
                                        <h3>Sorry, there are no messages to show</h3>
                                    {else}
                                        <h3>Messages</h3>
                                        {foreach from=$data2 key=myId2 item=i2}
                                            {if $i.provider_id eq $i2.provider_id}

                                                {if $i2.messageby eq "user"}
                                                    <div class="user-message">
                                                        {$i2.message} <br />at {$i2.datecreated} -- by user
                                                    </div>
                                                {else}
                                                    <div class="provider-message">
                                                        {$i2.message} <br />at {$i2.datecreated} -- by contractor
                                                    </div>
                                                {/if}
                                            {/if}


                                        {/foreach}
                                    {/if}
                                    <table>
                                        <tr>
                                            <td>
                                                <form name="form01" method="post" action="{#site_root#}/dashboard/id-{$sr_id}/ac-quotes">
                                                    <input type="hidden" name="p_id" value="{$sr_id}">
                                                    <input type="hidden" name="r_id" value="{$i.provider_id}">
                                                    <input type="hidden" name="q_id" value="0">
                                                    <label>New Message:</label>
                                                    <textarea name="message"></textarea>
                                                    <input type="submit" class="btn" name="submit02" value="Send Message to Professional" />
                                                </form>


                                    </table>

                                </div>
                            {/foreach}



                        </div>
                    </div>

                </div><!-- /tabs -->


            </div></div></div>
        {/if}


<div class="row">
    <div class="col-md-12">

        <h2>Project Details</h2>

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
            
            <tr><td class="td_title">Travel</td><td>{$travel[$d.contacting_preference]}</td></tr>
            

            <tr><td class="td_title">Name</td><td>{$d.requestby}</td></tr>
            <tr><td class="td_title">Email</td><td>{$d.email}</td></tr>
            <tr><td class="td_title">Phone</td><td>{$d.mobile}</td></tr>
            <tr><td class="td_title">Image</td><td>
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
</div>










{include file="footer.tpl"} 