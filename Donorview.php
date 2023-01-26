<!DOCTYPE html>
<html>
<title>Client View</title>

 <head>
    <link type="text/css" rel="stylesheet" href="view.css">
     <style>
         table,th,td{
             background-color: white;
             border:1px solid black;
             opacity:0.9;
			 border-collapse:collapse;
         }
    .footer{
    width:100%;
    height: 35px;
    margin-top:500px;
    text-align: center;
    color: orange;
    background-color: black;
}
     </style>
    </head>
    <body>
    <header>
        <div class="Navbar">
                        <p style="font-size:36px;padding-top:13px;margin-top:-10px;">Bank Loan Management System</p>
        </div>
        <nav class="navclass">
            <ul>
                <li><a href="Home%20page.html"><b>Home</b></a></li>
                <li class="view"><a href="#"><b>View </b>
                    <ul class="dropdown">
                    <li><a href="#"><b>Client Information</b></a></li>
                    <li><a href="Donationview.php"><b>Bank Information</b></a></li>
                    <li><a href="projectview.php"><b>Employee Information<b></a></li>
                    </ul>
                    </a></li>
                <li class="insert"><a href="#"><b>Insert</b>
                    <ul class="dropup">
                    <li><a href="Donor%20Form.html"><b>Client Information</b></a></li>
                    <li><a href="Donation%20Form.html"><b>Bank Sheet</b></a></li>
                    <li><a href="Project%20Form.html"><b>Employee Form</b></a></li>
                    </ul></a></li>
                <li><a href="Search%20page.html"><b><img src="search_box_icon.png" style="padding-right: 8px;" >     Search</b></a></li>
				<li class=" "><a href="#"><b>Report</b></a></li>
            </ul>
        </nav>
    </header>

<center><h1 style="margin-bottom:70px; height:40px;width:420px;background-color:;border-radius:10px;">Client Information</h1> </center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM client";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Name</th><th>Id</th><th>Contact</th><th>Address</th>
    <th>Action</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr align='center'>";
   echo"<td><font color='black'>" .$row['name']."</font></td>";
   echo"<td><font color='black'>" .$row['id']."</font></td>";
   echo"<td><font color='black'>" .$row['contact']. "</font></td>";
   echo"<td><font color='black'>" .$row['address']. "</font></td>";
   echo"<td><a href=Donord.php?contact=".$row['contact'].">Delete/</a><a href='updatemem.php'>Update</a>/<a href='print.php'>print</a></td>";									
   //echo"<td></td>";
   //echo"<td></td>";

echo "</tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
        <br><br><br><br><br>
   <center><button><a href='printall1.php'>Print</a></button></center>

   <div class="footer" style="background-color: black;">
        <p>Md.Mashuir Rahman | ID 16103358 </p>
        </div>
    </body>
</html>
