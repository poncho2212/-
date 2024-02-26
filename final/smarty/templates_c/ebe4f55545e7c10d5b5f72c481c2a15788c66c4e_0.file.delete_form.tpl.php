<?php
/* Smarty version 3.1.30, created on 2023-07-27 21:33:23
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/delete_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64c264132af758_54701798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe4f55545e7c10d5b5f72c481c2a15788c66c4e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/delete_form.tpl',
      1 => 1690380598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c264132af758_54701798 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div style="text-align:center;">
  <hr>
  <strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong>
  <hr>
    <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
      <br>
      <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

      <br><br>
      <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

      <input type="hidden" name="type"   value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
      <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
    </form>
  </div>
  <hr>
  <div style="text-align: left; margin-left: 20px;">
    [ <a href="index.php">キャンプ場一覧ページへ</a> ]
  </div>
</body>
</html>
<?php }
}
