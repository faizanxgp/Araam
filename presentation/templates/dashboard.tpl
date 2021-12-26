{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if} 
{if $smessage and $smessage neq ""}
    <div class="row">
        <div class="col-md-12 message">{$smessage}</div>
    </div>
{/if}  
<div class="row">
    
    <div class="col-md-12">
        <p></p>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">My Projects</a></li>
            <li><a data-toggle="tab" href="#tab2">Completed Projects</a></li>

        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <h3>My Projects</h3>
                <!--<table class="table">
                    <tr>
                        <th></th>
                        <th>Area</th>
                        <th>Service</th>
                        <th>Date/Time</th>
                        <th>Status</th>
                    </tr>-->
                {foreach from=$data1 key=myId item=i}
                    <div class="project-box">
                        <p><a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.id}/ac-quotes">Quotes</a> {if $i.approved eq "approved"}<a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.id}/ac-cancel">Cancel</a> {/if}{if $i.approved eq "approved"}<a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.id}/ac-complete">Complete</a>{/if}</p>

                        <p>Looking for: {$i.subservice}</p>
                        <p>in {$i.area} of {$i.city}</p>
                        <p>Created On: {$i.datecreated}</p>
                        <p>Status: {$i.approved}</p>
                    </div>
                {/foreach}

            </div>
            <div id="tab2" class="tab-pane fade">
                <h3>Completed Projects</h3>
                {foreach from=$data2 key=myId item=i}
                    <div class="project-box">
                        <p><a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.id}/ac-quotes">Quotes</a> {if $i.approved eq "approved"}<a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.id}/ac-cancel">Cancel</a> {/if}{if $i.approved eq "approved"}<a class="btn btn-primary" href="{#site_root#}/dashboard/id-{$i.id}/ac-complete">Complete</a>{/if}</p>

                        <p>Looking for: {$i.subservice}</p>
                        <p>in {$i.area} of {$i.city}</p>
                        <p>Created On: {$i.datecreated}</p>
                        <p>Status: {$i.approved}</p>
                    </div>
                {/foreach}
            </div>

        </div>
    </div>
</div>

{include file="footer.tpl"} 