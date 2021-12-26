{config_load file="test.conf" section="setup"}

{include file="header.tpl" title="foo"}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if} 

<div class="row">
    
    <div class="col-md-12">
        

                
                <table class="table">
                    <tr>
                        <td>
                           <h2>Have you hired a professional on Araam for your project?</h2>
                           <p></p>
                           <p>No, because...</p>
                           
                           <form name="form01" method="post" action="{#site_root#}/dashboard/id-{$id}/ac-cancel">
                               <input type="hidden" name="id" value="{$id}" />
                               <div class="inner-radio">
                               {html_radios name='cancelreason' options=$gr_cancelreason selected='' separator=' ' class="radio"}
                               </div> 
                               <input class="btn btn-primary" type="submit" value="Submit" name="submit01">
                               
                               
                               
                           </form>
                        </td>
                    </tr>
                </table>
            
            
        
    </div>
</div>

{include file="footer.tpl"} 