<?php 
session_start(); 
include "dbconnection.php";
include "studentIDverify.php";

if (isset($_POST['studentID']) && isset($_POST['password'])) {


	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$studentID = validate($_POST['studentID']);
    $password = validate($_POST['password']);
    
	$student_num = 'studentID='. $studentID;
	

	if (empty($studentID) && !empty($password)) {   
        header("Location: loginpage.php?error=Student ID is required");
        exit();
    }

     else if(empty($password) && !empty($studentID)) {
        header("Location: loginpage.php?error=Password is required&$student_num");
        exit();

	 }
	
	else if(empty($studentID) && empty($password)){
        header("Location: loginpage.php?error=Student ID and Password is required");
        exit();
    }

        else{
		$sql = "SELECT * FROM login WHERE studentID='$studentID' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		   if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
             if ($row['studentID'] === $studentID && $row['password'] === $password) {
            	$_SESSION['studentID'] = $row['studentID'];
            	$_SESSION['password'] = $row['password'];
				$_SESSION['ID'] = $row['ID'];
				$_SESSION['Fullname'] = $row['Fullname'];
				$_SESSION['Course'] = $row['Course'];
				$_SESSION['Year'] = $row['Year'];
				$_SESSION['department'] = $row['department'];
            	header("Location: uniform.php");
		        exit();
            }
                else{
				header("Location: loginpage.php?error=Incorrect Student ID or password&$student_num");
		        exit();
			}
		}else{
			header("Location: loginpage.php?error=Incorrect Student ID or password&$student_num");
	        exit();
		}
	}
}else{
	header("Location: loginpage.php");
	exit();
}
