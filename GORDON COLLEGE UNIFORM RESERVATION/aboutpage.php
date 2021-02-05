<?php 
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['studentID'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="Gc icon\gc logo.png">
        <title>Gordon College | About</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="aboutpage.css?v=<?php echo time(); ?>">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
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
    </div> 
    </body>


    <div class = "content">
        <h2>Gordon College Uniform Reservation</h2><br>
        <p>Gordon College Uniform Reservation is an online reservation for Gordon College students who
            want to reserve a uniform. This Site is accessible for Gordon College students only. 
            <br><br>
        Created in December 2020. Gordon College Uniform Reservation is a private web application.</p> <br><br>

    <h3>CREATORS</h3>
    <div class = "images">
    <div class = "ley">
    <img src = "aboutphotos/ley.jpg"> <h2>Tan, Arshley L.</h2><br><p>back-end developer</p>
</div>
<div class = "bev">
    <img src = "aboutphotos/bev.jpg"> <h2>Bernardino, Beverly Karen</h2><br><p>Front-end web developer</p>
</div>
    <div class = "fat">
    <img src = "aboutphotos/fat.jpg"> <h2>Boongaling, Fatrizha</h2><br><p>Tester & Documentation</p>
</div>
</div>
</div>

</html>
<?php 
}else{
     header("Location: loginpage.php");
     exit();
}
?>
