<?php
	if (isset($_POST['registracija'])){
		$ime = $_POST['Ime'];
		$prezime = $_POST['Prezime'];
		$kor_ime = $_POST['Kor_ime'];
		$email = $_POST['Email'];
		$sifra = $_POST['Sifra'];
		$p_sifra = $_POST['P_sifra'];
		$pol = $_POST['Pol'];
		$zemlja = $_POST['Zemlja'];
		$tip= "Korisnik";
				
		require 'Konekcija.php';
		
		$ime = mysqli_real_escape_string($conn, $ime);
		$prezime = mysqli_real_escape_string($conn, $prezime);
		$kor_ime = mysqli_real_escape_string($conn, $kor_ime);
		$email = mysqli_real_escape_string($conn, $email);
		$sifra = mysqli_real_escape_string($conn, $sifra);
		$p_sifra = mysqli_real_escape_string($conn, $p_sifra);
		$pol = mysqli_real_escape_string($conn, $pol);
		$zemlja = mysqli_real_escape_string($conn, $zemlja);
		
		$provera = "SELECT Kor_ime FROM korisnici WHERE Kor_ime = '{$kor_ime}' OR Email = '{$email}'";
		$rezultat = mysqli_query($conn,$provera);
		if (mysqli_num_rows($rezultat) > 0) {
			$problem = "Korisničko ime ili email adresa već postoje.";
		} else {
			if($sifra == $p_sifra){
				$problem = "Uspešno ste se registrovali";
				$upit = "INSERT INTO korisnici (Ime, Prezime, Kor_ime, Email, Sifra, P_sifra, Pol, Zemlja, tip) 
				               VALUES ('{$ime}','{$prezime}','{$kor_ime}','{$email}','{$sifra}','{$p_sifra}','{$pol}','{$zemlja}','{$tip}')";
				mysqli_query($conn,$upit);
			} else {
				$problem = "Šifre moraju biti iste!";
			}
			
			
		}

		
	}
	
?>