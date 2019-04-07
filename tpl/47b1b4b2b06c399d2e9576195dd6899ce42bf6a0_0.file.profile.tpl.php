<?php
/* Smarty version 3.1.33, created on 2019-04-01 13:45:50
  from 'C:\xampp\htdocs\IT bootcamp\Faza5\Faza5\views\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca1f9ee451b83_66667844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b1b4b2b06c399d2e9576195dd6899ce42bf6a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\IT bootcamp\\Faza5\\Faza5\\views\\profile.tpl',
      1 => 1554119144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca1f9ee451b83_66667844 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Profile Page</title>
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
		<h1 id="userHeading"><?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
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
			<?php if ($_smarty_tpl->tpl_vars['username']->value == $_smarty_tpl->tpl_vars['usernameLog']->value) {?>
			<div class="edContainer">
				<?php if (!empty($_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'])) {?>
			<img src="uploaded/<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'];?>
" alt="post slika" />
			<?php }?>
				<a class='delete' href="deletePost.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" onclick="return confirm('Potvrdite brisanje posta')"><i class="fas fa-trash-alt"></i></a>

				<a class="edit" href='editPost.php?postText=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
&userId=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['userId'];?>
&postId=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
'>Edit post</a>
				
			</div>
			<?php }?>
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
