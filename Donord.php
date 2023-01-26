<?php

//Connecting to the mysql
$con=mysqli_connect("localhost","root","");

//Select database
 mysqli_select_db($con, 'db_project');

//Select query
$sql = "DELETE FROM client WHERE contact='$_GET[contact]'";

//Execute the query
if (mysqli_query($con, $sql))
   header("refresh:1; url=Donorview.php");
else
   echo"Not Deleted";
?>