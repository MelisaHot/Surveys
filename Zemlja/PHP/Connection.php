<?php
	$serverName='localhost';
	$username='root';
	$password='';
	$dbName='Zemlja1';
	
	$conn = mysqli_connect($serverName,$username,$password,$dbName);
	
	if ($conn == FALSE){
		echo "Neuspešno uspostavljanje veze";
	}
