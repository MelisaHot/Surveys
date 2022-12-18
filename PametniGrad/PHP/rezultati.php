<?php session_start(); 
?>
<!Doctype html>
<html lang="en-US">
<head>
	<title>Pametni grad</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css_stil.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
	</head>
	
</head>
<body style="background-image:linear-gradient(#173A58, #A89495)";>
<?php 
include 'Konekcija.php';


$uradjen = array();
$sql="SELECT Kor_ime,Datum,sredina,zdrastvo,transport FROM korisnici WHERE 1";
$ticket = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($ticket)){
	$uradjen[] = $row; 
}

?>
	<div id="Crna">
    <table class="Dobitnici">
<tr>
    <th>KORISNIČKO IME</th>
    <th>UČEŠĆE U ANKETAMA</th>
    <th>DATUM I VREME</th> 
</tr>
<?php for($i=0; $i<sizeof($uradjen); $i++){
	if(($uradjen[$i]["sredina"] == "1") || ($uradjen[$i]["zdrastvo"] == "1") || ($uradjen[$i]["transport"] == "1")) { ?>
<tr>
    <td><?php {echo $uradjen[$i]["Kor_ime"];} ?></td>
    <td><?php if($uradjen[$i]["sredina"] == "1"){
        echo strtoupper("ZAŠTITA ŽIVOTNE SREDINE <br>");
    }
    if($uradjen[$i]["zdrastvo"] == "1"){
        echo strtoupper(" PAMETNO ZDRAVSTVO <br>");
    } 
    if($uradjen[$i]["transport"] == "1"){
        echo " PAMETNI TRANSPORT";
    }?></td> 
    <td><?php if(($uradjen[$i]["sredina"] == "1") || ($uradjen[$i]["zdrastvo"] == "1") || ($uradjen[$i]["transport"] == "1")) {echo date("H:i d-m-Y", strtotime($uradjen[$i]["Datum"]));} ?></td>
</tr>
<?php }} ?>
    </table>
	</div>
</body>
</html>