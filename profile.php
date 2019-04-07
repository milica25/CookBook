<?php
/**********************************************/
/**initial settings for the smarty tpl engine**/
/**********************************************/
require_once("smarty/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tpl';
//initial variable definition
$wrongPassword = '';
//end initial settings

/***********************************************/
/**   database connection and session start   **/
/***********************************************/

session_start();
include("config/config.php");

if (!isset($_SESSION['username']) || !$_SESSION['username']) {
	header ('Location: index.php');
} 

$usernameLog = $_SESSION['username'];
$fullNameLog = $_SESSION['firstName'].' '.$_SESSION['lastName'];
$userId = $_SESSION['userId'];
$profilKorisnika = $_GET['username'];
$userimg = $_SESSION['image'];

$conn = new mysqli(SERVER, USER, PASS, DB); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT posts.id,
				users.userId,
				users.username,
		        posts.userId,
		        users.firstName,
		        users.lastName,
		        posts.images,
		        users.image,
		        posts.body,
		        posts.date
		        FROM posts INNER JOIN users ON posts.userId = users.userId WHERE users.username='$profilKorisnika' ORDER BY posts.id DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			    	$body = $row["body"];
			    	$postId = $row["id"];
			    	$date = $row["date"];
			    	$userId = $row["userId"];
			    	$firstName = $row["firstName"];
			    	$lastName = $row["lastName"];
			    	$username = $row["username"];
			    	$fullName = $firstName.' '.$lastName;
			    	$userData[]=$row;
			    }
			}else{
				$username = $usernameLog;
				$fullName = $fullNameLog;
				$userData = '';
			}
$conn->close();

$smarty->assign(
	'username',
	$username
);
$smarty->assign(
	'usernameLog',
	$usernameLog
);
$smarty->assign(
	'fullName',
	$fullName
);
$smarty->assign(
	'fullNameLog',
	$fullNameLog
);
$smarty->assign(
	'userData',
	$userData
);
$smarty->assign(
	'userimg',
	$userimg
);
$smarty->display('profile.tpl');
?>