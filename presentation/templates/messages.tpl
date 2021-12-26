{* not in use *}
{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{* debug *}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    
    <div class="col-md-12">
        <h2>{$messagetitle}</h2>
        {$messagedetails}
    </div>
    
</div>
{include file="footer.tpl"}