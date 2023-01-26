<?php
//Connect with MYSQL
	$con=mysqli_connect('localhost','root','');
	//Select Database
	mysqli_select_db($con,'db_project');
	
	//UPDATE QUERY
	$sql = "UPDATE client SET name= '$_POST[name]',id='$_POST[id]',contact='$_POST[contact]',address='$_POST[address]' WHERE contact=$_POST[contact]";
	
	//Execute the query
	if(mysqli_query($con,$sql))
		header("refresh:1; url=Donorview.php");
	else
		echo "Not Update";
?>