{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}



{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if} 



<div class="row main-page2">
    <div class="col-md-12">
        <div class="big-box">
            <h1>Great! We're on it.</h1>
        </div>

        <h2 class="center">We are reaching out professionals in your area who are qulaified to do this job</h2>
        <p>&nbsp;</p>
        <h3>What’s next?</h3>
        <ul>
            <li>Qualified professionals will respond to your request with a custom quote usually within 24 hours.</li>
            <li>You will get 5 quotes from different professionals.</li>
            <li>You can talk to the professionals on our in built message system for more info.</li>
            <li>Compare and book who is best for you!</li>
        </ul>

        <h3>Quote will include</h3>
        <ul>
        <li>Estimate</li>
        <li>Message</li>
        <li>Reviews</li>
        <li>Profile</li>
        <li>Contact</li>
        </ul>
        
        <p><a href="{#site_root#}/dashboard" class="btn btn-primary">Visit your Dashboard</a></p>





    </div>


</div>

{include file="footer.tpl"} 