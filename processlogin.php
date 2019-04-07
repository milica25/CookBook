<?php
session_start();
include('config/config.php');
//definisemo varijable
$username = !empty($_POST['username']);
$password = !empty($_POST['password']);

//provera da li su prazne
if($username && $password) {
	$db = mysqli_connect(SERVER, USER, PASS, DB);
	//promenimo enkodiranje na utf8
	mysqli_set_charset($db, "utf8");

	//ubacimo sigurni username unutar sql
	$sql = sprintf("SELECT * FROM users WHERE username='%s'", mysqli_real_escape_string($db, $_POST['username'])
);

	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result);
	if($row) {
		$hash = $row['password'];

if (password_verify($_POST['password'], $hash)){
	$message = 'Login successful.';

	$_SESSION['username'] = $row['username'];
	$_SESSION['userId'] = $row['userId'];
	$_SESSION['firstName'] = $row['firstName'];
	$_SESSION['lastName'] = $row['lastName'];
	$_SESSION['image'] = $row['image'];

	header('Location: dashboard.php');
} else {
	/*
    setcookie('loginfail', 'Invalid username/password!', time()+1);
    header('Location: index.php');
    */
  		setcookie("poruka", "Pogresna lozinka", time() + (86400), "/");
        header ('Location: index.php');
}
	}else {
        setcookie("poruka", "Pogresni podaci", time() + (86400), "/");
        header ('Location: index.php');
    }
    mysqli_close($db);
} else {
    setcookie("poruka", "Niste popunili sva polja", time() + (86400), "/");
    header ('Location: index.php');
}



?>