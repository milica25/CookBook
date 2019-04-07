<?php
/* Smarty version 3.1.33, created on 2019-04-05 12:26:15
  from 'C:\xampp\htdocs\IT bootcamp\FinalVersion\AlmostDoneDone\views\editPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca72d47e35876_20449637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1b54d5d3fb0195f8dea22342e27f095de278cf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\IT bootcamp\\FinalVersion\\AlmostDoneDone\\views\\editPost.tpl',
      1 => 1554153999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca72d47e35876_20449637 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Post Page</title>
</head>
<body id="editPostBody">
    <form action="editPost.php" method="POST">
    <input type="text" name="editText" value="<?php echo $_smarty_tpl->tpl_vars['currentPost']->value;?>
">
    <input type="hidden" name="postId" value="<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
">
    <input type="submit" name="save" id="saveChanges" value="Sačuvaj izmene">
    <a id="back" href="profile.php">vrati se nazad</a>
    </form>

</body>
</html><?php }
}
