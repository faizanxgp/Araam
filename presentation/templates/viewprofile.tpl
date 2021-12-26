{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <div class="col-md-12">

        <h2>Contractor's Business Profile</h2>

        <div class="row">
            <div class="col-md-3">
                {if $profile.business_logo neq ""}
                    <img class="contractorlogo" src="{#site_root#}/{$profile.business_logo}" alt="logo" />
                    {/if}
            </div>
            <div class="col-md-9">

                <p><strong>Business Name:</strong> <br />{$profile.business_name} <br /><br />
                    <strong>Business Description:</strong> <br />{$profile.business_description}</p>


                <h2>Services Profile</h2> <!-- tabs left -->
                {if $profileservices|count eq 0}
                    Sorry, there are no services to show
                {else}


                    {foreach from=$profileservices key=myId item=i}
                        <div class="service-box">
                            <h3>{$i.service_title}</h3>
                            <p>{$i.service_description}</p>

                            {if $i.image1 neq ""}
                                <a class="fancybox" rel="group" href="{#site_root#}/{$i.image1}">
                                    <img class="thumb" src="{#site_root#}/{$i.image1}" />
                                </a>
                            {/if}
                            {if $i.image2 neq ""}
                                <a class="fancybox" rel="group" href="{#site_root#}/{$i.image2}">
                                    <img class="thumb" src="{#site_root#}/{$i.image2}" />
                                </a>
                            {/if}
                            {if $i.image3 neq ""}
                                <a class="fancybox" rel="group" href="{#site_root#}/{$i.image3}">
                                    <img class="thumb" src="{#site_root#}/{$i.image3}" />
                                </a>
                            {/if}
                            {if $i.image4 neq ""}
                                <a class="fancybox" rel="group" href="{#site_root#}/{$i.image4}">
                                    <img class="thumb" src="{#site_root#}/{$i.image4}" />
                                </a>
                            {/if}
                            {if $i.image5 neq ""}
                                <a class="fancybox" rel="group" href="{#site_root#}/{$i.image5}">
                                    <img class="thumb" src="{#site_root#}/{$i.image5}" />
                                </a>
                            {/if}

                        </div>

                    {/foreach}



                {/if}
            </div>
        </div>
    </div>
</div>
    {include file="footer.tpl"} 