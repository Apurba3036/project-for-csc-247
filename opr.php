<?php
//Connect with MYSQL
	$con=mysqli_connect('localhost','root','');
	//Select Database
	mysqli_select_db($con,'db_project');
	
	//UPDATE QUERY
	$sql = "UPDATE employee SET name= '$_POST[name]',id='$_POST[id]',contact='$_POST[contact]' WHERE id='$_POST[id]'";
	
	//Execute the query
	if(mysqli_query($con,$sql))
		header("refresh:1; url=projectview.php");
	else
		echo "Not Update";
?>