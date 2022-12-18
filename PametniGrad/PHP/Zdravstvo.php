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
				<h1>PAMETNO ZDRAVSTVO</h1>	
			</div>
			<p>
			I naš zdravstveni sistem ima svoje nedostatke. Pod stalnim je pritiskom rezanja i dugih lista čekanja, a sve se zadržava na 
			kvalitetu usluge koju može pružiti. Ali zamislite scenario gde svi pobede. Bolnice smanjuju troškove i povećavaju zadovoljstvo 
			pacijenata. Moguće je pomoću IoT-a i daljinskog praćenja pacijenata sa specifičnim stanjima. Što znači bržu dijagnozu i bolji 
			tretman, jer lekar u realnom vremenu dobija sve potrebne informacije, a pacijent se oseća bolje i brže se oporavlja u svom domu.
			</p>
			<iframe style="margin-left:35px" width="700" height="300" src="https://www.youtube.com/embed/QiJoZgn8jeA" frameborder="0" allowfullscreen></iframe>
			<p>
				Pametne funkcije u zdravstvu doprineće većoj bezbednosti pacijenata, bržoj reakciji medicinskih radnika, pristupačnijoj ili
				 nezi za pacijenta na daljinu.
			</p>
			<p>
				Jedan od primera je uvezivanje Data centra glavne zdravstvene ustanove sa Data centrom grada, u kojem bi bila pohranjena istorija bolesti svakog registrovanog
				pacijenta, a pacijenti na jedan „klik“ od poziva u pomoć. Kod težih bolesnika, zdravstveno stanje može biti praćeno i daljinski, a reakcija brza ako dođe do
				pogoršanja zdravlja. U ovom slučaju, uvezanost pametnog zdravstva, pametne mobilnosti i pametne sigurnosti, olakšalo bi prolaz kroz gužvu ambulantnim kolima.
			</p>
			<p>
				Aplikacije pametnog zdravstva mogu biti i kreiranje elektronskog kartona za svakog pacijenta, koje će olakšati svim lekarima u sistemu brže upoznavanje sa 
				eventualnom istorijom bolesti pacijenta. Svaki građanin koji ima zdravstveno osiguranje, imaće i jedinstven broj u bazi podataka, kojem će se pristupati elektronskim putem iz svih 
				zdravstvenih ustanova. Tako će lekari dobijati brže informacije o zdravstvenom stanju pacijenta, imati uvid u rezultate svih nalaza, snimaka i sl.
				Svaki građanin imao bi elektronsku knjižicu, koja bi bila overavana automatski putem pametne uprave.
			</p>
			<img src="CSS/slika14.png" style="width:700px;margin-left:35px;">
			
			<p>
				Primenom aplikacija pametnog zdravstva, građani bi mogli : zakazati lekarski pregled, dobiti savjet doktora, informisati se o najbližim apotekama, 
				dobiti informaciju da li ima određenog leka, informisati se o radu ambulanti i lekarskih ordinacija i sl.
				Unapređenje zdravstva kroz efikasnije trošenje sredstava, doprineće i razvoju primarne i sekundarne zdravstvene zaštite, kao i dodatnom usavršavanju i obrazovanje stručnog medicinskog i pomoćnog osoblja.
			</p>
			
		</section>

	</div>
	<footer>
		<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontakt</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>