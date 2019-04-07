<?php
/* Smarty version 3.1.33, created on 2019-04-04 20:28:56
  from 'C:\xampp\htdocs\srdjan\AlmostDone\views\editProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca64ce8729421_66315383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb62386a40aba0e29a5c1fb0ec06006ca6704f56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\srdjan\\AlmostDone\\views\\editProfile.tpl',
      1 => 1554227766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca64ce8729421_66315383 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    <header id="header1">
            <a href="dashboard.php"><h2>Social network</h2></a>
            <div class="userset">
                <a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
'>
                <?php if (!empty($_smarty_tpl->tpl_vars['userimg']->value)) {?>
                <img src="userimg/<?php echo $_smarty_tpl->tpl_vars['userimg']->value;?>
">
                <?php } else { ?>
                <img src="images/user1.jpg">
                <?php }?>
                <p class="imekorisnika"><?php echo $_smarty_tpl->tpl_vars['usernameLog']->value;?>
</p>
                </a>
                <a href="logout.php"><input type="submit" name="logout" value="logout"></a>
            </div>
    </header>
    <div id="editProfileDiv">
        <form action="editProfile.php" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: flex-start;">
            <input type="text" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
" placeholder="Ime">
            <input type="text" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
" placeholder="Prezime">
            <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" placeholder="Username">
            <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="Email">
            <input type="file" name="file" id="userimg" value="dodaj sliku">
            <!--<input type="text" name="residence" value="<?php echo $_smarty_tpl->tpl_vars['residence']->value;?>
" placeholder="Mesto prebivalista">
            <input type="text" name="birthday" value="<?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
" placeholder="Datum rodjenja">-->
            <input type="submit" name="save"  value="Sačuvaj izmene">
        </form>
    </div>
</body>
</html><?php }
}
