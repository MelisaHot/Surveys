<?php
	if (isset($_POST['log']) && !empty($_POST['USERNAME']) && !empty($_POST['PASSWORD'])){
		require 'Konekcija.php';
		$korisnik = $_POST['USERNAME'];
		$sifra = $_POST['PASSWORD'];

		$upit = "SELECT Kor_ime, Sifra, tip FROM korisnici WHERE Kor_ime = '{$korisnik}' AND Sifra = '{$sifra}'";
		$rezultat = mysqli_query($conn,$upit);
		if (mysqli_num_rows($rezultat) > 0) {
			$podaci = mysqli_fetch_assoc($rezultat);
			 $_SESSION['korisnik'] = $korisnik;
			 $_SESSION['tip']= $podaci["tip"];
		} else {
			echo "<script> alert('Pogresno Korisnicko ime ili sifra')</script>";
		}
	} 
?>