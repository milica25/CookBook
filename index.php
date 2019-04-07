<?php
/**********************************************/
/**initial settings for the smarty tpl engine**/
/**********************************************/
require_once("smarty/libs/Smarty.class.php");
include("config/config.php");
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tpl';
//initial variable definition
session_start();
if (isset($_SESSION['username'])) {
	header ('Location: dashboard.php');
}
$poruka = '';
$registerMessage = '';
	if(isset($_COOKIE["poruka"])){
	$poruka = $_COOKIE["poruka"];
	unset($_COOKIE['poruka']);
	setcookie('poruka', '', time() - 3600, '/');
	};
if(!empty($_GET['registerMessage'])){
$registerMessage = $_GET['registerMessage'];
};

$smarty->assign(
	'poruka',
	$poruka
);
$smarty->assign(
	'registerMessage',
	$registerMessage
);
$smarty->display('index.tpl');
?>