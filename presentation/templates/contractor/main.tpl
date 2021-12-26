{config_load file="test.conf" section="setup"}

{include file="contractorheader.tpl" title="foo"}

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
        <p><br />You have {$points} available credits.</p>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">New Leads</a></li>
            <li><a data-toggle="tab" href="#tab1">Quoted</a></li>
            <li><a data-toggle="tab" href="#tab2">Awarded Projects</a></li>
            <li><a data-toggle="tab" href="#tab3">Completed Projects</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <h3>New Leads</h3>
                <!--<table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
                    </tr>-->
                    {foreach from=$data1 key=myId item=i}
                        <div class="project-box">
                            <p><a class="btn btn-primary" href="{#site_root#}/contractor/controlpanel/id-{$i.id}/ac-bid">Quote</a> 
                            <button type="button" class="btn btn-default">Available</button>
                            </p>
                            <p>Looking for {$subservices[$i.subservice_id]}</p>
                            <p>{$i.area} in {$areas[$i.area_id]}</p>
                            
                            <p>By {$i.requestby}</p>
                            
                            

                            <p>Dated {$i.datecreated}</p>
                        </div>
                    {/foreach}
                
            </div>
                    <div id="tab1" class="tab-pane fade">
                <h3>Quoted</h3>
                <!--
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
                    </tr>-->
                    {foreach from=$data4 key=myId item=i}
                        <div class="project-box">
                            <p><a class="btn btn-primary" href="{#site_root#}/contractor/controlpanel/id-{$i.id}/ac-bid">View</a> 
                            <button type="button" class="btn btn-default">{$i.approved}</button>
                            </p>
                            <p>Looking for {$subservices[$i.subservice_id]}</p>
                            <p>{$i.area} in {$areas[$i.area_id]}</p>
                            
                            <p>By {$i.requestby}</p>

                            <p>Dated {$i.datecreated}</p>
                        </div>
                    {/foreach}
                
            </div>
            <div id="tab2" class="tab-pane fade">
                <h3>Awarded Projects</h3>
                <!--
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
                    </tr>-->
                    {foreach from=$data2 key=myId item=i}
                        <div class="project-box">
                            <p><a class="btn btn-primary" href="{#site_root#}/contractor/controlpanel/id-{$i.id}/ac-bid">View</a> 
                            <button type="button" class="btn btn-default">{$i.approved}</button>
                            </p>
                            <p>Looking for {$subservices[$i.subservice_id]}</p>
                            <p>{$i.area} in {$areas[$i.area_id]}</p>
                            
                            <p>By {$i.requestby}</p>

                            <p>Dated {$i.datecreated}</p>
                        </div>
                    {/foreach}
                
            </div>
            <div id="tab3" class="tab-pane fade">
                <h3>Completed Projects</h3>
                <!--
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Service</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Person</th>
                        <th>Created</th>
                    </tr>-->
                    {foreach from=$data3 key=myId item=i}
                        <div class="project-box">
                            <p><a class="btn btn-primary" href="{#site_root#}/contractor/controlpanel/id-{$i.id}/ac-bid">View</a> 
                            <button type="button" class="btn btn-default">{$i.approved}</button>
                            </p>
                            <p>Looking for {$subservices[$i.subservice_id]}</p>
                            <p>{$i.area} in {$areas[$i.area_id]}</p>
                            
                            <p>By {$i.requestby}</p>

                            <p>Dated {$i.datecreated}</p>
                        </div>
                    {/foreach}
                
            </div>
        </div>
    </div>

</div>


<!-- end contents -->
{include file="contractorfooter.tpl"} 