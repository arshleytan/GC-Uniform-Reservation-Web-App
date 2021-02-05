<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="Gc icon\gc logo.png">
        <title>Gordon College Student</title>
    </head>
    <link rel="stylesheet" href="loginpage.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">

    <body>
        <div class = content>
        <h2>Gordon College</h2>
        <h3>Uniform Reservation</h3>
        </div>

        <div class = gclogo>
            <img src = "Gc icon\gc logo.png">  
        </div>  

    <div id="LoginForm">     
        <form action="loginprocess.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         
        <div id = "studentID"><!-- /username textfield-->
        <?php if (isset($_GET['studentID'])) { ?>
               <input type="text" name="studentID" placeholder="Student ID" value="<?php echo $_GET['studentID']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="studentID" placeholder="Student ID"><br>
          <?php }?>
        </div>

        <div id = "password"><!-- /password textfield-->
        <input type="password" placeholder="Enter Password" name="password">
        </div>

        <div id="login"><!-- /login button-->
            <input type="submit" name="login" value="Log In">
        </div>
        </form>
    </div>  
    </body>
</html>