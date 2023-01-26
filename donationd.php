<?php

//Connecting to the mysql
$con=mysqli_connect("localhost","root","");

//Select database
 mysqli_select_db($con, 'db_project');

//Select query
$sql = "DELETE FROM bank WHERE contact='$_GET[Contact]'";

//Execute the query
if (mysqli_query($con, $sql))
   header("refresh:1; url=Donationview.php");
else
   echo"Not Deleted";
?>