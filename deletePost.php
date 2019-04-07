<?php
session_start();
include('config/config.php');
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
// create connection
$conn = new mysqli(SERVER, USER, PASS, DB);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

// end database connection settings

// delete post
$username = $_SESSION['username'];
$userId = $_SESSION['userId'];
$postId = $_GET['id'];

$sql = "DELETE FROM posts WHERE posts.id = $postId AND posts.userId = $userId"; 

$result = $conn->query($sql);

if($result == true) {
   header("Location: profile.php?username=".$_GET['username']);
}else {
    echo "Error description: " . mysqli_error($conn);
}

$conn->close();
?> 