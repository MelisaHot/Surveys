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
					echo '  	<a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak učesnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		
		</aside>
		<section>
			<div id="animated">
				<h1>POZVANI STUDENTI</h1>			
			</div>
			<br>
			<center>
			<table style="color:white;padding-left:17px;width:700px;height:800px;text-align:center;font-size:25px;margin:0px;">
				<tr>
					<th id="animated">IME:</th>
					<th id="animated">PREZIME:</th>
					<th id="animated">EMAIL:</th>
				</tr>
				<tr>
					<td>Samra</td>
					<td>Camić</td>
					<td>samra@gmail.com</td>
				</tr>
				<tr>
					<td>Ena</td>
					<td>Trtovac</td>
					<td>ena_trtovac@gmail.com</td>
				</tr>
				<tr>
					<td>Adem</td>
					<td>Mulić</td>
					<td>adem@gmail.com</td>
				</tr>
				<tr>
					<td>Adem</td>
					<td>Kačapor</td>
					<td>ademk@gmail.com</td>
				</tr>
				<tr>
					<td>Elzina</td>
					<td>Boljetini</td>
					<td>eboljetini@gmail.com</td>
				</tr>
				<tr>
					<td>Lejla</td>
					<td>Hasanović</td>
					<td>lhasanovic@outlook.com</td>
				</tr>
				<tr>
					<td>Mihajlo</td>
					<td>Premović</td>
					<td>miha.premke@gmail.com</td>
				</tr>
				<tr>
					<td>Tarik</td>
					<td>Hadzić</td>
					<td>tarik@hotmail.com</td>
				</tr>
				<tr>
					<td>Amina</td>
					<td>Ćatović</td>
					<td>arahic@outlook.com</td>
				</tr>
				<tr>
					<td>Đorđe</td>
					<td>Janićijević</td>
					<td>djole@gmail.com</td>
				</tr>
			</table>
		</center>
		</section>		
	</div>
	<footer>
		<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontak</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>