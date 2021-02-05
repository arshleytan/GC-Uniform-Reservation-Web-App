<?php
include "dbconnection.php";


if(isset($_POST['submit'])){
    $studentID = $_POST['studentID'];
    $Course = $_POST['Course'];
    $Fullname = $_POST['Fullname'];
    $UniformName = $_POST['UniformType'];
    $Size = $_POST['uniformSize'];
    $Quantity = $_POST['Uniformquantity'];

    $sqlInsert = "INSERT INTO reservation (studentID, Course, Fullname, uniform_type, uniform_size, uniform_qty) 
        VALUES ('$studentID','$Course','$Fullname','$UniformName','$Size','$Quantity')";

    $insert = mysqli_query($conn, $sqlInsert);

    if($insert)
    {
        echo "<script>alert('Sucessfully reserved!');</script>";
        echo "<script>window.location.href='uniform.php';</script>";
    }
    else {
        echo "<script>alert('Failed');</script>";
        echo "<script>window.location.href='uniform.php';</script>";
    }
}
?>