{if isset($showAddress)}
    <h3>My Details</h3>
    <div id="address">
        <strong>Name:</strong> <br />
        {$userdata.firstname} {$userdata.lastname} <br /><br />
        <strong>Mobile:</strong> <br />
        {$userdata.phone} {$userdata.mobile} <br /><br />
        <strong>Address:</strong><br />
        {$userdata.address} <br /><br />
        <strong>Area:</strong><br />
        {if $ddata.city neq "Karachi"}
            <strong>Outside Karachi</strong>
        {else}
        {if $userdata.area == "" or $userdata.area == "DHA" or $userdata.area == "Clifton" or $userdata.area == "Other" or $userdata.area == "Please Select" or ($userdata.area == "NA" and $userdata.city == "Karachi") }
            <span class="red">For quick & accurate delivery, please <a href="index.php?myaccount&action=update">UPDATE AREA</a>. Thank you.</span><br /><br />
        {else}
        <strong>{$userdata.area} </strong><br />
        {/if}
        <strong>{$userdata.city} </strong>
        {/if}
        <br /><br />
        <strong>Directions:</strong> <br />
        {$userdata.directions} <br /><br />
        
        Is this info correct? <a href="index.php?myaccount&action=update">Update</a>
    </div>
{/if}