{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}

{*debug*}

{if $message}
    <div class="row">
        <div class="col-md-12 message">{$message}</div>
    </div>
{/if}

<div class="row">
    <div class="col-md-3">
        {include file="adminleftbar.tpl" title="foo"}

    </div>
    <div class="col-md-9">
        <h2>Newsleter</h2>
        <script type="text/javascript" src="{#site_root#}/web/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
        "advlist autolink lists link image    hr anchor ",
        "    code fullscreen",
        " media   table  ",
        "  paste textcolor "
    ],
            convert_urls:true,
            relative_urls:false,
            remove_script_host:false,
            theme_advanced_buttons1 : "table",
            tools: "inserttable"
         });
        </script>
		
        <form method="post" action="index.php?admin/newsletter&action={$path}">
            <table>
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Name</td><td><input type="text" name="name" id="name" maxlength="255" value="{$d.name}"></td></tr>
                <tr><td class="td_title">Subject</td><td><input type="text" name="subject" id="subject" maxlength="255" value="{$d.subject}"></td></tr>
                <tr><td class="td_title">Content</td><td>
                        <textarea name="content" id="content" rows="20" cols="120">
                            {$d.content}
                        </textarea>
                    </td></tr>
                
                <tr><td class="td_title">Type</td><td><span class="radio">{html_radios name='type' options=$gr_type2 selected=$d.type separator=' ' class="inner"}</span></td></tr>
                                
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 