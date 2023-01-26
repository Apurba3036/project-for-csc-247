<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_project";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully\n";

		$sql = "SELECT * FROM employee";

		$result = $conn->query($sql);
		echo"<table><tr><th>Name</th><th>Id</th><th>Contact</th></tr>";

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// HERE EVERY TABLE DATA WILL CONTAIN DIFFRENT ID TO PRINT
				echo "<tr><td id='a".$row['id']."'>".$row['name']."</td><td id='b".$row['id']."'>".$row['id']."</td>";
				echo "<td id='c".$row['id']."'>".$row['contact']."</td>";
				echo "<td><form action='' method='GET'><input type='submit' idS='print".$row['id']."' value='Print'></form></td></tr>";
// PDF STARTS FROM HERE
				if(isset($_GET['print'.$row['id']])){

					echo "<script>
					var mywindow = window.open('', 'PRINT', 'height=400,width=600');
					mywindow.document.write('<html><head><title>' + document.title  + '</title>');
					mywindow.document.write('</head><body >');
					mywindow.document.write('<h1>' + 'Employee Information'  + '</h1>');
					mywindow.document.write(document.getElementById('a".$row['id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('b".$row['id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('c".$row['id']."').innerHTML);
					mywindow.document.write(' -- ');
			
					mywindow.document.write('</body></html>');
					mywindow.document.close(); // necessary for IE >= 10
					mywindow.focus(); // necessary for IE >= 10*/

					mywindow.print();
					mywindow.close();
					history.back(); // IT WILL TAKE YOU BAKE PAGE
					</script>";
				}





			}echo"</table>";
		}else{
				echo "No search found!!!";
		}
	$conn->close();
	 ?>
