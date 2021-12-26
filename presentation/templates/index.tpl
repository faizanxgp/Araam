{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{if $message}
    <div class="message alert alert-info">{$message}</div>
{/if}

{#site_root#}

{*debug*}
{foreach from=$records key=myId item=i}
    <li>{$myId} {$i.pid}: {$i.pname}</li>
{/foreach}








<!-- end contents -->
{include file="footer.tpl"} 