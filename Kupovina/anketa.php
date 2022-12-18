<?php session_start(); 
?>
<!Doctype html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <section>
        <!--div>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label-->
            
            <ul class="menu" style="text-align: right;">
                <img src="online4.png" style="float: left; padding: 30px 0; width: 40px;" >
                <a href="index.php">Početna</a>
                <a href="prodavnica.php">Šta je online prodavnica?</a>
                <a href="prednosti.php">Prednosti i mane</a>
                <a id="active" href="anketa.php">Anketa</a>
                <?php	
				if(isset($_SESSION['korisnik'])&&($_SESSION['tip']=='Admin')){
					echo '
                        <a href="uvid.php">Svi odgovori</a>
                        <a href="statistika.php">Statistika</a>
                        <a href="nevalidne.php">Nevalidne ankete</a>
                        ';
                    }
			    ?>
                <?php                
            if(isset($_SESSION['korisnik'])){
              echo "   
             <a href='logout.php' style=' float:right; font-family: 'Open Sans', sans-serif; font-size:20px; '>Odjavi se</a>
                  
                ";
            }else{
              echo "   
              <a  href='prijava.php' style=' float:right; font-family: 'Open Sans', sans-serif; font-size:20px; '> Prijavi se</a>
              <p style='float: left; color: #fff; padding: 40px 0; margin: 5px; font: 100%/1.5em 'Open Sans', sans-serif; color: #fff;'>ONLINE KUPOVINA</p>
             
              ";
            } 
          ?>
               <a href="registracija.php" style="float: right; ">Registracija</a>
            <!--label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label-->
            </ul>
        </div>
        <div class="text-box" style="color: #fff; margin-top: -10%;">
            <h1> Anketa</h1>
        </div>
        <form name="Form" method="POST" action="#" >
        <section class="content" style="margin-top: 10%;">
        <div class="fieldset" style="margin-top: 2%; padding: 20px; text-align: left;">
            
<?php 
require 'Connection.php';
    if(isset($_SESSION['korisnik'])){
        $upit = "SELECT Anketa FROM korisnici WHERE KorisnickoIme = '{$_SESSION['korisnik']}' ";
        $rezultat = mysqli_query($conn,$upit); //izvrsavanje upita
        $row = mysqli_fetch_assoc($rezultat); //kupi podatke iz baze
        if($row['Anketa'] == 0) {
            $sql = "SELECT * FROM pitanja";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {  
            // output data of each row
            
            
            while($row = $result->fetch_assoc()) {
                echo "<h1> " . $row["pitanje"]. "". "</h1>";
                $sqlNew="SELECT * FROM ponudjeniodgovori WHERE idpitanja =" . $row["id"]. "";
                    $resultNew=$conn->query($sqlNew);
                    $brp = $row["id"];
                    if($brp == 7)
                        echo "<select name='list[".$row['id']."]' required>";
                    elseif($brp == 9)
                        echo "<select name='list[".$row['id']."]' required>";
                    while($rowNew = $resultNew->fetch_assoc()) {
                        switch($rowNew["idpitanja"])
                        {
                            case 1:
                                echo "<input type='radio' name='list[".$row['id']."]' value='".$rowNew["odgovor"]."' checked > " . $rowNew["odgovor"]. "". "<br>";
                                break;                                
                            case 2: 
                                echo "<input type='checkbox' name='list[".$row['id']."][]' value='".$rowNew["odgovor"]."'> " . $rowNew["odgovor"]. "". "<br>"; 
                                break;
                            case 3:
                                echo "<input type='text' name='list[".$row['id']."]' required> " . $rowNew["odgovor"]. "". "<br>";
                                break;
                            case 4:
                                echo "<input type='radio' name='list[".$row['id']."]' value='".$rowNew["odgovor"]."' checked> " . $rowNew["odgovor"]. "". "<br>";
                                break;                                
                            case 5:
                                echo "<input type='checkbox' name='list[".$row['id']."][]' value='".$rowNew["odgovor"]."'> " . $rowNew["odgovor"]. "". "<br>"; 
                                break;
                            case 6:
                                echo "<input type='text' name='list[".$row['id']."]' required> " . $rowNew["odgovor"]. "". "<br>";
                                break;
                            case 7:
                                echo "<option value='".$rowNew["odgovor"]."'>".$rowNew["odgovor"]."</option>";
                                break;                  
                            case 8: 
                                echo "<textarea id='myTextarea' rows='4' cols='50' name='list[".$row['id']."]' style='width:270px;height:70px;font-size:25px;text-align:center;' required></textarea>";
                                break;
                            case 9:
                                echo "<option value='".$rowNew["odgovor"]."'>".$rowNew["odgovor"]."</option>";
                                break;
                            case 10:
                                echo "<textarea rows='4' cols='50' name='list[".$row['id']."]' style='width:270px;height:70px;font-size:25px;text-align:center;' required></textarea>";
                                break;
                        
                        }
                      
                    }  
                    if($brp == 7 || $brp == 9)
                        echo "</select>";     
                    if($brp == 10){
                        echo "</div>";
                    }
                    
                    else{
                        
                        echo "</div><div class='fieldset' style='margin-top: 5%; padding: 20px; text-align: left;'>";
                    }
                    
                
            }
            
            } else {
            echo "0 results";
            }
            echo '
            ';
            echo '
            ';
            echo "<input type='submit' name='anketa' value='Sačuvaj odgovore'>";
        }
        else {
			echo '<h2 style="color:rgba(231,117,0.7); text-align:center;">
						Uspešno popunjena anketa!
				  </h2>';
		}
	} else {
		echo '<h2 style="color:rgba(231,117,0.7); text-align: center;">
					Prijavite se da biste popunili anketu!
			  </h2>';
	}

    
        ?>
        </section>
</form>

<?php        
$validnaAnketa = 0;
    if (isset($_POST['anketa'])){
        $r[] = "";
        foreach ($_POST['list'] as $row => $value){
            if (!is_array($value)) {
                $value = [$value];                
               
            }
            
            foreach ($value as $v) { 
                //echo $row."";
                //echo $v . "<br>";
                $lines = preg_split('/\n+/', trim($v));
                $text = implode("\n", $lines);
                $r[$row] = $v;       
    
            }
        }         

       if($r[1] == "Više od 7 sati dnevno" && $r[2] == "Zabava" && $r[4] == "Ne" && $r[5] == "Još uvek nisam našao/la interesantnu ponudu"){
            if((strlen($r[3]) == 1) && (strlen($r[6]) == 1)){
                if(strcmp($r[3], $r[6]) == 0){
                    $validnaAnketa = 0;
                }
                else
                    $validnaAnketa = 1;
            }
            else
                $validnaAnketa = 1;
        }
        else
            $validnaAnketa = 1;

            if(empty($r[2]) || empty($r[2]) || empty($r[8]) || empty($r[10]))
                $validnaAnketa = -1;

       

            if($validnaAnketa == 0 || $validnaAnketa == 1){
                //moze insert
                foreach ($_POST['list'] as $row => $value){
                    if (!is_array($value)) {
                        $value = [$value];                
                       
                    }
                    
                    foreach ($value as $v) { 
                        //echo $row."";
                        //echo $v . "<br>";
                        $lines = preg_split('/\n+/', trim($v));
                        $text = implode("\n", $lines);   
                        
                        $upitInsert = "INSERT INTO anketa (idkorisnika, idpitanja, odgovor) 
                        VALUES ('{$_SESSION['id']}','{$row}','{$text}')";
                        mysqli_query($conn,"SET NAMES utf8"); 
                        mysqli_query($conn,$upitInsert); 
                        
                    
                    } 
                }
                    $upitUpdate = "UPDATE korisnici SET Anketa = 1 WHERE KorisnickoIme = '{$_SESSION['korisnik']}' ";
                    mysqli_query($conn,$upitUpdate);
                    
                    $upitUpdate2 = "UPDATE korisnici SET Validna = $validnaAnketa WHERE KorisnickoIme = '{$_SESSION['korisnik']}' ";
                    mysqli_query($conn,$upitUpdate2);
                    echo "<meta http-equiv='refresh' content='0'>";
                   // echo "moze insert";
                   // echo $validnaAnketa;
                
            }
            else{
                echo "ne moze insert";
               // echo $validnaAnketa;
               echo '<h2 style="color:rgba(231,117,0.7); text-align:center;">
						Popunite sva polaj!
				  </h2>';
            }

           
        }
?>



    </body>
</html>

                                
