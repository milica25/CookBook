<?php
/* Smarty version 3.1.33, created on 2019-03-19 12:15:05
  from 'C:\xampp\htdocs\srdjan\Social Network\Faza4\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c90cf39e9f545_60208136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3fc9b47a65f09b091df5b0c354ad9f5ce69698' => 
    array (
      0 => 'C:\\xampp\\htdocs\\srdjan\\Social Network\\Faza4\\views\\dashboard.tpl',
      1 => 1552994089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c90cf39e9f545_60208136 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Social network</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="bodyclass">
	<header id="header1">
			<h2>Social network</h2>
			<div class="userset">
				<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
'>
				<img src="images/face1.jpg">
				<p class="imekorisnika"><?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
</p>
				</a>
				<a href="logout.php"><input type="submit" name="logout" value="logout"></a>
			</div>
	</header>
	<main id="main2">
		<div class="userpost">
			<form action="dashboard.php" method="post">
				<textarea name="inputPost" rows="4" cols="40"></textarea><br>
				<select name="privateStatus">
					<option value="public">Public</option>
					<option value="private">Private</option>
				</select>
				<input type="submit" name="insertPost" value="Postavi status">
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
		<div class='userpost'>
			
			<!-- Iscitavanje postova -->
			
			<div class='userset'>
					<img src='images/face1.jpg'><a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
'><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastName'];?>
</a>
			</div><br>
				<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
<p><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</p>
			</div>
			<?php
}
}
?>

			
	</main>

</body>
</html><?php }
}
