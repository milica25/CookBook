<?php
/* Smarty version 3.1.33, created on 2019-04-01 13:36:24
  from 'C:\xampp\htdocs\IT bootcamp\Faza5\Faza5\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1f7b8016dd0_40720681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cab64aab064647680fc7994e67b6bcda431e7dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\IT bootcamp\\Faza5\\Faza5\\views\\dashboard.tpl',
      1 => 1554118484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1f7b8016dd0_40720681 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Social network</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="dashboard">
	<header id="header1">
			<img src="images/cookbook_logo_white.png" alt="cookBook logo image">
			<div class="userset">
				<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
'>
				<img src="images/user1.jpg"></a>
				<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
' class="imekorisnika"><?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
</a>
				<a href="logout.php"><input type="submit" name="logout" value="logout"></a>
			</div>
	</header>
	<main id="main2">
		<div class="userpost">
			<form action="dashboard.php" method="post" enctype="multipart/form-data">
				<textarea name="inputPost" rows="4" cols="40"></textarea><br>
				<select name="privateStatus">
					<option value="public">Public</option>
					<option value="private">Private</option>
				</select>
				<input type="file" name="file" id="image" value="dodaj sliku">
				<input type="submit" name="insertPost" value="Postavi">
			</form>
		</div>
		<?php echo $_smarty_tpl->tpl_vars['postSuccessMessage']->value;?>

		<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<div class='userposted'>	
			<!-- Iscitavanje postova -->
			<img  class="userImg" src='images/user1.jpg'>
			<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
'><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastName'];?>
</a>
			<p class="content"><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</p>
			<?php if (!empty($_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'])) {?>
			<img src="uploaded/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'];?>
" alt="post slika" />
			<?php }?>
			<p><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</p>
		</div>
		<?php
}
}
?>

			
	</main>
	<!--java script code for preventing resubmission when refreshing the page-->
        <?php echo '<script'; ?>
>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        <?php echo '</script'; ?>
>

</body>
</html><?php }
}
