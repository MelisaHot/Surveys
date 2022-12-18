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
<body>
	<?php
		include 'Insert.php';
	?>
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
					echo '  <a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak učesnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		</aside>
		<section class="Registracija">
			<h1>Prijavite se </h1>
			<h4 style="color:red; text-align: center;"><?php if(!empty($problem)) echo $problem;?></h4>
			<?php 
				if(isset($_SESSION['korisnik'])){
				
					echo "
					<p style='text-align:center;padding:0px 10px 0px 10px;'>Dobrodošli: {$_SESSION['korisnik']}</p> 
					";
					
				} else
				{ echo '
			<form action="#" method="POST" name="mojaForma" onsubmit="return proveriValidaciju()">

				<table>
				
					<tr>
						<td><p style="padding-left: 60px;" >Korisničko ime:</p></td>
						<td><input name="USERNAME" type="text" size="20" minlength=5 style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					
					<tr>
						<td><p style="padding-left: 60px;">Šifra:</p></td>
						<td><input name="PASSWORD" type="Password" minlength=5 size="20" style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><br><input type="submit" name="log" value="Loguj se" style="color: #EFEDEC; border-radius:20px;width:150px;height:30px;font-size:20px;background-color:#06649D;" >
						</td>
					</tr>
				</table>
			</form>';
		}
			?>
		</section>
	</div>
	<footer>
		<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontak</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>