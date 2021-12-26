{config_load file="test.conf" section="setup"}
{include file="contractorheader.tpl" title="foo"}
<!-- form begin -->
{if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}

<div class="row">
    
    <div class="col-md-12">
        <form method="post" action="{#site_root#}/contractor/update/ac-updatearea">
            <div id="updateform">
                <h3>Areas where you provide services</h3>
                <table class="table">
                    <tr>
                        <td>
                            <ul class="areas">
                                {html_checkboxes name='areas' options=$areas selected=$selectedareas labels="false" separator=''}
                                
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><input name="submit01" class="btn btn-primary"  type="submit" value="Update" /> </td>
                    </tr>
                </table>
            </div>
        </form>
    </div></div>
<!-- form end -->
{include file="contractorfooter.tpl"} 