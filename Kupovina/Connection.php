<?php
	$serverName='localhost';
	$username='root';
	$password='';
	$dbName='kupovina';
	
	$conn = mysqli_connect($serverName,$username,$password,$dbName);
	mysqli_query($conn,"SET NAMES utf8"); 
	
	if ($conn == FALSE){
		echo "Neuspešno uspostavljanje veze";
	}
