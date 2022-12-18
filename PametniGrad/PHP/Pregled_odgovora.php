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
$sql="SELECT Kor_ime, anketa, pitanje1, pitanje2, pitanje3, pitanje4, pitanje5, pitanje6, pitanje7, pitanje8, pitanje9, pitanje10, Datum FROM anketa";
mysqli_query($conn,"SET NAMES utf8"); 
$ticket = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($ticket)){
    $uradjen[] = $row; 
}

?>
          
    <div id="Tabela">
            <h1 style="color:#EFEDEC;text-align:center;font-size:50px;margin:30px 0px 0px 0px">PREGLED ODGOVORA</h1> 
    <table border="1" class="Odgovori_pregled" style="text-align:center;overflow:scroll;">
<tr>
    <th>Kor_ime:</th>
    <th>Anketa:</th>
    <th>Pitanje1:</th>
    <th>Pitanje2:</th>
    <th>Pitanje3:</th>
    <th>Pitanje4:</th>
    <th>Pitanje5:</th>
    <th>Pitanje6:</th>
    <th>Pitanje7:</th>
    <th>Pitanje8:</th>
    <th>Pitanje9:</th>
    <th>Pitanje10:</th>
    
    <th>Datum:</th>
</tr>
<?php for($i=0; $i<sizeof($uradjen); $i++){ ?>
<tr>
    <td>
        <?php {echo $uradjen[$i]["Kor_ime"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["anketa"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje1"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje2"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje3"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje4"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje5"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje6"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje7"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje8"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje9"];} ?>
    </td>
    <td>
        <?php {echo $uradjen[$i]["pitanje10"];} ?>
    </td>
    
    <td>
        <?php {echo date("H:i d-m-Y", strtotime($uradjen[$i]["Datum"]));} ?>      
    </td>
</tr>
<?php } ?>
    </table>
    </div>
</body>
</html>