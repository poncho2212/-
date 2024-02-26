<!DOCTYPE html>
<html lang="ja">
<head>
<title>{$title}</title>
<script type="text/javascript" src="js/quickform.js" async></script>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong>{$title}</strong>
<hr>
{$message}
<form {$form.attributes}>
  {$form.hidden}
  <div style="margin: 0 auto; width: 80%; margin-left: -100px;">
  <table style="table-layout: fixed; width: 100%;">
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.sitename.label}：</td>
      <td style="text-align:left;">
        {if isset($form.sitename.error)}
          <div style="color:red; font-size: smaller;">{$form.sitename.error}</div>
        {/if}
        {$form.sitename.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.ken.label}：</td>
      <td style="text-align:left;">
        {if isset($form.ken.error)}
        <div style="color:red; font-size: smaller;">{$form.ken.error}</div><br>
        {/if}
        {$form.ken.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.fees.label}：</td>
      <td style="text-align:left;">
        {if isset($form.fees.error)}
          <div style="color:red; font-size: smaller;">{$form.fees.error}</div>
        {/if}
        {$form.fees.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.required_time.label}：</td>
      <td style="text-align:left;">
        {if isset($form.required_time.error)}
          <div style="color:red; font-size: smaller;">{$form.required_time.error}</div>
        {/if}
        {$form.required_time.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.cancel.label}：</td>
      <td style="text-align:left;">
        {if isset($form.cancel.error)}
          <div style="color:red; font-size: smaller;">{$form.cancel.error}</div>
        {/if}
        {$form.cancel.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.nature.label}：</td>
      <td style="text-align:left;">
        {if isset($form.nature.error)}
          <div style="color:red; font-size: smaller;">{$form.nature.error}</div>
        {/if}
        {$form.nature.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.cleanliness_restrooms.label}：</td>
      <td style="text-align:left;">
        {if isset($form.cleanliness_restrooms.error)}
          <div style="color:red; font-size: smaller;">{$form.cleanliness_restrooms.error}</div>
        {/if}
        {$form.cleanliness_restrooms.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.bidet.label}：</td>
      <td style="text-align:left;">
        {if isset($form.bidet.error)}
          <div style="color:red; font-size: smaller;">{$form.bidet.error}</div>
        {/if}
        {$form.bidet.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.showers.label}：</td>
      <td style="text-align:left;">
        {if isset($form.showers.error)}
          <div style="color:red; font-size: smaller;">{$form.showers.error}</div>
        {/if}
        {$form.showers.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.shop.label}：</td>
      <td style="text-align:left;">
        {if isset($form.shop.error)}
          <div style="color:red; font-size: smaller;">{$form.shop.error}</div>
        {/if}
        {$form.shop.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.ice_vending.label}：</td>
      <td style="text-align:left;">
        {if isset($form.ice_vending.error)}
          <div style="color:red; font-size: smaller;">{$form.ice_vending.error}</div>
        {/if}
        {$form.ice_vending.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.drinking.label}：</td>
      <td style="text-align:left;">
        {if isset($form.drinking.error)}
          <div style="color:red; font-size: smaller;">{$form.drinking.error}</div>
        {/if}
        {$form.drinking.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.garbage.label}：</td>
      <td style="text-align:left;">
        {if isset($form.garbage.error)}
          <div style="color:red; font-size: smaller;">{$form.garbage.error}</div>
        {/if}
        {$form.garbage.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.parking.label}：</td>
      <td style="text-align:left;">
        {if isset($form.parking.error)}
          <div style="color:red; font-size: smaller;">{$form.parking.error}</div>
        {/if}
        {$form.parking.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.space.label}：</td>
      <td style="text-align:left;">
        {if isset($form.space.error)}
          <div style="color:red; font-size: smaller;">{$form.space.error}</div>
        {/if}
        {$form.space.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.check_in.label}：</td>
      <td style="text-align:left;">
        {if isset($form.check_in.error)}
          <div style="color:red; font-size: smaller;">{$form.check_in.error}</div>
        {/if}
        {$form.check_in.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.check_out.label}：</td>
      <td style="text-align:left;">
        {if isset($form.check_out.error)}
          <div style="color:red; font-size: smaller;">{$form.check_out.error}</div>
        {/if}
        {$form.check_out.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.comment.label}：</td>
      <td style="text-align:left;">
        {if isset($form.comment.error) }
          <div style="color:red; font-size: smaller;">{$form.comment.error}</div><br>
        {/if}
        {$form.comment.html}</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;">{$form.link.label}：</td>
      <td style="text-align:left;">
        {if isset($form.link.error) }
          <div style="color:red; font-size: smaller;">{$form.link.error}</div><br>
        {/if}
        {if ({$type}==modify || {$type}==regist)}
          {$form.link.html}
        {/if}
        {if (isset($link) && {$link}!='' && {$type}==detail)}
          <a href="{$link}" style="text-decoration: none; color: blue;">{$form.link.html}</a>
        {/if}</td>
    </tr>
    <tr>
      <td style="vertical-align: top; text-align: right;">{$form.s_image.label}：</td>
      <td style="text-align: left;">
        {if isset($f_message)}
          <div style="color: red; font-size: smaller;">{$f_message}</div>
        {/if}
        {if ({$type}==modify && {$action}!=complete) || ({$type}==regist && {$action}!=complete)}
          {$form.s_image.html}
          {if ( $form.submit3.attribs.value != "" ) }
            {$form.submit3.html}
          {/if}
        {/if}
      </td>
    </tr>
    {if (isset($image_data) && {$image_data}!='')}
      <tr>
        <td></td>
        <td style="text-align: left;">
          <img src="data:image/png;base64,{$image_data}" alt="アップロードされた画像">
        </td>
      </tr>
    {/if}
    <tr>
      <td>&nbsp; </td>
      <td>
        {if ( $form.submit2.attribs.value != "" ) }
          {$form.submit2.html}　
        {else if ( $form.reset.attribs.value != "" )}
          {$form.reset.html}　
        {/if}
        {if ( $form.submit.attribs.value != "" ) }
          {$form.submit.html}　
        {/if}
        {if {$type}==detail}
          [<a href="index.php?type=modify&action=form&id={$id}">更新</a>]
          [<a href="index.php?type=delete&action=confirm&id={$id}">削除</a>]
        {/if}
        <input type="hidden" name="type"   value="{$type}">
        <input type="hidden" name="action" value="{$action}">
      </td>
    </tr>
  </table>
  </div>
  <br>
</form>
</div>
{if $form.javascript}
    {$form.javascript}
{/if}
<hr>
<div style="text-align: left; margin-left: 20px;">
  [ <a href="index.php">キャンプ場一覧ページへ</a> ]
</div>
<br>
</body>
</html>