<?php session_start(); 


require 'Connection.php';
$query="SELECT pitanje1 , COUNT(*) FROM anketa  GROUP BY pitanje1";
mysqli_query($conn,"SET NAMES utf8"); 
$res= $conn->query($query);

while($row=$res->fetch_assoc()){
    mysqli_query($conn,"SET NAMES utf8"); 
    echo "['".$row['pitanje1']."',".$row['COUNT(*)']."],";
}  
?>