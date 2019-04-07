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
$residence='';
$birthday='';
$fileNameNew = '';
$imgmsg = '';
$image='';

//end initial settings

/***********************************************/
/**   database connection and session start   **/
/***********************************************/

session_start();
include("config/config.php");

// Create connection
$conn = new mysqli(SERVER, USER, PASS, DB); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if(!empty($_GET["username"])) {
$editUser =$_GET["username"];
} else {
    $editUser = '';
}
$userimg = $_SESSION['image'];
$userId = $_SESSION['userId'];
//$username = $_SESSION['username'];
$usernameLog = $_SESSION['firstName'].' '.$_SESSION['lastName'];

$sqlSelect = "SELECT * FROM users WHERE users.userId = $userId";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
                    $userId = $row["userId"];
                    $firstName = $row["firstName"];
                    $lastName = $row["lastName"];
                    $username = $row["username"];
                    $usernameLog = $firstName.' '.$lastName;
                    $email = $row['email'];
                    $fileNameNew = $row['image'];
                    //$userImg = $row['image'];
                }
            }



if(!empty($_POST["save"])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
/*********************************************************************************************************/

if (!empty($_POST['save'])) {
    $file = $_FILES['file'];

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
                $fileDestination = 'userimg/'.$fileNameNew; // folder to where to upload new images
                move_uploaded_file($fileTmpName,$fileDestination);
                //header("Location: editProfile.php?uploadsuccess");
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
if(!empty($_FILES['file']['name'])){
    $image = $_FILES['file']['name'];
    }
// IVAN - store path for uploaded images
if(!empty($_FILES['file']['name'])){
    $target_dir = "userimg/";
    $target_file = $target_dir . basename($image);
    }
echo $imgmsg;
/*********************************************************************************************************/
    $sqlInsert =  "UPDATE users 
    SET users.firstName = '$firstName',
     users.lastName = '$lastName',
     users.username = '$username',
     users.email = '$email',
     users.image = '$fileNameNew'
      WHERE users.userId = $userId";

     $resultInsert = $conn->query($sqlInsert);

    $sqlSelect = "SELECT * FROM users WHERE users.userId = $userId";
    $result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['userId'] = $row['userId'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];
            $_SESSION['image'] = $row['image'];
                    //$userImg = $row['image'];
                }
            }

    
    header("Location: profile.php?username=$username");
} else {

};

echo $imgmsg;


$conn->close();

$smarty->assign(
    'userId',
    $userId
);
$smarty->assign(
    'username',
    $username
);
$smarty->assign(
    'firstName',
    $firstName
);
$smarty->assign(
    'lastName',
    $lastName
);
$smarty->assign(
    'usernameLog',
    $usernameLog
);
$smarty->assign(
    'email',
    $email
);
/*$smarty->assign(
    'userImg',
    $userImg
);*/
$smarty->assign(
    'residence',
    $residence
);
$smarty->assign(
    'birthday',
    $birthday
);
$smarty->assign(
    'userimg',
    $userimg
);
$smarty->display('editProfile.tpl');

?>