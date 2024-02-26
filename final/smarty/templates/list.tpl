<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong>{$title}</strong>
<hr>
<p style="text-align: center;">
    [ <a href="index.php?type=regist&action=form{$add_pageID}">新規登録</a> ]
</p>
<br>

<form {$form.attributes}>
サイト名・都道府県・立地（海・川・山・湖）での検索が可能です。<br>
<input type="text" name="search_key" value="{$search_key}">
<input type="submit" name="submit" value="検索する">
<input type="hidden" name="type" value="list">
<input type="hidden" name="action" value="form">
</form>
検索結果は{$count}件です。<br>
<br>

{$links}
{if ($data) }
    <table border="0" style="margin: 0 auto; width: 500px;">
    <tbody>
    <tr><th>番号</th><th></th><th>キャンプ場名</th></tr>
    <tr class="table-divider"><td colspan="6"></td></tr>
    {foreach item=item from=$data}
        <tr>
            <td>{$item.id}</td>
            <td>
            {if isset($item.s_image)}
                <img src="data:image/png;base64,{$item.s_image}" alt="アップロードされた画像" width="150px" height="100px">
            {else}
                <div style="width: 150px; height: 100px; border: 1px solid grey; display: flex; align-items: center; justify-content: center;">
                    <p>画像なし</p>
                </div>
            {/if}
            </td>
            <td style="white-space: normal; width: 200px;">
                <a href="index.php?type=detail&action=confirm&id={$item.id}{$add_pageID}"><span class="sitename">{$item.sitename|escape:"html"}</span></a><br>
                {if isset($item.ken)}
                    {$item.ken}<br>
                {/if}
                {if isset($item.nature)}
                    {$item.nature}</td>
                {/if}
            <td>[<a href="index.php?type=modify&action=form&id={$item.id}{$add_pageID}">更新</a>]</td>
            <td>[<a href="index.php?type=delete&action=confirm&id={$item.id}{$add_pageID}">削除</a>]</td>
        </tr>
        <tr class="table-divider"><td colspan="6"></td></tr>
    {/foreach}
    </tbody></table>
{/if}
</div>
</body>
<style>
    .sitename {
        font-size: 20px;
    }
    .table-divider td {
        border-bottom: 1px solid black;
    }
</style>
</html>
