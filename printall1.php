<!DOCTYPE html>
<html>
<title>Bank Loan</title>

 <head>

    </head>
    <body>

<div id="a">
<center><h1 >Client Information</h1> </center>
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
    echo "<table align=center border=1><tr><th>Name</th><th>Id</th><th>Contact</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr align='center'>";
   echo"<td><font color='black'>" .$row['name']."</font></td>";
   echo"<td><font color='black'>" .$row['id']."</font></td>";
   echo"<td><font color='black'>" .$row['contact']. "</font></td>";
   echo"<td><font color='black'>" .$row['address']. "</font></td>";
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
 </div ><br><br><br>
 <center><button ><a href="#" id = "print" onclick= "javascript:printlayer('a')">Print </a></button></center>

   <script type = "text/javascript">
    function printlayer(layer)
    {

        var generator = window.open("", "", "width=800,height=1400");
        var layetext = document.getElementById(layer);
        generator.document.write(layetext.innerHTML.replace("Print Me"));

        generator.document.close();
        generator.print();
        generator.close();

    }
</script>

    </body>
</html>
