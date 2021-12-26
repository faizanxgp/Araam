{config_load file="test.conf" section="setup"}
{include file="contractorheader.tpl" title="foo"}
<!-- form begin -->
{if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}
<div class="row">
    
    <div class="col-md-12">
        <form method="post" action="{#site_root#}/contractor/update/ac-updateservice">
            <div id="updateform">
                <h3>Services you provide</h3>
                <table class="table">
                    <tr>
                        <td>
                            <ul class="services">
                                {foreach from=$services key=k item=v}
                                    <h3>{$k}</h3>
                                    {html_checkboxes name='services' options=$v selected=$selectedservices labels="false" separator=''}
                                    
                                {/foreach}
                            </ul>
                        </td>
                    </tr>


                    <tr>
                        <td><input name="submit01" class="btn btn-primary"  type="submit" value="Update" /> </td>
                    </tr>

                </table>

            </div>



        </form>
    </div>
</div>
</div>
<!-- form end -->
{include file="contractorfooter.tpl"} 