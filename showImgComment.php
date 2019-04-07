<?php
/***********************************************/
/**   database connection and session start   **/
/***********************************************/

session_start();
include("config/config.php");
$postId="";
if(!empty($_POST["showImgComment"])){
$postId=$_POST["postId"];
}

// Create connection
$conn = new mysqli(SERVER, USER, PASS, DB); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Change character set to utf8
mysqli_set_charset($conn,"utf8");

		$sql = "SELECT * FROM img_com INNER JOIN users ON img_com.userId = users.userId WHERE postId=".$postId." ORDER BY comDate DESC";
		$result = $conn->query($sql);
		$postsRows = [];
if ($result->num_rows > 0) {
	while($row=$result->fetch_assoc()){
		$postsRows[]=$row;
	}
		echo json_encode($postsRows);
		$postSuccessMessage="OK";
}else{
	$postSuccessMessage = "Trenutno nema podataka u bazi.";
}
	//echo $postSuccessMessage;

$conn->close();
?>