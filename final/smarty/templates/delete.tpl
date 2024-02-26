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
    <form {$form.attributes}>
      <br>
      {$message}
      <br><br>
      {$form.submit.html}
      <input type="hidden" name="type"   value="{$type}">
      <input type="hidden" name="action" value="{$action}">
    </form>
  </div>
  <hr>
  <div style="text-align: left; margin-left: 20px;">
    [ <a href="index.php">キャンプ場一覧ページへ</a> ]
  </div>
</body>
</html>
