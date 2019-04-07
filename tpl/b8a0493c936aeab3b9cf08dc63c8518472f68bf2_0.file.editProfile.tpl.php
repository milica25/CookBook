<?php
/* Smarty version 3.1.33, created on 2019-04-05 13:00:21
  from 'C:\xampp\htdocs\IT bootcamp\FinalVersion\AlmostDoneDone\views\editProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca7354538a492_53647178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8a0493c936aeab3b9cf08dc63c8518472f68bf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\IT bootcamp\\FinalVersion\\AlmostDoneDone\\views\\editProfile.tpl',
      1 => 1554462018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7354538a492_53647178 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/editProfile.css">
    <link rel="stylesheet" type="text/css" href="css/editProfile.css">

</head>
<body>
    <header id="header1">
            <a href="dashboard.php"><img src="images/cookbook_logo_white.png" alt="cookBook logo image" class="logo"></a>
            <div class="userset">
                <a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
'>
                <?php if (!empty($_smarty_tpl->tpl_vars['userimg']->value)) {?>
                <img src="userimg/<?php echo $_smarty_tpl->tpl_vars['userimg']->value;?>
">
                <?php } else { ?>
                <img src="images/user1.jpg">
                <?php }?>
                </a>
                <a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
'>
                <p class="imekorisnika"><?php echo $_smarty_tpl->tpl_vars['usernameLog']->value;?>
</p>
                </a>
                <a href="logout.php"><input type="submit" name="logout" value="logout"></a>
            </div>
    </header>
    <main>
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
    </main>
</body>
</html><?php }
}
