<script type="text/javascript">
    $(function () {
        var services = [
    {if isset($servicedata)}
        {foreach $servicedata as $s}
        { value: "{$s.subservice} - {$s.service}", data: "{$s.id}" },
        {/foreach}
    {/if}
        ];
        var areas = [
    {if isset($areadata)}
        {foreach $areadata as $a}
        { value: "{$a.area}", data: "{$a.id}" },
        {/foreach}
    {/if}
        ];
// setup autocomplete function pulling from currencies[] array
                $('#areas').autocomplete({
                    lookup: areas,
                    onSelect: function (suggestiona) {
                        var thehtml = '<input type="hidden" name="area_id" value="' + suggestiona.data + '" />';
                        $('#areaidfield').html(thehtml);
                    }
                });

// setup autocomplete function pulling from currencies[] array
                $('#services').autocomplete({
                    lookup: services,
                    onSelect: function (suggestionb) {
                        var thehtml = '<input type="hidden" name="subservice_id" value="' + suggestionb.data + '" />';
                        $('#serviceidfield').html(thehtml);
                    }
                });

            });
</script>