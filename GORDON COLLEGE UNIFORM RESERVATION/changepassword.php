<?php
include "dbconnection.php";
if (isset($_POST['submit']))
	{
	$NoID = $_POST['noID'];
	$old_pass = $_POST['oldpass'];
	$new_pass = $_POST['New_pass'];
    $re_pass = $_POST['confirm_pass'];
    
	$query=mysqli_query($conn,"SELECT *FROM login WHERE ID = '$NoID'");
	$password_row=mysqli_fetch_array($query);
	$database_password = $password_row['password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd=mysqli_query($conn,"UPDATE login SET password = '$new_pass' WHERE ID='$NoID'");
			header("Location: Accountsetting.php?success=Your password changed successfully.");
			}
		  else
			{
				header("Location: Accountsetting.php?error=New password does not matched.");
			}
		}
	  else
		{
			header("Location: Accountsetting.php?error=Old password is incorrect.");
		}
	}
 
?>