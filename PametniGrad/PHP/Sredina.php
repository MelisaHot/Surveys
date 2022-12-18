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
					echo ' 	<a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak učesnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		</aside>
		<section>
			<div id="animated">
				<h1>ZAŠTITA ŽIVOTNE SREDINE</h1>
			</div>
			<p>
			Zaštita životne sredine podrazumeva skup različitih postupaka i mera koje sprečavaju opasnosti po životnu sredinu kako bi se 
			očuvala biološka ravnoteža. Odbrana životne sredine je multidisciplinarna i trebalo bi da bude trajna obaveza za sve članove 
			društva. Njegova multidisciplinarnost proizilazi iz činjenice da su zdravlje, životna sredina i socijalni uslovi kompleks područja i problema koji se neprestano vrše u interakciji. Briga o životnoj sredini je prioritet od značaja za naše društvo sa stanovišta našeg društva. Zdravo okruženje je osnova za očuvanje ljudske egzistencije, zdrav razvoj društva i važan faktor za životni standard stanovništva.
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
			Neravnomerno zagrevanje zemaljskih svežih poraza i položaj Zemlje u jednosu na orbiti odvojenih razlika u klimi 
			na različite geografske širine. Temperatura, cirkulacija vazduha i talonje Vecina klimatskih promena na Zemlji je 
			uslovljena neravnomernim zgrevavanjem nekih povrsina. Neravnomerno zgrevanje je nakon poduhvata sferično oblikovane 
			Zemlje i ugla pod kojim se Zemja rotira oko svoje doze kruži oko Sunca. Ono što je zemaljska sfera, sunčevi zreci su
			 najintezivniji timovi gde je on direktno direktan iznad.
			</p>
			<iframe style="margin-left:60px" width="650" height="300" src="https://www.youtube.com/embed/bKSGKFUBrGc" frameborder="0" allowfullscreen></iframe>
			<p>
			Šta Srbija radi po pitanju zaštite životne sredine? Ovo pitanje se samo od sebe nameće u jeku svetske borbe za opstanak planete,
			koju sistematski uništavamo. Imamo li ikakav plan?Akcija smanjenje upotrebe plastičnih kesa prema rečima državnih organa je veoma 
			uspešna, međutim u trenutku kada ceo svet preuzima ozbiljne korake u borbi za životnu sredinu ovakva akcija deluje potpuno 
			zanemarljivo. Kada se tome pridodaju i ozbiljni ekološki problemi poput opasanog otpada, i izgradnje mini hidroelektrana na 
			zaštićenom području na Staroj planini ne možemo a da se ne zapitamo šta Ministarstvo životne sredine radi po ovom pitanju i 
			da li Srbija ulaže dovoljno napora da očuva životnu sredinu.
			Ekološki napredna privreda, uz mere energetske efikasnosti i obnovljivim izvorima energije, te drugim granama koje iz toga proističu
			dovode do smanjenja gasova sa efektom staklene bašte- ublažavanju klimatskih promena, a sveukupno do smanjenja troškova zdravstvene 
			zaštite.
			</p>
			<img src="CSS/slika8.jpg" style="width:650px;height:350px;margin-left:60px;">
			<p>
				U rešavanje ovih problema najviše treba da se uključe državne institucije, jer njihova podrška i delovanje može dati najveće rezultate. Postoje organizacije  koje rade na ovim
				pitanjima i koje sprovode razne akcije povodom njih, ali je njima neophodna pomoć države kako bi rezultati bili još bolji i efikasniji. Mi kao obični ljudi možemo i treba 
				da krenemo od sebe da shvatimo značaj očuvanja ekosistema i životne sredine i da promenimo svoje štetne navike. Zaštitimo prirodu, zaštitimo našu decu, zaštitimo sebe, 
				zaštitimo naš dom, zaštitimo planetu Zemlju.
			</p>
			
		</section>
	</div>
	<footer>
		<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontakt</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>