<?php 
session_start();
include ("dbconnection.php");
if (isset($_SESSION['ID']) && isset($_SESSION['studentID']) && isset($_SESSION['Fullname']) && isset($_SESSION['Course']) && isset($_SESSION['Year'])) {
$name = $_SESSION['Fullname'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="Gc icon\gc logo.png">
        <title>Gordon College | Account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Account.css?v=<?php echo time(); ?>">
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
            <h3>Gordon College</h3>
        </div>  
        <!--Navigation menu at the top -->
    <div id = logout>
            <a href = "logout.php"><input type="button" value="Log Out" name = logout></a>
    </div>
    <a href="Accountsetting.php"  id = "account" class="button">Account</a>
    <a href="Contact.php"   id = "Contact" class="button">Contact Us</a>
    <a href="aboutpage.php" id = "about" class="button">About</a>
    <a href="Uniform.php"  id = "uniform" class="button">Uniforms</a>
    </nav>
<form action = "changepassword.php" method="post">
<div class = "orders">
<table>
        <tr>
            <th>Reserve No.</th>
            <th>Uniform</th>
            <th>Size</th>
            <th>Quantity</th>
</tr>
<?php
    $sql= "SELECT * FROM reservation WHERE Fullname = '$name'";    
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['reserveNo']. "</td><td>". $row['uniform_type']. "</td><td>". $row['uniform_size']. "</td><td>". $row['uniform_qty']."</td></r>";
        }
    }
?>
</table>
</div>
<div class="ChangePassBody" id="changePass">
        <div class = "info">
        <div class = "Fullname"> 
        <input type="text" value="<?php echo "NAME: ",$_SESSION['Fullname']; ?>" name = "Fullname" readonly = ""> 
    </div>

    <div class = "stud_Info"> 
        <input type="text" value="<?php echo "Student Number: ",$_SESSION['studentID']; ?>" name = "studentID" readonly = ""> 
        <input type="text" value="<?php echo "Course & Year: ",$_SESSION['Course']; echo" "; echo $_SESSION['Year']; echo" Year College";?>" name = "Course" readonly = ""> 
        <input type="text" value="<?php echo "Department: ",$_SESSION['department'];?>" name = "department" readonly = ""> 
        <input type="hidden" value="<?php echo $_SESSION['ID']; ?>" name = "noID" readonly = ""> 
    </div>
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
     header("Location: loginpage.php");
     exit();
}
?>