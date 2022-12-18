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
<body  style="background-image:linear-gradient(#173A58, #A89495)";>
<?php 
    include 'Konekcija.php';
    include 'login.php';
    $uradjen = array();
    $sql="SELECT Kor_ime,Datum,sredina,zdrastvo,transport FROM korisnici WHERE 1";
    mysqli_query($conn,"SET NAMES utf8"); 
    $ticket = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($ticket)){
        $uradjen[] = $row; 
    }

    $nagrade = array(
        "0" => "Besplatni EKG",
        "1" => "Besplatni merač krvnog pritiska",
        "2" => "Besplatan echo abdomena",
        "3" => "Besplatno nedeljno parkiranje u gradu",
        "4" => "Besplatno jednodnevno parkiranje u gradu",
        "5" => "Jednodnevna putarina na autoputu",
        "6" => "Besplatni jednodnevni ulaz na bazen",
        "7" => "Besplatni izlet",
        "8" => "Besplatni ulaz u ZOO vrt");

    $p1 = array();
    $p2 = array();
    $p3 = array();
    for($i=0; $i<sizeof($uradjen); $i++){
        if(($uradjen[$i]["sredina"] + $uradjen[$i]["zdrastvo"] + $uradjen[$i]["transport"]) == "1"){
            $p1[] = $uradjen[$i]["Kor_ime"];
        }
        elseif(($uradjen[$i]["sredina"] + $uradjen[$i]["zdrastvo"] + $uradjen[$i]["transport"]) == "2"){
            $p2[] = $uradjen[$i]["Kor_ime"];
        }
        elseif(($uradjen[$i]["sredina"] + $uradjen[$i]["zdrastvo"] + $uradjen[$i]["transport"]) == "3"){
            $p3[] = $uradjen[$i]["Kor_ime"];
        }
    }

    $num1 = rand(0, count($p1)-1);
    $nag1 = rand(0, 2);   
       

    $num2 = rand(0, count($p2)-1);
    $nag2 = rand(3, 5);
      

    $num3 = rand(0, count($p3)-1);
    $nag3 = rand(6, 8);
?>

    <h1 style="color:#EFEDEC;text-align:center;font-size:50px;margin:30px 0px 0px 0pxč font-weight:bold; text-shadow: 7px -5px rgb(9, 31, 51);">DOBITNICI NAGRADA</h1>     
       
    <div id="Crna">
        <center>
        <table class="Dobitnici">
            <tr>
                <td>
                    <?php echo "Korisnik: " . $p1[$num1]; ?>
                </td>
                <td>
                    <?php echo " je dobio nagradu "; ?>
                </td>
                <td>
                    <?php echo $nagrade[$nag1]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "Korisnik: " . $p2[$num2]; ?>
                </td>
                <td>
                    <?php echo " je dobio nagradu "; ?>
                </td>
                <td>
                    <?php echo $nagrade[$nag2]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "Korisnik: " . $p3[$num3]; ?>
                </td>
                <td>
                    <?php echo " je dobio nagradu "; ?>
                </td>
                <td>
                    <?php echo $nagrade[$nag3]; ?>
                </td>
            </tr>
            <tr>    
                <td colspan="3" style="text-align:center;"> 
                    <br>
                    <?php 
                        if(isset($_SESSION['korisnik'])&&($_SESSION['tip']=='Administrator')){ 
                            echo '
                                    <input type="button" name="random" value="Dodeli" onClick="window.location.reload();" style="width:150px;height:50px;font-size:35px;border-radius:50px;background-color:red;">
                                 ';
                        }
                    ?>
                </td> 
            </tr>
        </table>
        </center>
    </div>
</body>
</html>


