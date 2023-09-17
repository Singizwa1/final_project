<?php
require ("server.php");

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$nationalid = $_POST['nationalid'];
$telnumber = $_POST['telnumber'];
$email = $_POST['email'];
$Password = $_POST['Password'];
// $year = $_POST['year'];
// $email = $_POST['email'];




// echo"registration new computer..";
// if(isset($_POST['submit']))
// {


$sql = "INSERT INTO  securityofficers(first_name,second_name,nationan_ID,email,phone,password) values ('$fname','$lname','$nationalid','$email','$telnumber','$Password')";
$result= mysqli_query($con,$sql);
header("location:admin.php");
// }
// if(!$result){
//     echo"folse".mysqli_error($con);
// }
?>
