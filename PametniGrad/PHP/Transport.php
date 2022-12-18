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
					echo ' <a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak učesnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		</aside>
		<section>
			<div id="animated">
				<h1>PAMETNI TRANSPORT</h1>
			</div>
			<p>Saobraćaj je aktivnost vezana za svakodnevni život i proizvodnju, čiji je zadatak da prevozi ljude i robu s jednog na drugo mesto.
				Zbog gužvi u saobraćaju, u razvijenijim delovima sveta vozači i putnici u vozilima provedu nekoliko milijardi sati i potroše 
				desetine milijardi dolara godišnje. Za gužve u saobraćaju rešenja se, uglavnom, pronalaze kroz projekte zasnovane na upotrebi 
				računarskih sistema i simulacijama različitih saobraćajnih slučajeva, odnosno u objedinjavanju informatičkih i saobraćajnih
				 infrastruktura.
			</p>
			<table>
				<tr>
					<td><img src="CSS/slika11.png" style="width:300px;margin-left:35px;"></td>
					<td><img src="CSS/slika9.jpg" style="width:300px;margin-left:35px;"></td>
				</tr>
			</table>
		
			<p>
			Primenom savremenih informaci- onih tehnologija podstiče se uspostavljanje nove infrastrukture koju čine mreže puteva, pruga, 
			aerodroma, stanica i luka povezanih sistemima zasnovanim na internetu. Na efikasnost i kvalitet bitno utiču inteligentni sistemi 
			koji poboljšavaju mobilnost i bezbednost učesnika u saobraćaju, jer obezbeđuju proaktiv- no održavanje i bržu i kvalitetniju
			 dijagnostiku. Pomenuta napredna rešenja, inače, povećavaju produktivnost poslovanja preduzeća, skraćuju vreme putovanja i smanjuju 
			 zagađenje životne sredine.
			</p>

			<table>
				<tr>
					<td><iframe style="margin-left:35px" width="300" height="300" src="https://www.youtube.com/embed/d1DndVz9dAs" frameborder="0" allowfullscreen></iframe></td>
					<td><p>
			Primenom IoT rešenja regulacija saobraćaja utiče na sniženje troškova i povećanje zadovoljstva putnika,
			 čime se posredno smanjuje broj saobraćajnih nezgoda. Buduća rešenja biće utemeljena na primeni pametnijih i ekološki 
			 zdravijih vozila i njihovom povezivanju sa infrastrukturnim objektima, kao što su benzinske pumpe, parkinzi, garaže i sl. 
			 Šira primena naprednih informacionih tehnologija, osim komunikacije vozila sa infrastrukturom, omogućiće i komunikaciju vozila.
			 Primeri implementacije inteligentnih transportnih sistema su integracija sistema kontrole saobraćaja (upravljanje tokovima
			  saobraćaja, upravljanje semaforima, promenljive saobraćajne poruke, kontrolu pristupa autoputu, proveru brzine kretanja,
			   upravljanje parkiranjem itd.), upravljanje javnim prevozom (usmeravanje saobraćaja, upravljanje incidentima, identifikacija 
			   prekršilaca, održavanje transportne infrastrukture) i informacije za putnike.
			</p><br></td>
				</tr>
			</table>

			<img src="CSS/slika13.jpg" style="width:700px;margin-left:35px;">
			<p>
			Jedna od usluga ITS-a jeste praćenje saobraćaja u realnom vremenu; najčešće se realizuje kao deo sistema za lociranje i navigaciju vozila . U vazdušnom saobraćaju može bitno doprineti poboljšanju bezbednosti u vazduhoplovima i otklanjanju uzroka eventualnih otkaza. U automobilskoj industrijipored sistema za nadgledanje i izveštavanje o radu pojedinih delova vozila, omogućuje pružanje informacija o rastojanju od ostalih učesnika u saobraćaju, stanju na putevima, informisanju o trenutnom stanju vozila i dr.
			</p>
			<p>
			Princip rada pametnog parkinga jeste da se korišćenjem mreže senzora(magnetni, senzor ultrazvučnih talasa i led senzor) proverava dostupnost parking mesta i informacija, porukom, prosleđuje korisniku. Nakon prijema korisnik porukom rezerviše slobodno mesto i kasnije se parkira uz podršku IPA sistema.
			Razvoj pametnih vozila počeo je sa  elektronskim ubrizgavanjem goriva, kontrolom raspodele snage za svaki točak, računarskom dijagnostikom, naprednim air-bag sistemima i satelitskom navigacijom pa sve do message centra, mogućnost telefoniranja itd.
			</p>
		</section>

	</div>
	<footer>
		<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontak</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>