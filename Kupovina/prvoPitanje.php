<?php
 require "Connection.php";

$sql="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =1 AND odgovor = 'Manje od 1 sat dnevno'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);


$sql1="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =1 AND odgovor = '1,5 do 3 sata dnevno'";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_assoc($result1);

$sql2="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =1 AND odgovor = '3,5 do 5 sati dnevno'";
$result2=mysqli_query($conn,$sql2);
$data2=mysqli_fetch_assoc($result2);


$sql3="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =1 AND odgovor = '5,5 do 7 sati dnevno'";
$result3=mysqli_query($conn,$sql3);
$data3=mysqli_fetch_assoc($result3);

$sql4="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =1 AND odgovor = 'Više od 7 sati dnevno'";
$result4=mysqli_query($conn,$sql4);
$data4=mysqli_fetch_assoc($result4);


$dataPoints = array( 
	array("label"=>"Manje od 1 sat dnevno", "y"=> $data['total']),
	array("label"=>"1,5 do 3 sata dnevno", "y"=>$data1['total']),
	array("label"=>"3,5 do 5 sati dnevno", "y"=>$data2['total']),
	array("label"=>"5,5 do 7 sati dnevno", "y"=>$data3['total']),
	array("label"=>"Više od 7 sati dnevno", "y"=>$data4['total'])
)

?>