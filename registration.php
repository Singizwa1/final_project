<?php
require ("server.php");

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$regnumber = $_POST['regnumber'];
$serialnumber = $_POST['serialnumber'];
$computername = $_POST['computername'];
$year = $_POST['year'];
$email = $_POST['email'];




// echo"registration new computer..";

$sql = "INSERT INTO  computer (reg_number,fname,lname,year,email,serial_number,computer_name) values ('$regnumber','$fname','$lname','$year','$email','$serialnumber','$computername')";
$result=mysqli_query($con,$sql);

header("location:admin.php");
// if(!$result){
//     echo"folse".mysqli_error($con);
// }
?>
