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


.active, .dot:hover {
  background-color: #717171;
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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
			<a class="fa fa-home" href="index.php" class="trenutna"> PO??ETNA</a>
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
			<a class="fa fa-tree" href="Sredina1.php"> ??ivotna sredina</a>
			<a class="fa fa-car" href="Transport1.php"> Transport</a>
			<a class="fa fa-medkit" href="Zdravstvo1.php"> Zdrvstvo</a>
			<!--ako je admin-->
			<?php	
				if(isset($_SESSION['korisnik'])&&($_SESSION['tip']=='Administrator')){
					echo ' 	<a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak u??esnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		</aside>
		<section>
			<div id="animated">
				<h1>ZA??TITA ??IVOTNE SREDINE</h1>
			</div>
			<p>
			Za??tita ??ivotne sredine podrazumeva skup razli??itih postupaka i mera koje spre??avaju opasnosti po ??ivotnu sredinu kako bi se 
			o??uvala biolo??ka ravnote??a. Odbrana ??ivotne sredine je multidisciplinarna i trebalo bi da bude trajna obaveza za sve ??lanove 
			dru??tva. Njegova multidisciplinarnost proizilazi iz ??injenice da su zdravlje, ??ivotna sredina i socijalni uslovi kompleks podru??ja i problema koji se neprestano vr??e u interakciji. Briga o ??ivotnoj sredini je prioritet od zna??aja za na??e dru??tvo sa stanovi??ta na??eg dru??tva. Zdravo okru??enje je osnova za o??uvanje ljudske egzistencije, zdrav razvoj dru??tva i va??an faktor za ??ivotni standard stanovni??tva.
			</p>
			<div class="slideshow-container"> <!-- slide-->

			<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			<img src="CSS/slika5.jpg" style="width:100%">			
			</div>

			<div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
			<img src="CSS/slika6.jpg" style="width:100%">		
			</div>

			<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="CSS/slika7.jpg" style="width:100%">			
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
		
			<p>
			Neravnomerno zagrevanje zemaljskih sve??ih poraza i polo??aj Zemlje u jednosu na orbiti odvojenih razlika u klimi 
			na razli??ite geografske ??irine. Temperatura, cirkulacija vazduha i talonje Vecina klimatskih promena na Zemlji je 
			uslovljena neravnomernim zgrevavanjem nekih povrsina. Neravnomerno zgrevanje je nakon poduhvata sferi??no oblikovane 
			Zemlje i ugla pod kojim se Zemja rotira oko svoje doze kru??i oko Sunca. Ono ??to je zemaljska sfera, sun??evi zreci su
			 najintezivniji timovi gde je on direktno direktan iznad.
			</p>
			<iframe style="margin-left:60px" width="650" height="300" src="https://www.youtube.com/embed/bKSGKFUBrGc" frameborder="0" allowfullscreen></iframe>
			<p>
			??ta Srbija radi po pitanju za??tite ??ivotne sredine? Ovo pitanje se samo od sebe name??e u jeku svetske borbe za opstanak planete,
			koju sistematski uni??tavamo. Imamo li ikakav plan?Akcija smanjenje upotrebe plasti??nih kesa prema re??ima dr??avnih organa je veoma 
			uspe??na, me??utim u trenutku kada ceo svet preuzima ozbiljne korake u borbi za ??ivotnu sredinu ovakva akcija deluje potpuno 
			zanemarljivo. Kada se tome pridodaju i ozbiljni ekolo??ki problemi poput opasanog otpada, i izgradnje mini hidroelektrana na 
			za??ti??enom podru??ju na Staroj planini ne mo??emo a da se ne zapitamo ??ta Ministarstvo ??ivotne sredine radi po ovom pitanju i 
			da li Srbija ula??e dovoljno napora da o??uva ??ivotnu sredinu.
			Ekolo??ki napredna privreda, uz mere energetske efikasnosti i obnovljivim izvorima energije, te drugim granama koje iz toga proisti??u
			dovode do smanjenja gasova sa efektom staklene ba??te- ubla??avanju klimatskih promena, a sveukupno do smanjenja tro??kova zdravstvene 
			za??tite.
			</p>
			<img src="CSS/slika8.jpg" style="width:650px;height:350px;margin-left:60px;">
			<p>
				U re??avanje ovih problema najvi??e treba da se uklju??e dr??avne institucije, jer njihova podr??ka i delovanje mo??e dati najve??e rezultate. Postoje organizacije  koje rade na ovim
				pitanjima i koje sprovode razne akcije povodom njih, ali je njima neophodna pomo?? dr??ave kako bi rezultati bili jo?? bolji i efikasniji. Mi kao obi??ni ljudi mo??emo i treba 
				da krenemo od sebe da shvatimo zna??aj o??uvanja ekosistema i ??ivotne sredine i da promenimo svoje ??tetne navike. Za??titimo prirodu, za??titimo na??u decu, za??titimo sebe, 
				za??titimo na?? dom, za??titimo planetu Zemlju.
			</p>
			
		</section>
	</div>
	<footer>
		<p><b><a href="index.php">Po??etna</a><a href="O_nama.php" target="_blank">Kontakt</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>