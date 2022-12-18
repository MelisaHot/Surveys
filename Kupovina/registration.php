<?php
	if (isset($_POST['registracija'])){
		$ime = $_POST['Ime'];
		$prezime = $_POST['Prezime'];
		$korisnickoIme = $_POST['korisnickoIme'];
		$email = $_POST['Email'];
		$lozinka = $_POST['Lozinka'];
		$pol = $_POST['Pol'];
		$tip= "Korisnik";
		require 'Connection.php';
		
		
		$DaLiPostoji = "SELECT KorisnickoIme FROM korisnici WHERE KorisnickoIme = '{$korisnickoIme}' OR Email = '{$email}'";
		$postoji = mysqli_query($conn,$DaLiPostoji);
		if (mysqli_num_rows($postoji) > 0) {
           echo "<script> alert('Korisničko ime već postoji. Molimo unesite novo.')</script>";
		} else {
			
				
				$unos = "INSERT INTO korisnici (Ime, Prezime, Email, KorisnickoIme, Lozinka, Pol, Tip, Anketa) 
				               VALUES ('{$ime}','{$prezime}','{$email}','{$korisnickoIme}','{$lozinka}','{$pol}','{$tip}', '0')";
                mysqli_query($conn,$unos);
                echo "<script> alert('Uspešna registracija.')</script>";
            }
			
			
			$prijavi = "SELECT KorisnickoIme, Lozinka, Pol, Tip, Anketa FROM korisnici WHERE KorisnickoIme = '{$korisnickoIme}' AND Lozinka = '{$lozinka}'";
			$rezultat = mysqli_query($conn,$prijavi);
			if (mysqli_num_rows($rezultat) > 0) {
				$podaci = mysqli_fetch_assoc($rezultat);
				 $_SESSION['korisnik'] = $korisnickoIme;
				 $_SESSION['tip']= $podaci["Tip"];
				 $_SESSION['Anketa']=$podaci["Anketa"];
			} else {
				echo "<script> alert('Neispravno korisničko ime ili lozinka.')</script>";
			}
    }
?>