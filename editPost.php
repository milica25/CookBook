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
$msg = "";
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

if(!empty($_GET["postText"])) {
$currentPost =$_GET["postText"];
} else {
    $currentPost = '';
}

if(!empty($_POST["save"])){
    $postBody = $_POST['editText'];
    $postId = $_POST['postId'];
    echo $postBody;
    echo $postId;
    $username = $_SESSION['username'];


    $sqlInsert =  "UPDATE posts SET posts.body= '$postBody' WHERE posts.id = $postId";
    $resultInsert = $conn->query($sqlInsert);
    header("Location: profile.php?username=$username");
} else {
$postId = $_GET['postId'];
};




$conn->close();

//if(sessionid!=postid){
  //  header('Location: dashboard.php');
//}
//post_body


$smarty->assign(
    'currentPost',
    $currentPost
);

$smarty->assign(
    'postId',
    $postId
);


$smarty->display('editPost.tpl');
?>