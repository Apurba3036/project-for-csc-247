<!DOCTYPE html>
<html>
<title>Search Result</title>

 <head>
    <link type="text/css" rel="stylesheet" href="Home%20page.css">
     <style>
         table,th,td{

             border:1px solid black;
			 border-collapse:collapse;
         }
         body{
          background-image:url(2.jpg);
          background-size:cover;
          background-position:center;
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
                    <li><a href="Donorview.php"><b>Client Information</b></a></li>
                    <li><a href="Donationview.php"><b>Bank Information</b></a></li>
                    <li><a href="projectview.php"><b>Employee Info</b></a></li>
                    </ul>
                    </a></li>
                <li class="insert"><a href="#"><b>Insert</b>
                    <ul class="dropup">
                    <li><a href="Donor%20Form.html"><b>Client Registration</b></a></li>
                    <li><a href="Donation%20Form.html"><b>Bank Sheet</b></a></li>
                    <li><a href="Project%20Form.html"><b>Employee Form</b></a></li>
                    </ul></a></li>
                <li class="active"><a href="Search%20page.html"><b><img src="search_box_icon.png" style="padding-right: 8px;" >     Search</b></a></li>
				<li class=" "><a href="#"><b>Report</b></a></li>
            </ul>
        </nav>
    </header>
        <br><br><br><br>
       <center><h1>Search Result</h1></center>
        <br><br>
<?php
    $con= new mysqli("localhost","root","","db_project");
    $name = $_POST['sallu'];
    //$query = "SELECT * FROM tb_customer
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM client
    WHERE contact LIKE '%{$name}%'");
	if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Name</th><th>Id</th><th>Contact</th><th>Address</th></tr>";
    // output data of each row

while ($row = mysqli_fetch_array($result))
{
        echo "<tr>";
        echo "<td>" . $row["name"]. "</td><td>" . $row["id"]."</td><td>".$row["contact"]."</td><td>".$row["address"]."</td>";
		echo "</tr>";
}
 echo "</table>";
}
else {
    echo "0 results";
}
    mysqli_close($con);
    ?>
	<br><br><br><br><br>
   <center><button><href='#'>Print</a></button></center>
         <div class="footer" style="background-color:black;margin-top:300px;">
        <p>Md.Mashuir Rahman | ID 16103358 </p>
        </div>
    </body>
</html>
