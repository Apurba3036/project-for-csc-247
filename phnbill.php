<?php
//Connect with MYSQL
	$con=mysqli_connect('localhost','root','');
	//Select Database
	mysqli_select_db($con,'db_project');
	
	//UPDATE QUERY
	$sql = "UPDATE bank SET name= '$_POST[name]',contact='$_POST[contact]',address='$_POST[address]' WHERE name='$_POST[name]'";
	
	//Execute the query
	if(mysqli_query($con,$sql))
		header("refresh:1; url=Donationview.php");
	else
		echo "Not Update";
?>