<?php session_start(); 
?>
<!Doctype html>
<html lang="en-US">
<head>
	<title>Pametni grad</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css_stil.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

	<style>
/* {box-sizing: border-box}*/

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 650px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

}
</style>
	
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
					echo ' 
							<a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak učesnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		</aside>
		<section>
			<div id="animated">
				<h1>PAMETNI GRAD</h1>			
			</div>
				<p>
				Pametni grad je urbano područje koje koristi različite vrste elektronskih senzora za prikupljanje podataka za pružanje
				 informacija potrebnih za upravljanje imovinom i resursima. To uključuje podatke prikupljene od građana, uređaje i
				  imovinu koja se obrađuje i analizira kako bi se nadgledali i upravljali: Transport i transportni sistemi, elektrane, 
				  vodovodne mreže, policija, informacioni sistemi, škole, biblioteke, bolnice i druge zajednice.
				</p>
				<div class="slideshow-container"> <!-- slide-->

			<div class="mySlides fade">
			<div class="numbertext">1 / 4</div>
			<img src="CSS/slika3.jpg" style="width:100%">			
			</div>

			<div class="mySlides fade">
			<div class="numbertext">2 / 4</div>
			<img src="CSS/slika2.jpeg" style="width:100%">		
			</div>

			<div class="mySlides fade">
			<div class="numbertext">3 / 4</div>
			<img src="CSS/s4.jpg" style="width:100%">			
			</div>

			<div class="mySlides fade">
			<div class="numbertext">4 / 4</div>
			<img src="CSS/s6.jpg" style="width:100%">			
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
			<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) 
			{
			showSlides(slideIndex += n);
			}
			function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slides[slideIndex-1].style.display = "block";  
			}
			</script>
			<!--	<img src="CSS/slika3.jpg" style="width:500px;margin-left:130px;"> -->
				<p>
				Koncept pametnog grada spaja informacionu i komunikacionu tehnologiju i razne fizičke uređaje povezane na mrežu kako bi se 
				optimizirala efikasnost gradskih usluga. Takođe, sistem pametnih gradova omogućava gradskim zvaničnicima da vide kako se grad 
				razvija i moguće promene sistema u budućnosti.
				<br>
				Informaciona i komunikaciona tehnologija koristi se za poboljšanje kvaliteta života u gradovima i smanjenje troškova. 
				Pametne aplikacije su razvijene za upravljanje gradskim tokovima i omogućavanje reakcija u realnom vremenu. 
				Stoga, pametni grad može biti spremniji i moći da odgovori na izazove. 
				
				</p>
				<img src="CSS/slika1.jpg" style="width:500px; height:250px; margin-left:130px;">
				<p> Ljudski potencijal je ključni faktor razvoja grada. <br></p>
				
					<p>Kreativni grad: Kreativnost je prepoznata kao važna stvar pametnog grada. Ljudski kapital je neophodan faktor za 
					stvaranje grada koji zadovoljava ljudski okvir. Pametni grad ima veliku korist od socijalnog kapitala i mnogo je lakše 
					stvoriti koncept pametnog grada u kojem postoji kombinacija obrazovanja, kulture, umetnosti i trgovine.</p>
					<p>Grad koji uči: Prema Moser-u, M. A., grad koji uči je uključen u izgradnju kvalifikovane radne snage. 
					Ova vrsta grada u ljudskom kontekstu povećava konkurentnost u globalnoj ekonomiji znanja, a Campbell je 
					uspostavio obrazac kako gradovi mogu postati pametni. Njegov obrazac doveo je do toga da gradovi postanu pametni 
					uz stalni proces učenja i usavršavanje radne snage.</p>
					<p>Ljudski grad: Koristi ljudski potencijal, posebno radnu snagu. Sledeći ovaj pristup, moguće je usmeriti pažnju 
					na obrazovanje i izgradnju fabrika, što bi rezultiralo rastom visokoobrazovanih radnika. Daljnjim ulaganjima pametni 
					gradovi postaju pametniji, dok će drugi, ako nisu prilagođeni, zaostajati jer pametan grad sa mnogim mogućnostima privlači 
					mnogo visoko kvalifikovanih radnika.</p>
				  
				
				<img src="CSS/slika4.jpeg" style="width:500px;margin-left:130px;">
				<p>
				Najčešće kritike pametnih gradova su:				
				</p>
				<ul  style="color:#EFEDEC;">
				
					<li>Fokus koncepta pametnog grada može potceniti potencijalne negativne efekte razvoja nove tehnološke i umrežene infrastrukture potrebne za pametni grad.</li>
					<li> Visok nivo prikupljanja podataka i analiza doveo je do pitanja koja se odnose na privatnost i slobodu kretanja građana. </li>

				</ul>


				<h2 style="color:#86C2DC;padding-left:20px;padding-bottom:0px;margin:0px;">Anketa:</h2>
				<p style="color:#86C2DC">
					Svrha ovog sajta su ankete vezane za tri različite teme: Životna sredina, Transport, Zdravstvo.<br>
					Pravila vezana za učestvovanje u anketama: <br>
					1. Registrujte i prijavite se kako biste radili anketu<br>
					2. Popunite anketu<br>
					3. Nagrade možete videti na linku ispod	
				</p>
			<table style="color:#86C2DC;padding-left:17px">
				<tr>
					<td>Nagrade koje se mogu osvojiti:</td>
					<td><a href="nagrade.php" style="text-decoration:none;color:#86C2DC" target="_blank"><div id="animated"><i>OVDE</i></div></a></td>
				</tr>
				<tr>
					<td>Učesnici koji su osvojili nagrade:</td>
					<td><a href="osvojene_nagrade.php" style="text-decoration:none;color:#86C2DC" target="_blank"><div id="animated"><i>OVDE</i></div></a></td>
				</tr>
			</table>

		</section>		
	</div>
	<footer>
		<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontakt</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>