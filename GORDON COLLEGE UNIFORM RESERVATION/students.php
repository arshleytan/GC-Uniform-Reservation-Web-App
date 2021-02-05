<?php
session_start();
include "dbconnection.php";
if (isset($_SESSION['username']) && isset($_SESSION['username'])) {
$studentID = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <link rel = "icon" href ="Gc icon\gc logo.png">
        <title>GC | Student Account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="student.css?v=<?php echo time(); ?>">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
<title>Gordon College Uniform Reservation</title>
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
    <a href="adminaccount.php" id = "account" class="button">Account</a>
    <a href="students.php" id = "student" class="button">Student Account</a>
    <a href="panel.php" id = "panel" class="button">Reserve List</a>
    </nav> 
    <table>
        <tr>
            <th>Student ID</th>
            <th>Department</th>
            <th>Course</th>
            <th>Year</th>
            <th>Full Name</th>
            <th>Password</th>
</tr>
<?php
    $sql = "SELECT * FROM login;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['studentID']. "</td><td>". $row['department']. "</td><td>". $row['Course']. "</td><td>". $row['Year']. "</td><td>". $row['Fullname']. "</td><td>". $row['password']."</td></r>";
        }
    }
?>
</table>
</body>
</html>
<?php 
}else{
     header("Location: admin.php");
     exit();
}
?>