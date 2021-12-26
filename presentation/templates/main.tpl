{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo" showHeader="Yes"}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}
{if $message2}
    <div class="row">
        <div class="col-md-12 message">{$message2}</div>
    </div>
{/if}
</div></div>

<div class="container main-page">
<div class="row">
    <div class="col-md-12 center">
        <h2>The faster and easier way to hire services in Pakistan</h2>
        <div class="main-box">
        <form method="post" action="{#site_root#}/main/ac-page2">
            <!--
            <input type="text" name="category" />
            <input type="text" name="area" />
            -->
            <div class="service">
            <label>What services do you need?</label>
            <input type="text" name="services" class="biginput" id="services" required="" value="" />
            <div id='areaidfield'></div>
            <p class="tips">Plumbing, Electrical, Interior Design</p>    
            
            
            </div>
            <div class="area">
            <label>Where do you need it?</label>
            <input type="text" name="areas" class="biginput" id="areas" required="" value="" />
            <div id='serviceidfield'></div>
            <p class="tips">Available in Lahore, Islamabad and Rawalpindi</p></div>
            <div class="submit">
                <label>&nbsp;</label>
            <input type="submit" value="Get free quotes" class="btn btn-primary" />
            </div>
        </form>
        </div>
        
        <p>Get up to 5 custom quotes to compare & hire the best. </p>
        <p>Quick. Easy. Free.</p>
        <p>Cras ornare vulputate velit a luctus. Nam molestie gravida dolor. Maecenas consectetur est bibendum, varius justo et, aliquet justo. Aliquam eget felis eget risus rhoncus pellentesque in at dui. Nunc rhoncus semper nibh vel pharetra. Duis nibh quam, bibendum nec consequat eget, egestas eget urna. Vivamus sit amet convallis dui. Sed a dui vel erat dapibus dictum ac eget elit. Curabitur mollis turpis vel lorem pretium consequat. Nunc elementum augue quis tempor sodales. Aenean eleifend risus nec tellus suscipit dictum. Nunc aliquet nec orci sit amet ultrices. Aliquam ultrices dolor at risus tristique, vitae feugiat justo hendrerit.</p>

    </div>
    

</div>
</div>
<div class="container workers-page">

<div class="row ">
    <div class="col-md-12 center">
        <h2>Apply to become a Service Provider now</h2>
        <p>Are you a service provider? <br />
        Potential clients are looking for you right now. <br />
        Signup for FREE!</p>
        <p><a class="btn btn-primary" href="{#site_root#}/contractors/ac-signup">Signup as Service Provider</a></p>
        
        
    </div>
</div>
</div><div>
<!-- end contents -->
{include file="footer.tpl"}