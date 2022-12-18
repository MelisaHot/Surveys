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
$sql="SELECT Ime,Prezime,Kor_ime,Email,Pol,Zemlja,sredina,zdrastvo,transport,Datum FROM korisnici";
mysqli_query($conn,"SET NAMES utf8"); 
$ticket = mysqli_query($conn, $sql);
while($row = @mysqli_fetch_assoc($ticket)){
    $uradjen[] = $row; 
}

?>
              
    <div id="Crna">
    <h1 style="color:#EFEDEC;text-align:center;font-size:50px;margin:30px 0px 0px 0px">SPISAK UČESNIKA U ANKETI</h1> 
    <table class="Ucesnici" style="width:auto;text-align:center;">
<tr>
    <th>IME:</th>
    <th>PREZIME:</th>
    <th>KOR_IME:</th>
    <th>EMAIL:</th>
    <th>POL:</th>
    <th>ZEMLJA:</th>
    <th>DATUM:</th>
</tr>
<?php for($i=0; $i<sizeof($uradjen); $i++){
    if(($uradjen[$i]["sredina"] == "1") || ($uradjen[$i]["zdrastvo"] == "1") || ($uradjen[$i]["transport"] == "1")) { ?>
<tr>
    <td>
        <?php {echo $uradjen[$i]["Ime"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["Prezime"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["Kor_ime"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["Email"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["Pol"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["Zemlja"];} ?>
    </td>
    <td><?php if(($uradjen[$i]["sredina"] == "1") || ($uradjen[$i]["zdrastvo"] == "1") || ($uradjen[$i]["transport"] == "1")) {echo date("H:i d-m-Y", strtotime($uradjen[$i]["Datum"]));} ?></td>
</tr>
<?php }} ?>
    </table>
    </div>
</body>
</html>