<?php
	//Connect with MYSQL
	$con=mysqli_connect("localhost",'root','');
	//Select Database
	mysqli_select_db($con,'db_project');
	
	//SELECT QUERY
	$sql = "SELECT * FROM bank";
	
	//Execute the query
	$records = mysqli_query($con,$sql);
	
?>
<table align="center">
	<tr>
		<th>Name</th>
		<th>Contact</th>
		<th>Address</th>
		
	</tr>
	<?php
	while($row = mysqli_fetch_array($records))
	{
			echo "<tr><form action=phnbill.php method= post>";
			echo "<td><input type=text name=name value='".$row['name']."'></td>";
			echo "<td><input type=text name=contact value='".$row['contact']."'></td>";
			echo "<td><input type=text name=vat value='".$row['address']."'></td>";
			echo "<td><input type=submit>";
			echo "</form></tr>";
	}
	?>