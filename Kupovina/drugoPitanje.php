<?php
 require "Connection.php";

$upit="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =9 AND odgovor = 'Ušteda vremena i novca'";
$rezultat=mysqli_query($conn,$upit);
$podatak=mysqli_fetch_assoc($rezultat);


$upit1="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =9 AND odgovor = 'Mogućnost kupovine 24 sata'";
$rezultat1=mysqli_query($conn,$upit1);
$podatak1=mysqli_fetch_assoc($rezultat1);

$upit2="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =9 AND odgovor = 'Sigurna kupovina'";
$rezultat2=mysqli_query($conn,$upit2);
$podatak2=mysqli_fetch_assoc($rezultat2);


$upit3="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =9 AND odgovor = 'Kupovina novih/nepoznatih/neistraženih proizvoda i usluga po nižim cenama'";
$rezultat3=mysqli_query($conn,$upit3);
$podatak3=mysqli_fetch_assoc($rezultat3);

$upit4="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =9 AND odgovor = 'Manji napor u poređenju sa tradicionalnom kupovinom'";
$rezultat4=mysqli_query($conn,$upit4);
$podatak4=mysqli_fetch_assoc($rezultat4);


$upit5="SELECT COUNT(odgovor) AS total FROM anketa WHERE idpitanja =9 AND odgovor = 'Raznolikost ponude'";
$rezultat5=mysqli_query($conn,$upit5);
$podatak5=mysqli_fetch_assoc($rezultat5);

$podatakPoints = array( 
	array("label"=>"Ušteda vremena i novca", "y"=> $podatak['total']),
	array("label"=>"Mogućnost kupovine 24 sata", "y"=>$podatak1['total']),
	array("label"=>"Sigurna kupovina", "y"=>$podatak2['total']),
	array("label"=>"Kupovina novih/nepoznatih/neistraženih proizvoda i usluga po nižim cenama", "y"=>$podatak3['total']),
	array("label"=>"Manji napor u poređenju sa tradicionalnom kupovinom", "y"=>$podatak4['total']),
    array("label"=>"Raznolikost ponude", "y"=>$podatak5['total']),
);


?>

