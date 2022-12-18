<?php session_start(); 
?>
<!Doctype html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
        <link rel="stylesheet" type="text/css" href="CSS.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <div class="header">
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>

            <ul class="menu">
                <a href="index.php">Početna</a>
                <a href="sfera.php">Sfera</a>
                <a href="ploca.php">Ravna ploča</a>
                <a id="active" href="anketa.php">Anketa</a>
                <?php	
				if(isset($_SESSION['user'])&&($_SESSION['tip']=='Admin')){
					echo '
                        <a href="uvid.php">Svi odgovori</a>
                        <a href="statistika.php">Statistika</a>
                        <a href="nevalidne.php">Nevalidne ankete</a>
                        ';
                    }
			    ?>
                <?php
            if(isset($_SESSION['user'])){
              echo "   
             <a   href='logout.php' style=' float:right; font-family: 'Ubuntu', sans-serif; font-size:20px;'>Odjavi se</a>
                  
                ";
            }else{
              echo "   
              <a  style=' float:right; font-family: 'Ubuntu', sans-serif; font-size:20px; ' href='Prijava.php'> Prijavi se</a>
             
                ";
            } 
          ?>
                <a  href="registracija.php" style="float: right; ">Registracija</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            </ul>
        </div>

        <section id="sekcija">
        <h1 class="h" style="font-size: 5vw; padding-left: 40%;"> Anketa! </h1>
        <h1 class="h" style="font-size: 5vw; padding-left: 40%;"> Anketa! </h1>
        <div  style=" padding-top:10%; font-family: Brush Script MT; font-size:25px;">
        <?php
                /* ukljucuje sve iz connection i poziva anketaUnos*/
				require 'Connection.php';
                include 'anketaUnos.php';
				
				header('Content-Type: text/html; charset=UTF-8');
                /*Proverava da li je korisnik prijavljen, mora biti prijavljen da bi radio anketu*/
				if(isset($_SESSION['user'])){
					$upit = "SELECT UradjenaAnketa FROM users WHERE UserName = '{$_SESSION['user']}' ";
					mysqli_query($conn,"SET NAMES utf8"); 
					$rezultat = mysqli_query($conn,$upit); //izvrsavanje upita
					$row = mysqli_fetch_assoc($rezultat); //kupi podatke iz baze
                    /*Proverava da li je korisnik vec radio anketu, ako nije: */
					if($row['UradjenaAnketa'] == 0) {
						
						$sql="SELECT  * FROM pitanjaiodg ";
						$result= $conn->query($sql);	
						$pitanja = array();
						$index = 0;
						while($row = mysqli_fetch_assoc($result)){ //stvaranje asocijativnog niza
							$pitanja[$index] = $row;
							$index++;
						}
                        /* Stampa formu - tekst pitanja i odgovora uyima iz baze i prikazuje  */
						echo '<form method="post">
								<br>
								<div id="Anketa">
									<h2>
										1. Pitanje
									</h2>
									<p>
									'.$pitanja[0]['pitanje'].'	
                                    </p>
                                    <input type="radio" name="t1" value="'.$pitanja[0]['odg1'].'" style="margin:0px 0px 15px 20px;" checked> '.$pitanja[0]['odg1'].'<br>
                                    <input type="radio" name="t1" value="'.$pitanja[0]['odg2'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[0]['odg2'].'<br>
                                    <input type="radio" name="t1" value="'.$pitanja[0]['odg3'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[0]['odg3'].'<br>
                                    <input type="radio" name="t1" value="'.$pitanja[0]['odg4'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[0]['odg4'].'<br>
                                    </div>
								<div id="Anketa">
									<h2>
										2. Pitanje
									</h2>
									<p>
									'.$pitanja[1]['pitanje'].'	
									</p>
									<input type="text" name="t2" style="width:270px;height:27px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>	
							
								</div>
								<div id="Anketa">
									<h2>
										3. Pitanje
									</h2>
									<p>
									'.$pitanja[2]['pitanje'].'	
									</p>
									<input type="checkbox" name="t3[]" value="'.$pitanja[2]['odg1'].'" style="margin-left:20px;" checked>'.$pitanja[2]['odg1'].'<br>
									<input type="checkbox" name="t3[]" value="'.$pitanja[2]['odg2'].'" style="margin-left:20px;">'.$pitanja[2]['odg2'].'<br>
                                    <input type="checkbox" name="t3[]" value="'.$pitanja[2]['odg3'].'" style="margin-left:20px;">'.$pitanja[2]['odg3'].'<br>
									<input type="checkbox" name="t3[]" value="'.$pitanja[2]['odg4'].'" style="margin-left:20px;">'.$pitanja[2]['odg4'].'<br>
								</div>
                                <div id="Anketa">
                                <h2>
                                    4. Pitanje
                                </h2>
                                <p>
                                '.$pitanja[3]['pitanje'].'
                                </p>
                                <input type="checkbox" name="t4[]" value="'.$pitanja[3]['odg1'].'" style="margin-left:20px;" checked>'.$pitanja[3]['odg1'].'<br>
                                <input type="checkbox" name="t4[]" value="'.$pitanja[3]['odg2'].'" style="margin-left:20px;">'.$pitanja[3]['odg2'].'<br>
                                <input type="checkbox" name="t4[]" value="'.$pitanja[3]['odg3'].'" style="margin-left:20px;">'.$pitanja[3]['odg3'].'<br>
                                <input type="checkbox" name="t4[]" value="'.$pitanja[3]['odg4'].'" style="margin-left:20px;margin-bottom:20px;">'.$pitanja[3]['odg4'].'
                            </div>
                            <div id="Anketa">
                                <h2>
                                    5. Pitanje
                                </h2>
                                <p>
                                '.$pitanja[4]['pitanje'].'
                                </p>
                                <textarea rows="4" cols="50" name="t5" style="width:270px;height:70px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
                           </textarea></div>
                            <div id="Anketa">
                                <h2>
                                    6. Pitanje
                                </h2>
                                <p>
                                '.$pitanja[5]['pitanje'].'
                                </p>
                                <input type="radio" name="t6" value="'.$pitanja[5]['odg1'].'" style="margin:0px 0px 15px 20px;" checked> '.$pitanja[5]['odg1'].'<br>
                                <input type="radio" name="t6" value="'.$pitanja[5]['odg2'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[5]['odg2'].'<br>
                                <input type="radio" name="t6" value="'.$pitanja[5]['odg3'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[5]['odg3'].'<br>
                                <input type="radio" name="t6" value="'.$pitanja[5]['odg4'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[5]['odg4'].'<br>
                                
                                </div>
                            <div id="Anketa">
                                <h2>
                                    7. Pitanje
                                </h2>
                                <p>
                                '.$pitanja[6]['pitanje'].'
                                </p>
                                <input type="text" name="t7" style="width:270px;height:27px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>	
                            </div>
                            <div id="Anketa">
                                <h2>
                                    8. Pitanje
                                </h2>
                                <p>
                                '.$pitanja[7]['pitanje'].'	
                                </p>
                                <select name="t8"  style="width:270px;height:32px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
                                <option value="'.$pitanja[7]['odg1'].'">'.$pitanja[7]['odg1'].'</option>
                                <option value="'.$pitanja[7]['odg2'].'">'.$pitanja[7]['odg2'].'</option>
                                <option value="'.$pitanja[7]['odg3'].'">'.$pitanja[7]['odg3'].'</option>
                                <option value="'.$pitanja[7]['odg4'].'">'.$pitanja[7]['odg4'].'</option>
                            </select>
                            </div>
                            <div id="Anketa">
                                <h2>
                                    9. Pitanje
                                </h2>
                                <p>
                                '.$pitanja[8]['pitanje'].'
                                </p>
                                <input type="textarea" rows="4" cols="50" name="t9" style="width:270px;height:70px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
                            </div>
                            <div id="Anketa">
                            <h2>
                                    10. Pitanje 
                                </h2>
                            <p>
                            '.$pitanja[9]['pitanje'].'	
                            </p>
                            <select name="t10" value="zzz" style="width:270px;height:32px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
                                <option value="'.$pitanja[9]['odg1'].'">'.$pitanja[9]['odg1'].'</option>
                                <option value="'.$pitanja[9]['odg2'].'">'.$pitanja[9]['odg2'].'</option>
                                <option value="'.$pitanja[9]['odg3'].'">'.$pitanja[9]['odg3'].'</option>
                                <option value="'.$pitanja[9]['odg4'].'">'.$pitanja[9]['odg4'].'</option>
                            </select>
                            </div>
					
					<input type="submit" name="anketaZemlja" value="KRAJ" style="width:10%; height:20%;margin:0px 0px 50px 600px;font-size:25px;border-radius:50px;background-color:#173A58; color:white;">
				</form>';
		}
        /*Ako je korisnik vec popunio anketu  */
		else {
			echo '<h2 style="color:#0b4564; text-align:center;">
						Uspešno ste popunili anketu! Hvala!
				  </h2>';
		}
        /*Ako korsnik nije prijavljen */
	} else {
		echo '<h2 style="color:#0b4564; text-align: center;">
					Morate biti prijavljeni da biste popunili anketu!
			  </h2>';
	}
?>
        </section>
       
    </body>
</html>

                                
