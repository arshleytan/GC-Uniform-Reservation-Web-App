<?php 
session_start(); 
include "dbconnection.php";

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    if($username == "") {   
        header("Location: admin.php?error=username is required");
        exit();
    }else {

    $query = "SELECT * FROM admin WHERE username='".$_POST['username']."'";
    $result = mysqli_query($conn, $query) ;

    if(mysqli_num_rows($result) === 0) {
        header("Location: admin.php?error=username doesn't exist!");
        exit();
    } 
}
}
else{
	header("Location: admin.php");
	exit();
}

?>