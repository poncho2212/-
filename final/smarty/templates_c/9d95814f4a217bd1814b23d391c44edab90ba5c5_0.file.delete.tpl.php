<?php
/* Smarty version 3.1.30, created on 2023-07-30 01:23:33
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/delete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64c53d058c44d3_10715779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d95814f4a217bd1814b23d391c44edab90ba5c5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/delete.tpl',
      1 => 1690380598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c53d058c44d3_10715779 (Smarty_Internal_Template $_smarty_tpl) {
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
