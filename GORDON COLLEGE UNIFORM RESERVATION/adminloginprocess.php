<?php 
session_start(); 
include "dbconnection.php";
include "adminverify.php";

if (isset($_POST['username']) && isset($_POST['password'])) {


	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
    $password = validate($_POST['password']);
    
	$adminID = 'username='. $username;
	

	if (empty($username) && !empty($password)) {   
        header("Location: admin.php?error=username is required");
        exit();
    }

     else if(empty($password) && !empty($username)) {
        header("Location: admin.php?error=Password is required&$adminID");
        exit();

	 }
	
	else if(empty($username) && empty($password)){
        header("Location: admin.php?error=username and Password is required");
        exit();
    }

        else{
		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		   if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
             if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['adminID'] = $row['adminID'];
            	header("Location: panel.php");
		        exit();
            }
                else{
				header("Location: admin.php?error=Incorrect username or password&$adminID");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorrect username or password&$adminID");
	        exit();
		}
	}
}else{
	header("Location: admin.php");
	exit();
}
