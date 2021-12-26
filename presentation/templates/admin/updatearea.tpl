{config_load file="test.conf" section="setup"}
{include file="adminheader.tpl" title="foo"}
<!-- form begin -->
{if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}


<div class="row">
    <div class="col-md-3">
        {include file="adminleftbar.tpl" title="foo"}

    </div>
    <div class="col-md-9">
        <form method="post" action="index.php?admin/contractor&id={$contractor_id}&action=updatearea">
            <input type="hidden" name="contractor_id" value="{$contractor_id}" />
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
{include file="adminfooter.tpl"} 