<!DOCTYPE html>
<html>
<title>Home Page</title>

 <head>
    <link type="text/css" rel="stylesheet" href="Home%20page.css"> 
    </head>
    <body>
    <header>
        <div class="Navbar">
            <p style="font-size:36px;padding-top:13px;margin-top:-10px;">Bank Loan Management System</p>
        </div>
        <nav class="navclass">
            <ul>
                <li class="active"><a href="#"><b>Home</b></a></li>
                <li class="view"><a href="#"><b>View </b>
                    <ul class="dropdown">
                    <li><a href="Donorview.php"><b>Client Information</b></a></li>
                    <li><a href="Donationview.php"><b>Bank Information</b></a></li>
                    <li><a href="projectview.php"><b>Employee Information</b></a></li>
                    </ul>
                    </a></li>
                <li class="insert"><a href="#"><b>Insert</b>
                    <ul class="dropup">
                    <li><a href="Donor%20Form.html"><b>Client Registration</b></a></li>
                    <li><a href="Donation%20Form.html"><b>Bank Sheet</b></a></li>
                    <li><a href="Project%20Form.html"><b>Employee Form</b></a></li>
                    </ul></a></li>
                <li><a href="Search%20page.html"><b><img src="search_box_icon.png" style="padding-right: 8px;" >     Search</b></a></li>
            </ul>
        </nav>
    </header> 

<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="db_project";


$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);


$name=$_POST['name'];
$id=$_POST['id'];
$contact=$_POST['contact'];             
$address=$_POST['address'];



$sql="INSERT INTO client(name,id,contact,address)VALUES ('$name','$id','$contact','$address')";
  

if(mysqli_query($conn,$sql)){
    echo"Your Data Has Been Saved Successfully ";
}else{
    echo"Problem occurs...";
}
//query index compare of donar form
/*if($conn->query($sql)==TRUE){
     echo"Data has been saved";
 }else{
     echo"Something went wrong". $sql . $conn->error;
 }
 */

?>