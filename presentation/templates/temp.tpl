{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo" showHeader="Yes"}

{*debug*}

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

<div class="row">
    <div class="col-md-6">
        <div id="w">
            <div id="content">
                <h1>World Currencies Autocomplete Search</h1>
                <p>Just start typing and results will be supplied from the JavaScript. Check out <a href="https://github.com/devbridge/jQuery-Autocomplete">jQuery Autocomplete</a> on Github.</a></p>

                <div id="searchfield">
                    <form>
                        <input type="text" name="currency" class="biginput" id="autocomplete">
                        
                        <input type="text" name="services" class="biginput" id="services">
                        <input type="text" name="areas" class="biginput" id="areas">
                    
                    </form>
                </div><!-- @end #searchfield -->

                <div id="outputbox">
                    <p id="outputcontent">Choose a currency and the results will display here.</p>
                </div>
            </div><!-- @end #content -->
        </div><!-- @end #w -->


    </div>
    <div class="col-md-6">
        <h2>What are you looking for?</h2>
        <form method="post" action="index.php?main&action=page2">
            <input type="text" name="category" />
            <input type="text" name="area" />
            <input type="submit" />
        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p><p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>


    </div>
</div>
<!-- end contents -->
{include file="footer.tpl"}