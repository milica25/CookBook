<?php
/* Smarty version 3.1.33, created on 2019-04-05 13:31:53
  from 'C:\xampp\htdocs\IT bootcamp\FinalVersion\AlmostDoneDone\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca73ca9539ca9_79643905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2547195a11cc8ce109b33a2655b377cbcb723fec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\IT bootcamp\\FinalVersion\\AlmostDoneDone\\views\\index.tpl',
      1 => 1554463908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca73ca9539ca9_79643905 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta name="author" content="LSD Team - Nemanja Marin, Srdjan Dimitrijevic, Ana Radojicic, Ivan Josipovic, Milica Tanasijevic" />
    <meta name="description" content="One place for cooking enthusiastic people to connect and share their amazing cooking experiences" />
    <meta name="keywords" content="cookbook, recipes, amazing food, vegeterians, meals, dishes, dinner, breakfast, lunch, raw vegetable, sweets, cookies, amateur cooking, professional cooking" />
    <meta charset="UTF-8">
    <meta name="author" content="LSD Team - Nemanja Marin, Srdjan Dimitrijevic, Ana Radojicic, Ivan Josipovic, Milica Tanasijevic" />
    <meta name="description" content="One place for cooking enthusiastic people to connect and share their amazing cooking experiences" />
    <meta name="keywords" content="cookbook, recipes, amazing food, vegeterians, meals, dishes, dinner, breakfast, lunch, raw vegetable, sweets, cookies, amateur cooking, professional cooking" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"/>
    <title>CookBook - Landing Page</title>
    <link rel="stylesheet" href="css/landing.css"/>
</head>
<body>
	<header id="header1">
		<div class="video">
			<video autoplay loop>
			<source src="videos/cookBook_landing_video.mp4" type="video/mp4" alt="cookbook backgound video" />
			</video>
		</div>
			<img src="images/cookbook_logo_white.png" alt="cookBook logo image">
			<form id="form1" action="processlogin.php" method="post">
<?php if (!empty($_smarty_tpl->tpl_vars['poruka']->value)) {?> 
<?php echo $_smarty_tpl->tpl_vars['poruka']->value;?>

<?php }?>
				<input type="text" name="username" placeholder="Korisnicko ime">
				<input type="password" name="password" placeholder="Sifra">
				<input type="submit" name="login" value="login">
			</form>
	</header>
	<main id="main1">
		<div id="registracija">
			<h3>Registracija</h3>
			<form id="form2" action="processregister.php" method="post">				
				<input type="text" name="ime" placeholder="Unesite vase ime">
				<input type="text" name="prezime" placeholder="Unesite vase prezime">
				<input type="email" name="email" placeholder="Unesite vasu email adresu">
				<input type="text" name="username" placeholder="Unesite vase korisnicko ime">
				<input type="password" name="password" placeholder="Unesite vasu lozinku">
				<input type="submit" name="registersubmit" value="Pošalji">
			</form>
		</div>
	</main>

<?php if ($_smarty_tpl->tpl_vars['registerMessage']->value == true) {?>
<div id="registermessage" style="position: fixed; top: 300px; left: 100px; border: 2px solid orange; background-color: green; color: orange;  width: 300px; padding: 10px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['registerMessage']->value;?>
</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
	var close = document.getElementById('registermessage');
	close.addEventListener('click', function(){
		this.style.opacity = "0";
	})
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
