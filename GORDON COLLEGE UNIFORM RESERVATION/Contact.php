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
        <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
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
        <div class = "img">
        <img src = "Contact/support.png">
</div><br>
        <p>If you have questions, suggestions, concerns, or other things that are related to this website
            you can reach us through our social media sites.
            <br><br>
       Social Media sites links:</p> <br><br>
       <div class = "fb">
           <img id = "fb" src = "Contact/fb.png">
           <img id = "gmail" src = "Contact/gmail.png">
</div>
    <div class = "num">
    <img id = "number" src = "Contact/no.png">
</div>
       <a href="https://www.facebook.com/GordonCollegeOfficial" target="_blank" id = "fb">Facebook: facebook.com/GordonCollegeOfficial</a>
       <p id = "email">Email: info@gordoncollege.edu.ph</p>
      <p id = "contact">Contact. No: (047) 602-7175</p>
</div>

</html>
<?php 
}else{
     header("Location: loginpage.php");
     exit();
}
?>
