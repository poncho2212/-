<?php
/* Smarty version 3.1.30, created on 2023-07-30 22:07:27
  from "/Applications/XAMPP/xamppfiles/final/smarty/templates/siteinfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64c6608fa9bf04_36020304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfcd930168e4f70780e0578b099a1263a3d4238c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/final/smarty/templates/siteinfo.tpl',
      1 => 1690458331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c6608fa9bf04_36020304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo '<script'; ?>
 type="text/javascript" src="js/quickform.js" async><?php echo '</script'; ?>
>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong>
<hr>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
  <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

  <div style="margin: 0 auto; width: 80%; margin-left: -100px;">
  <table style="table-layout: fixed; width: 100%;">
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['sitename']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['sitename']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['sitename']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['sitename']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['ken']['error'])) {?>
        <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['error'];?>
</div><br>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['fees']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['fees']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['fees']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['fees']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['required_time']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['required_time']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['required_time']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['required_time']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['cancel']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['cancel']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['cancel']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['cancel']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['nature']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['nature']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['nature']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['nature']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['cleanliness_restrooms']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['cleanliness_restrooms']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['cleanliness_restrooms']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['cleanliness_restrooms']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['bidet']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['bidet']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['bidet']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['bidet']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['showers']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['showers']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['showers']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['showers']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['shop']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['shop']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['shop']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['shop']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['ice_vending']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['ice_vending']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['ice_vending']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['ice_vending']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['drinking']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['drinking']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['drinking']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['drinking']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['garbage']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['garbage']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['garbage']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['garbage']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['parking']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['parking']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['parking']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['parking']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['space']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['space']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['space']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['space']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['check_in']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['check_in']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['check_in']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['check_in']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['check_out']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['check_out']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['check_out']['error'];?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['check_out']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['comment']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['comment']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['comment']['error'];?>
</div><br>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['comment']['html'];?>
</td>
    </tr>
    <tr>
      <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['link']['label'];?>
：</td>
      <td style="text-align:left;">
        <?php if (isset($_smarty_tpl->tpl_vars['form']->value['link']['error'])) {?>
          <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['link']['error'];?>
</div><br>
        <?php }?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable2=ob_get_clean();
if (($_prefixVariable1 == 'modify' || $_prefixVariable2 == 'regist')) {?>
          <?php echo $_smarty_tpl->tpl_vars['form']->value['link']['html'];?>

        <?php }?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['link']->value;
$_prefixVariable3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable4=ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['link']->value) && $_prefixVariable3 != '' && $_prefixVariable4 == 'detail')) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" style="text-decoration: none; color: blue;"><?php echo $_smarty_tpl->tpl_vars['form']->value['link']['html'];?>
</a>
        <?php }?></td>
    </tr>
    <tr>
      <td style="vertical-align: top; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['s_image']['label'];?>
：</td>
      <td style="text-align: left;">
        <?php if (isset($_smarty_tpl->tpl_vars['f_message']->value)) {?>
          <div style="color: red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['f_message']->value;?>
</div>
        <?php }?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable5=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_prefixVariable6=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable7=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_prefixVariable8=ob_get_clean();
if (($_prefixVariable5 == 'modify' && $_prefixVariable6 != 'complete') || ($_prefixVariable7 == 'regist' && $_prefixVariable8 != 'complete')) {?>
          <?php echo $_smarty_tpl->tpl_vars['form']->value['s_image']['html'];?>

          <?php if (($_smarty_tpl->tpl_vars['form']->value['submit3']['attribs']['value'] != '')) {?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['submit3']['html'];?>

          <?php }?>
        <?php }?>
      </td>
    </tr>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['image_data']->value;
$_prefixVariable9=ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['image_data']->value) && $_prefixVariable9 != '')) {?>
      <tr>
        <td></td>
        <td style="text-align: left;">
          <img src="data:image/png;base64,<?php echo $_smarty_tpl->tpl_vars['image_data']->value;?>
" alt="アップロードされた画像">
        </td>
      </tr>
    <?php }?>
    <tr>
      <td>&nbsp; </td>
      <td>
        <?php if (($_smarty_tpl->tpl_vars['form']->value['submit2']['attribs']['value'] != '')) {?>
          <?php echo $_smarty_tpl->tpl_vars['form']->value['submit2']['html'];?>
　
        <?php } elseif (($_smarty_tpl->tpl_vars['form']->value['reset']['attribs']['value'] != '')) {?>
          <?php echo $_smarty_tpl->tpl_vars['form']->value['reset']['html'];?>
　
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['form']->value['submit']['attribs']['value'] != '')) {?>
          <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>
　
        <?php }?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable10=ob_get_clean();
if ($_prefixVariable10 == 'detail') {?>
          [<a href="index.php?type=modify&action=form&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">更新</a>]
          [<a href="index.php?type=delete&action=confirm&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">削除</a>]
        <?php }?>
        <input type="hidden" name="type"   value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
      </td>
    </tr>
  </table>
  </div>
  <br>
</form>
</div>
<?php if ($_smarty_tpl->tpl_vars['form']->value['javascript']) {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['javascript'];?>

<?php }?>
<hr>
<div style="text-align: left; margin-left: 20px;">
  [ <a href="index.php">キャンプ場一覧ページへ</a> ]
</div>
<br>
</body>
</html><?php }
}
