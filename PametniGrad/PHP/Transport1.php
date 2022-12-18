<?php session_start(); 
?>
<!Doctype html>
<html>
<head>
	<title>Pametni grad</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css_stil.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
</head>
</head>
<body>
	<?php
		include 'login.php';
	?>
	<header id="Go Up">
		<div id="Log_in">
			<?php
			if(isset($_SESSION['korisnik'])){
				echo "   
				<table style='margin:0px 0px 0px 816px;'>
					<tr>
						<td>
							<p style='color:white; font-size:20px; padding:0px 10px 0px 100px; font-weight:bold;' ><a href='logout.php'>Log out</a></p>
					 	</td>
				 	</t>
				</table>
					 ";
			} 
			?>
		</div>
		<nav> <!--glavni menu-->
			<a class="fa fa-home" href="index.php" class="trenutna"> POČETNA</a>
			<a class="fa fa-tree"  href="Sredina.php"> SREDINA</a>
			<a class="fa fa-car" href="Transport.php"> TRANSPORT</a>
			<a class="fa fa-medkit"  href="Zdravstvo.php"> ZDRAVSTVO</a>
			<a class="fa fa-sign-in-alt" href="Logovanje1.php"> PRIJAVI SE</a>
			<a  class="fa fa-user" href="Registracija.php"> REGISTRUJ SE</a>
		</nav>
	</header>
	<div id="Telo">
		<aside> <!--Ankete menu-->
			<p  >ANKETE</p>
			<a class="fa fa-tree" href="Sredina1.php"> Životna sredina</a>
			<a class="fa fa-car" href="Transport1.php"> Transport</a>
			<a class="fa fa-medkit" href="Zdravstvo1.php"> Zdrvstvo</a>
			<!--ako je admin-->
			<?php	
				if(isset($_SESSION['korisnik'])&&($_SESSION['tip']=='Administrator')){
					echo '	<a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak učesnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		</aside>
		<section>
			<div id="animated">
				<h1>Anketa: Pametni transport</h1>	
			</div>
			<?php
				require 'Konekcija.php';
				include 'anketa1.php';
				header('Content-Type: text/html; charset=UTF-8');

				if(isset($_SESSION['korisnik'])){
					$upit = "SELECT transport FROM korisnici WHERE Kor_ime = '{$_SESSION['korisnik']}' ";
					mysqli_query($conn,"SET NAMES utf8"); 
					$rezultat = mysqli_query($conn,$upit); //izvrsavanje upita
					$row = mysqli_fetch_assoc($rezultat); //kupi podatke iz baze
					if($row['transport'] == 0) {
						
						$sql="SELECT  * FROM pitanjaiodg WHERE anketa='Transport' ";
						$result= $conn->query($sql);	
						$pitanja = array();
						$index = 0;
						while($row = mysqli_fetch_assoc($result)){
							$pitanja[$index] = $row;
							$index++;
						}
						echo '<form method="post">
								<br>
								<div id="Anketa">
									<h2>
										1-Pitanje
									</h2>
									<p>
									'.$pitanja[0]['pitanje'].'	
									</p>
									<select name="t1" value="zzz" style="width:270px;height:32px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
									<option value="'.$pitanja[0]['odg1'].'">'.$pitanja[0]['odg1'].'</option>
									<option value="'.$pitanja[0]['odg2'].'">'.$pitanja[0]['odg2'].'</option>
									<option value="'.$pitanja[0]['odg3'].'">'.$pitanja[0]['odg3'].'</option>
									<option value="'.$pitanja[0]['odg4'].'">'.$pitanja[0]['odg4'].'</option>
								</select>
									</div>
								<div id="Anketa">
									<h2>
										2-Pitanje
									</h2>
									<p>
									'.$pitanja[1]['pitanje'].'	
									</p>
									<input type="text" name="t2" style="width:270px;height:27px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>	
							
								</div>
								<div id="Anketa">
									<h2>
										3-Pitanje
									</h2>
									<p>
									'.$pitanja[2]['pitanje'].'	
									</p>
									<input type="checkbox" name="t3" value="'.$pitanja[2]['odg1'].'" style="margin-left:20px;" checked>'.$pitanja[2]['odg1'].'<br>
									<input type="checkbox" name="t3" value="'.$pitanja[2]['odg2'].'" style="margin-left:20px;">'.$pitanja[2]['odg2'].'<br>
									<input type="checkbox" name="t3" value="'.$pitanja[2]['odg3'].'" style="margin-left:20px;">'.$pitanja[2]['odg3'].'<br>
									<input type="checkbox" name="t3" value="'.$pitanja[2]['odg3'].'" style="margin-left:20px;margin-bottom:20px;">'.$pitanja[2]['odg4'].'
								
								</div>
								<div id="Anketa">
									<h2>
										4-Pitanje
									</h2>
									<p>
									'.$pitanja[3]['pitanje'].'
									</p>
									<input type="checkbox" name="t4" value="'.$pitanja[3]['odg1'].'" style="margin-left:20px;" checked>'.$pitanja[3]['odg1'].'<br>
									<input type="checkbox" name="t4" value="'.$pitanja[3]['odg2'].'" style="margin-left:20px;">'.$pitanja[3]['odg2'].'<br>
									<input type="checkbox" name="t4" value="'.$pitanja[3]['odg3'].'" style="margin-left:20px;">'.$pitanja[3]['odg3'].'<br>
									<input type="checkbox" name="t4" value="'.$pitanja[3]['odg3'].'" style="margin-left:20px;margin-bottom:20px;">'.$pitanja[3]['odg4'].'
								</div>
								<div id="Anketa">
									<h2>
										5-Pitanje
									</h2>
									<p>
									'.$pitanja[4]['pitanje'].'
									</p>
									<select name="t5" value="zzz" style="width:270px;height:32px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
									<option value="'.$pitanja[4]['odg1'].'">'.$pitanja[4]['odg1'].'</option>
									<option value="'.$pitanja[4]['odg2'].'">'.$pitanja[4]['odg2'].'</option>
									<option value="'.$pitanja[4]['odg3'].'">'.$pitanja[4]['odg3'].'</option>
									<option value="'.$pitanja[4]['odg4'].'">'.$pitanja[4]['odg4'].'</option>
								</select>
								</div>
								<div id="Anketa">
									<h2>
										6-Pitanje
									</h2>
									<p>
									'.$pitanja[5]['pitanje'].'
									</p>
									<input type="radio" name="t6" value="'.$pitanja[5]['odg1'].'" style="margin:0px 0px 15px 20px;" checked> '.$pitanja[5]['odg1'].'<br>
									<input type="radio" name="t6" value="'.$pitanja[5]['odg2'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[5]['odg2'].'<br>
									<input type="radio" name="t6" value="'.$pitanja[5]['odg3'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[5]['odg3'].'<br>
									<input type="radio" name="t6" value="'.$pitanja[5]['odg4'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[5]['odg4'].'
						
								</div>
								<div id="Anketa">
									<h2>
										7-Pitanje
									</h2>
									<p>
									'.$pitanja[6]['pitanje'].'
									</p>
									<input type="radio" name="t7" value="'.$pitanja[6]['odg1'].'" style="margin:0px 0px 15px 20px;" checked> '.$pitanja[6]['odg1'].'<br>
									<input type="radio" name="t7" value="'.$pitanja[6]['odg2'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[6]['odg2'].'<br>
									<input type="radio" name="t7" value="'.$pitanja[6]['odg3'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[6]['odg3'].'<br>
									<input type="radio" name="t7" value="'.$pitanja[6]['odg4'].'" style="margin:0px 0px 15px 20px;"> '.$pitanja[6]['odg4'].'
						
								</div>
								<div id="Anketa">
									<h2>
										8-Pitanje
									</h2>
									<p>
									'.$pitanja[7]['pitanje'].'	
									</p>
									<input type="text" name="t8" style="width:270px;height:27px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>	
							
								</div>
								<div id="Anketa">
									<h2>
										9-Pitanje
									</h2>
									<p>
									'.$pitanja[8]['pitanje'].'
									</p>
									<textarea rows="4" cols="50" name="t9" style="width:270px;height:70px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
								</textarea></div>
								<div id="Anketa">
								<h2>
										10-Pitanje 
									</h2>
								<p>
								'.$pitanja[9]['pitanje'].'	
								</p>
								<textarea rows="4" cols="50" name="t10" style="width:270px;height:70px;margin:0px 0px 30px 155px;font-size:25px;text-align:center;" required>
								</textarea></div>
							
					
					<input type="submit" name="btnTransport" value="KRAJ" style="width:200px;height:70px;margin:0px 0px 50px 300px;font-size:50px;border-radius:50px;background-color:#173A58; color:white;">
				</form>';
		}
		else {
			echo '<h2 style="color:red; text-align:center;">
						Uspešno ste popunili anketu
				  </h2>';
		}
	} else {
		echo '<h2 style="color:red">
					Morate biti prijavljeni da biste popunili anketu!
			  </h2>';
	}
?>
</section>
</div>
<footer>
<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontakt</a><a href="#Go Up">Idi na vrh</a><b></p>
<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
</footer>
</body>
</html>