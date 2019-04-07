<?php
/* Smarty version 3.1.33, created on 2019-03-19 18:48:38
  from 'C:\xampp\htdocs\srdjan\Social Network\Faza4\views\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c912b76ae73a1_47768703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dbffc57d3fcd13e46aff18fcc2577267e6b6519' => 
    array (
      0 => 'C:\\xampp\\htdocs\\srdjan\\Social Network\\Faza4\\views\\profile.tpl',
      1 => 1553017709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c912b76ae73a1_47768703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="bodyclass">
	<header id="header1">
			<a href="dashboard.php"><h2>Social network</h2></a>
			<div class="userset">
				<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['usernameLog']->value;?>
'>
				<img src="images/face1.jpg">
				<p class="imekorisnika"><?php echo $_smarty_tpl->tpl_vars['fullNameLog']->value;?>
</p>
				</a>
				<a href="logout.php"><input type="submit" name="logout" value="logout"></a>
			</div>
	</header>
	<div>
		<img src="images/face1.jpg">
		<h1><?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
</h1>
		
	</div>
	<main id="main2">
		<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['userData']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<div class='userpost'>
			
			<!-- Iscitavanje postova -->
			
			<div class='userset'>
					<img src='images/face1.jpg'><a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
'><?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastName'];?>
</a>
			</div><br>
				<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
<p><?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
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
