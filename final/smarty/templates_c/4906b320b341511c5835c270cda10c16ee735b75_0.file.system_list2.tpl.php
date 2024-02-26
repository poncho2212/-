<?php
/* Smarty version 3.1.30, created on 2023-07-24 19:22:43
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/system_list2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64be50f3905ec1_58902535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4906b320b341511c5835c270cda10c16ee735b75' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/system_list2.tpl',
      1 => 1690189820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64be50f3905ec1_58902535 (Smarty_Internal_Template $_smarty_tpl) {
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

    <table style="margin: 0 auto; width: 50%;">
      <tr>
      	<td style="vertical-align: top;">
	<br>
	<br>
      	</td>
        <td>
        <p style="text-align: center;">
            [ <a href="index.php?type=regist&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">新規登録</a> ]
        </p>
<br>

<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
サイト名・都道府県・立地（海・川・山・湖）での検索が可能です。<br>
<input type="text" name="search_key" value="<?php echo $_smarty_tpl->tpl_vars['search_key']->value;?>
">
<input type="submit" name="submit" value="検索する">
<input type="hidden" name="type" value="list">
<input type="hidden" name="action" value="form">
</form>



検索結果は<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
件です。<br>
<br>
<?php echo $_smarty_tpl->tpl_vars['links']->value;?>

<?php if (($_smarty_tpl->tpl_vars['data']->value)) {?>
<table border="0">
<tbody>
<tr><th>番号</th><th></th><th>キャンプ場名</th></tr>
<tr class="table-divider"><td colspan="6"></td></tr>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
<td>
<?php if (isset($_smarty_tpl->tpl_vars['item']->value['s_image'])) {?>
<img src="data:image/png;base64,<?php echo $_smarty_tpl->tpl_vars['item']->value['s_image'];?>
" alt="画像はアップロードされていません" width="150px" height="100px">
<?php } else { ?>
    <div style="width: 150px; height: 100px; border: 1px solid grey; display: flex; align-items: center; justify-content: center;">
        <p>画像なし</p>
    </div>
<?php }?>
</td>
<td><a href="index.php?type=detail&action=confirm&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];
echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
"><span class="sitename"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['sitename'], ENT_QUOTES, 'UTF-8', true);?>
</span></a><br>
    <?php echo $_smarty_tpl->tpl_vars['item']->value['ken'];?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['item']->value['nature'];?>
</td>

<td>[<a href="index.php?type=modify&action=form&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];
echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">更新</a>]</td>
<td>[<a href="index.php?type=delete&action=confirm&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];
echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">削除</a>]</td>
</tr>
<tr class="table-divider"><td colspan="6"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</tbody></table>
<?php }?>
</td>
</tr>
</table>
</div>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
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
<?php }
}
