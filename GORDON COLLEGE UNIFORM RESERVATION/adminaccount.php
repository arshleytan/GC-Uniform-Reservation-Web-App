<?php
session_start();
include "dbconnection.php";
if (isset($_SESSION['username']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="Gc icon\gc logo.png">
        <title>GC | Account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="adminaccount.css?v=<?php echo time(); ?>">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
        
    </head>
    <body>
    <nav>
    <div class = gclogo>
            <img src = "Gc icon\gc logo.png">
            <h3>Gordon College Admin</h3>
        </div>  
        <!--Navigation menu at the top -->
    <div id = logout>
            <a href = "adminlogout.php"><input type="button" value="Log Out" name = logout></a>
    </div>
    <a href="adminsetting.php"  id = "account" class="button">Account</a>
    <a href="students.php" id = "about" class="button">Student Account</a>
    <a href="panel.php"  id = "uniform" class="button">Reserve List</a>
    </nav> 
    <form action = "adminchangepass.php" method="post">

<div class="ChangePassBody" id="changePass">
        <div class = "info">
        <div class = "Fullname"> 
        <input type="text" value="<?php echo "Username: ",$_SESSION['username']; ?>" name = "Fullname" readonly = ""> 
        </div>
</div>

<div class = "stud_Info"> 
        <input type="hidden" value="<?php echo $_SESSION['adminID']; ?>" name = "noID" readonly = ""> 
    </div>
        <p><strong>Change password</strong></p>

        <div class = "message">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
            <div class="inputs">
                <label><input type="password" name="oldpass" id="oldpass" placeholder = "Old password"></label><br><br>
                <label><input type="password" name="New_pass" id="New_pass" placeholder = "New password"></label><br><br>
                <label><input type="password" name="confirm_pass" id="confirm_pass" placeholder = "Confirm New password"></label><br><br>
            </div>
                <div id="button">
      <button type="submit" name="submit">Change</button>
            </div>
        </div>
         </div>
</form>
</body>
</html>
<?php 
}else{
     header("Location: admin.php");
     exit();
}
?>