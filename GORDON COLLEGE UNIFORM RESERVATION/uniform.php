<?php 
session_start();
include ("dbconnection.php");
if (isset($_SESSION['ID']) && isset($_SESSION['studentID']) && isset($_SESSION['Fullname']) && isset($_SESSION['Course'])) {
$studentID = $_SESSION['studentID'];
$studentID = $_SESSION['Course'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel = "icon" href ="Gc icon\gc logo.png">
        <title>Gordon College | Uniforms</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uniform.css?v=<?php echo time(); ?>">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">
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
<div class = "uniformitems">


<div id = "item1">
    <div id = "polo">
        <img src = "uniforms\Polo.png">
    </div>
<p>Mens Polo Uniform</p>
    <div id = "item1btn">
    <button class = "myBtn" id ="myBtn1">Reserve</button>
</div>
</div>

<div id = "item2">
    <div id = "pants">
        <img src = "uniforms\Pants.png">
    </div>
    <p>Mens Pants Uniform</p>
    <div id = "item2btn">
    <button class= "myBtn2" id="myBtn">Reserve</button>
</div>
</div>

<div id = "item3">
    <div id = "Blouse">
        <img src = "uniforms\Blouse.png">
    </div>
    <p>Womens Blouse Uniform</p>
    <div id = "item3btn">
    <button class="myBtn3" id = "myBtn">Reserve</button>
</div>
</div>

<div id = "item4">
    <div id = "Skirt">
        <img src = "uniforms\Skirt.png">
    </div>
    <p>Womens Skirt Uniform</p>
    <div id = "item4btn">
   <button class="myBtn4" id = "myBtn">Reserve</button>
    </div>
</div>

<div id = "item5">
    <div id = "PE_shirt">
        <img src = "uniforms\Peshirt.png">
    </div>
    <p>PE Shirt</p>
    <div id = "item5btn">
    <button class="myBtn5" id = "myBtn">Reserve</button>
</div>
</div>

<div id = "item6">
    <div id = "PE_pants">
        <img src = "uniforms\Pepants.png">
    </div>
    <p>PE Jogging pants</p>
    <div id = "item6btn">
   <button class="myBtn6" id = "myBtn">Reserve</button>
</div>
</div>

<div id = "item7">
    <div id = "Male_Bundle">
        <img src = "uniforms\MaleBundle.png">
    </div>
    <p>Male Uniform Bundle</p>
    <div id = "item7btn">
   <button class="myBtn7" id = "myBtn">Reserve</button>
</div>
</div>

<div id = "item8">
    <div id = "Female_Bundle">
        <img src = "uniforms\FemaleBundle.png">
    </div>
    <p>Female Uniform Bundle</p>
    <div id = "item8btn">
    <button class="myBtn8" id = "myBtn">Reserve</button>
</div>
</div>

<div id = "item9">
    <div id = "Pe_Bundle">
        <img src = "uniforms\PeBundle.png">
    </div>
    <p>PE Bundle</p>
    <div id = "item9btn">
   <button class="myBtn9" id = "myBtn">Reserve</button>
</div>
</div>
</div>

<!-- pop up modal -->
<form action="Reserveprocess.php" method="post">
<div class = "modal">
<div class = "modal-content">

<div class = "studID"> 
<input type="hidden" value="<?php echo $_SESSION['studentID']; ?>" name = "studentID" readonly = ""> 
</div>


<div class = "Fullname"> 
<input type="hidden" value="<?php echo $_SESSION['Fullname']; ?>" name = "Fullname" readonly = ""> 
</div>

<div class = "Course"> 
<input type="hidden" value="<?php echo $_SESSION['Course']; ?>" name = "Course" readonly = ""> 
</div>

<div class = "image">
    <img id = "photo" src = "Uniforms/Poloko.png">
</div>

<div class = "Type" id = "UniformTag"></div>
<div class = "UniformSelection">
<label for="UniformSelection">Uniform Type:</label>
<select name = "UniformType" id = "selected">
  <option value="none" disabled></option>
  <option value ="Mens Polo Uniform">Mens Polo Uniform</option>
  <option value="Mens Pants Uniform">Mens Pants Uniform</option>
  <option value="Womens Blouse Uniform">Womens Blouse Uniform</option>
  <option value="Womens Skirt Uniform">Womens Skirt Uniform</option>
  <option value="PE Shirt">PE Shirt</option>
  <option value="PE Jogging pants">PE Jogging pants</option>
  <option value="Male Uniform Bundle">Male Uniform Bundle</option>
  <option value="Female Uniform Bundle">Female Uniform Bundle</option>
  <option value="PE Uniform Bundle">PE Uniform Bundle</option>
</select>
</div>

<span class ="modal-close">x</span>

<div class = "SizeSelection">
<label for="SizeSelection">Size:</label>
<select name = "uniformSize">
<option value="none"></option>
<option value="XS">Extra Small</option>
<option value="S">Small</option>
<option value="M">Medium</option>
<option value="L">Large</option>
<option value="XL">Extra Large</option>
</select>
</div>

<div class = "Uniformquantity">
<label>Qty:</label>
<div id = "sub">
<input type button id="sub" value = "-" readonly = "">
</div>

    <input type="text" id="qtyBox" value="0" name = "Uniformquantity" readonly = ""> 
    <div id = "add">
    <input type button id="add" value = "+" readonly = "">
</div>

    <script src="Popupmodal.js"></script>

</div>

<div id = "ReserveThis">
    <input type="submit" name = "submit" value="submit"></a>
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