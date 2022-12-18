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
					echo ' 	<a href="Pregled_odgovora.php" target=_blank>Pregled odgovora</a>
							<a href="Spisak_ucesnika.php" target=_blank>Spisak učesnika</a>
							<a href="Pozvani_studenti.php">Pozvani studenti</a>
							<a href="rezultati.php" target=_blank>Rezultati ankete</a>
						 ';
				}							
			?>
		</aside>
		<section class="Registracija">
			<h1>Kreirajte vaš nalog</h1>
			<h4 style="color:red; text-align: center;"><?php if(!empty($problem)) echo $problem;?></h4>
			<form action="#" method="POST" name="mojaForma" onsubmit="return proveriValidaciju()">
				<table style="color:##EFEDEC;padding-left:17px;">
					<tr>
						<td>Ime:</td>
						<td><input name="Ime" type="text" size="20" onkeypress="allowCharOnly(event)" style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					<tr>
						<td>Prezime:</td>
						<td><input name="Prezime" type="text" size="20"onkeypress="allowCharOnly(event)" style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					<tr>
						<td> Korisničko ime:  </td>
						<td><input name="Kor_ime" type="text" size="20" minlength=5 style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					<tr>
						<td> Email:  </td>
						<td><input name="Email" type="email" size="20"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters@characters.domain " style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					<tr>
						<td> Šifra:  </td>
						<td><input name="Sifra" type="Password" minlength=5 size="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mora sadrzati najmanje jedan broj, jedno veliko slovo i jedno malo slovo, i najmanje 8 karaktera" style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					<tr>
						<td> Ponovite šifru:  </td>
						<td><input name="P_sifra" type="password" minlength=5 size="20" style="border-radius:10px;text-align:center;color:white;background-color:#06649D;" required></td>
					</tr>
					<tr>
						<td> Pol:  </td>
						<td>
							<select name="Pol" style="border-radius:10px;text-align:center;color:white;background-color:#06649D;">
								<option value="Muško">Musko</option>
								<option value="Žensko">Zensko</option>
							</select>
						</td>
					</tr>
					<tr>
						<td> Zemlja: </td>
						<td>
							<select name="Zemlja" style="border-radius:10px;text-align:center;color:white;background-color:#06649D">
								<option value="Select one">Select one</option>
								<option value="Albania">Albania</option>
								<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								<option value="Croatia">Croatia</option>
								<option value="Iran">Iran</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Montenegro">Montenegro</option>
								<option value="Serbia">Serbia</option>
								<option value="Turkye">Turkye</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><br><input type="submit" name="registracija" value="Registruj se" style="color: #EFEDEC; border-radius:20px;width:150px;height:30px;font-size:20px;background-color:#06649D;" >
						</td>
					</tr>
				</table>
				<script> 
				
					function allowNumbersOnly(e) {
						var code = (e.which) ? e.which : e.keyCode;
						if (code > 31 && (code < 47 || code > 57)) {
							e.preventDefault();
						}
					}


					function allowCharOnly(e) {
						var code = (e.which) ? e.which : e.keyCode;
						if (code > 31 && (code < 64 || code > 90 )&& (code < 96 || code > 123 )) {
							e.preventDefault();
						}
					}

					function PrikaziLozinku() {
						var x = document.getElementById("lozinkaa");
						if (x.type === "password") {
							x.type = "text";
						} else {
							x.type = "password";
						}
						}
				</script>
			</form>
		</section>
	</div>
	<footer>
		<p><b><a href="index.php">Početna</a><a href="O_nama.php" target="_blank">Kontakt</a><a href="#Go Up">Idi na vrh</a><b></p>
		<p class="kraj"><i>&copy; 2019 Pametni grad. All rights reserved<i></p>
	</footer>
</body>
</html>