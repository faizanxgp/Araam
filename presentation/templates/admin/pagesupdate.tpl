{config_load file="test.conf" section="setup"}

{include file="adminheader.tpl" title="foo"}

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
        <h2>Page</h2>
        <script type="text/javascript" src="{#site_root#}/web/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea"
         });
        </script>
        
        <form method="post" action="index.php?admin/pages&action={$path}">
            <table>
                <tr><td class="td_title">Id</td><td><input type="text" name="id" id="id" maxlength="11" value="{$d.id}" readonly=""></td></tr>
                <tr><td class="td_title">Page Title</td><td><input type="text" name="page_title" id="page_title" maxlength="255" value="{$d.page_title}"></td></tr>
                <tr><td class="td_title">URL</td><td><input type="text" name="url" id="url" maxlength="255" value="{$d.url}"></td></tr>
                <tr><td class="td_title">Keywords</td><td><input type="text" name="keywords" id="keywords" maxlength="255" value="{$d.keywords}"></td></tr>
                <tr><td class="td_title">Description</td><td><input type="text" name="description" id="description" maxlength="255" value="{$d.description}"></td></tr>
                
                <tr><td class="td_title">Body</td><td><textarea name="body" id="body" rows="10" cols="80">{$d.body}</textarea></td></tr>
                
                <tr><td class="td_title">Status</td><td><span class="radio">{html_radios name='status' options=$gr_status selected=$d.status separator=' ' class="inner"}</span></td></tr>
                <tr><td colspan="2"><p align="center"><input class="btn btn-primary" type="submit" value="Submit" name="submit01"> <input class="btn" type="reset" value="Reset" name="reset01"></td></tr>
            </table>
        </form>
    </div>

</div>
<!-- end contents -->
{include file="adminfooter.tpl"} 