<?php
/* Smarty version 3.1.30, created on 2023-07-30 22:07:25
  from "/Applications/XAMPP/xamppfiles/final/smarty/templates/message.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64c6608d9770f2_58042242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ab9b1bd6edf0f7e3a4b669633333ccb07460359' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/final/smarty/templates/message.tpl',
      1 => 1690380610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c6608d9770f2_58042242 (Smarty_Internal_Template $_smarty_tpl) {
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
<br>
  <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<br>
<hr>
<div style="text-align: left; margin-left: 20px;">
  [ <a href="index.php">キャンプ場一覧ページへ</a> ]
</div>
</body>
</html>
<?php }
}
