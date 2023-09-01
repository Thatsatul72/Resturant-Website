<?php
require "connect.php";
$name=$_POST['fname'];
$phno=$_POST['phno'];
$nos=$_POST['nos'];
$dandt=$_POST['dandt'];
$query="INSERT INTO `details`( `Full Name`, `PhoneNumber`, `NumberOfSeats`, `Date`) VALUES ('$name','$phno','$nos','$dandt')";
include "./index.html";
$run=mysqli_query($conn,$query);
//if($run == TRUE)
 //  echo "SIGNUP SUCESSFULLY";
//else
   // echo "ERROR!";
?>