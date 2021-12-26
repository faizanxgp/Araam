{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}



{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if} 



<div class="row main-page2">
    <div class="col-md-12">
        <h2>{$d.services}</h2>
    </div>
    <div class="col-md-6">
        <div class="instructions">
            <h3>Steps</h3>

            <p><strong>Step 1:</strong> Answer the following questions.</p>
            <p><strong>Step 2:</strong> You'll get up to 5 quotes to compare together with reviews & profiles.</p>
            <p><strong>Step 3:</strong> Book your favourite service provider.</p>


        </div>

    </div>
    <div class="col-md-6">
        <h3>Please provide some details:</h3>
        <form method="post" enctype="multipart/form-data" data-parsley-validate="" action="{#site_root#}/main/ac-page3" >
            <input type="hidden" name="services" value="{$d.services}" />
            <input type="hidden" name="subservice_id" value="{$d.subservice_id}" />
            <input type="hidden" name="areas" value="{$d.areas}" />
            <input type="hidden" name="area_id" value="{$d.area_id}" />

            {foreach from=$questions key=myId item=i}
                <div class="question">
                    <label>{$i.question_text}</label>
                    {if $i.question_type eq "textbox"}
                        <input type="text" name="question_{$i.question_number}" />
                    {elseif $i.question_type eq "textarea"}
                        <textarea name="question_{$i.question_number}"></textarea>
                    {elseif $i.question_type eq "radio"}
                        {assign var=choices value=","|explode:$i.question_choices}
                        <div class="inner-radio">
                            {foreach from=$choices key=k2 item=i2}
                                <label><input type="radio" name="question_{$i.question_number}" value="{$i2}" required="">{$i2}</label>
                            {/foreach}
                        </div>
                    {elseif $i.question_type eq "checkbox"}
                        {assign var=choices value=","|explode:$i.question_choices}
                        <div class="inner-checkbox">
                            {foreach from=$choices key=k2 item=i2}
                                <label><input type="checkbox" name="question_{$i.question_number}[]" value="{$i2}">{$i2}</label>
                                {/foreach}
                        </div>
                    {else}
                    {/if}
                </div>
            {/foreach}
            <div class="question">
                <label>Please describe the job in detail (optional)</label>
                <p class="tips">This helps greatly in getting a more accurate quote.</p>
                <textarea name="service_description"></textarea>
            </div>

            <div class="question"><label>Your budget</label>
                <input type="text" name="budget" />
                <p class="tips">Your estimated budget for this work</p></div>
                
                
            <div class="question"><label>Your contacting preferences</label>
                <div class="inner-radio">
                    {html_radios name='contacting_preference' options=$gr_contactpref selected=' ' separator=' '}</div>
                <p class="tips">Your travel preference for this work</p></div>


            <div class="question">
                <label>When do you need it?</label>
                <p class="tips">This helps greatly in getting a more accurate quote.</p>
                <input type="text" name="expected_date" id="datepicker" /></div>
            <!--
                        <label>Where do you need it?</label>
                        <p>This helps greatly in getting a more accurate quote.</p>
                        <input type="text" name="whereneed" /> -->
            
            <div class="question"><label>Where do you need it?</label>
                <input type="text" name="area" />
                <p class="tips">Location for this work</p></div>

            <div class="question">
                <label>Attachments</label>
                <p class="tips">More pictures, better quotes.</p>
                <input name="attach[]" id='attach' type="file" multiple="multiple" />
                <p class="tips">Upload up to 5 files (.jpg .png .pdf .docx .doc .txt) of 2MB each</p>
                <!--<input type="file" name="attach1" />
                <input type="file" name="attach2" />
                <input type="file" name="attach3" />
                <input type="file" name="attach4" />
                <input type="file" name="attach5" />-->
            </div>

            <p><strong>Your contact information</strong></p>
            <div class="question">
                <label>Name: <span class="required">*</span></label>
                <input type="text" name="requestby" required="" />
                <p class="tips">Your complete name</p>
            </div>
            <div class="question"><label>Email address: <span class="required">*</span></label>
                <input type="email" name="email" required="" />
                <p class="tips">Your valid email address</p>
            </div>
            <div class="question"><label>Phone number</label>
                <input type="text" name="mobile" data-parsley-type="digits" />
                <p class="tips">Your privacy is important to us. We do not disclose your email and telephone number to any service provider or 3rd parties unless you have booked them through us.</p></div>

            <div class="question"><label>Promotion code (if any)</label>
                <input type="text" name="promocode" />
                <p class="tips"></p>
            </div>

            <!--p><strong>Special notice: </strong></p-->

            <p><input type="submit" class="btn btn-primary" value="Submit Request" /></p>

            <p>By sending your request, you agree to the <a href="#">Terms of Use</a>.</p>

        </form>

    </div>


</div>

{include file="footer.tpl"} 