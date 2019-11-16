<?php 
$hostname= "localhost";
	$username= "root";
	$password="";
	$dbname = "cr10_ricarda_nadler_biglibrary";

	$conn = mysqli_connect($hostname,$username,$password,$dbname);

	if(!$conn){
		echo '<script>alert("error")</script>';
	} 
 ?>