{config_load file=test.conf section="setup"}
{include file="contractorheader.tpl" title=foo}
<!-- form begin -->
{if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}


{include file="contractorfooter.tpl"} 