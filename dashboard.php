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
} else {
	//echo $_SESSION['username'];
}
$username = $_SESSION['username'];
$fullName = $_SESSION['firstName'].' '.$_SESSION['lastName'];
$userId = $_SESSION['userId'];
$userimg = $_SESSION['image'];


// Create connection
$conn = new mysqli(SERVER, USER, PASS, DB); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//end database connection settings

/**********************************************/
/***    Successful inserted post or not     ***/
/**********************************************/

$postBody='';
$privateStatus='';
$imgmsg = '';
$userId='';
$postSuccessMessage='';
$image='';
$fileNameNew = '';
if($_SESSION['userId']){
	$userId = $_SESSION["userId"];
};
/********************ADD PHOTO TO FOLDER ******************/
if (isset($_POST['insertPost'])) {
   // $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ['jpg', 'jpeg', 'png', 'bmp'];

    if(!empty($fileName)){
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
			   // $fileNameNew = uniqid('', true).".".$fileActualExt;  -- craetes unique filename in data base
			   $fileNameNew = $fileName;
                $fileDestination = 'uploaded/'.$fileNameNew; // folder to where to upload new images
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: dashboard.php?uploadsuccess");
            } else {
                $imgmsg = "Izabrani fajl je prevelike velicine, molimo izaberite manji fajl!";
            }
        } else {
            $imgmsg = "Ups, desila se greška tokom postavljanja tvog fajla.";
        }
    } else {
        $imgmsg = "Nažalost, ne možete postaviti fajl ovog tipa, izaberite drugi tip.";
    }
}
}
/*******************************************************/

if(!empty($_POST["insertPost"])){
$postBody = $_POST["inputPost"];
$privateStatus = $_POST["privateStatus"];
if(!empty($_FILES['file']['name'])){
	$image = $_FILES['file']['name'];
	}
$date = date("d.m.Y");
// IVAN - store path for uploaded images
if(!empty($_FILES['file']['name'])){
	$target_dir = "uploaded/";
	$target_file = $target_dir . basename($image);
	}
	// IVAN - END path for uploaded images

$sqlInsert = "INSERT INTO posts(id, body, date, userId, privateStatus, images) VALUES (null,'".$postBody."','".$date."', '".$userId."','".$privateStatus."', '".$fileNameNew."')";
$resultInsert = $conn->query($sqlInsert);
if($resultInsert === true){
	$postSuccessMessage = "Vas status je upesno unet.";
}else{
	$postSuccessMessage = "Imate gresku u konekciji.".$conn->error;
}
};

//end of insert post code

/**********************************************/
/*********    Give me posts and users   *******/
/**********************************************/
	$sql = "SELECT posts.id,
				users.userId,
				users.username,
		        posts.userId,
		        users.firstName,
		        users.lastName,
		        posts.body,
		        posts.images,
		        users.image,
		        posts.date
		        FROM posts INNER JOIN users ON posts.userId = users.userId WHERE privateStatus='public' OR posts.userId=$userId ORDER BY posts.id DESC";

$result = $conn->query($sql);
$postsRows = [];
if ($result->num_rows > 0) {
	while($row=$result->fetch_assoc()){
		$postsRows[]=$row;
	}
}else{
	$postSuccessMessage = "Trenutno nema podataka u bazi.";
}

$conn->close();

//end of defining variables,
//now we need to send them to template

/******************************************************/
/* send those variables to our template dashboard.tpl */
/******************************************************/

$smarty->assign(
	'username',
	$username
);
$smarty->assign(
	'imgmsg',
	$imgmsg
);
$smarty->assign(
	'userimg',
	$userimg
);
$smarty->assign(
	'fullName',
	$fullName
);

$smarty->assign(
	'postSuccessMessage',
	$postSuccessMessage
);
$smarty->assign(
	'postsRows',
	$postsRows
);


$smarty->display('dashboard.tpl');
?>

