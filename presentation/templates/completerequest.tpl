{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if} 

<div class="row">
    <div class="col-md-12">
        <h2>Provide Feedback about your experience</h2> <!-- tabs left -->

        <div class="tabbable tabs-left">
            <div class="row">
                <div class="col-md-3">  

                </div>
                <div class="col-md-9">
                    <div class="box-wrapper">
                        <form name="form01" method="post" action="{#site_root#}/dashboard/id-{$sr_id}/ac-complete">
                            <input type="hidden" name="p_id" value="{$sr_id}">
                            <label>Rating</label>
                            <select name="rating" id="rating" >
                                {html_options options=$gr_review }
                            </select>
                            <br />
                            <label>Your Review:</label>
                            <textarea name="review"></textarea>
                            <input type="submit" class="btn" name="submit01" value="Send Feedback" />
                        </form>
                    </div>




                </div>




            </div>
        </div>




    </div>
</div>














{include file="footer.tpl"} 