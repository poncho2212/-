<?php
/* Smarty version 3.1.30, created on 2023-07-27 15:49:02
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/message.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64c2135e4c01c8_43414432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb78cf9fa7a6faa1db5c13d3d04370177f38cafa' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/message.tpl',
      1 => 1690380610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c2135e4c01c8_43414432 (Smarty_Internal_Template $_smarty_tpl) {
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
