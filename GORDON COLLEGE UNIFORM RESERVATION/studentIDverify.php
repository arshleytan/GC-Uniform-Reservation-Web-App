<?php 
session_start(); 
include "dbconnection.php";

if(isset($_POST['studentID'])) {
    $studentID = $_POST['studentID'];
    if($studentID == "") {   
        header("Location: loginpage.php?error=Student ID is required");
        exit();
    }else {

    $query = "SELECT * FROM login WHERE studentID='".$_POST['studentID']."'";
    $result = mysqli_query($conn, $query) ;

    if(mysqli_num_rows($result) === 0) {
        header("Location: loginpage.php?error=Student ID doesn't exist!");
        exit();
    } 
}
}
else{
	header("Location: loginpage.php");
	exit();
}

?>