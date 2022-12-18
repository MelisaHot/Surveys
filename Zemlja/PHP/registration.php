<?php
	if (isset($_POST['registracija'])){
		$ime = $_POST['Ime'];
		$prezime = $_POST['Prezime'];
		$kor_ime = $_POST['Kor_ime'];
		$email = $_POST['Email'];
		$sifra = $_POST['Sifra'];
		$pol = $_POST['Pol'];
		$tip= "Korisnik";
		require 'Connection.php';
		
		
		$provera = "SELECT UserName FROM users WHERE UserName = '{$kor_ime}' OR Email = '{$email}'";
		$rezultat = mysqli_query($conn,$provera);
		if (mysqli_num_rows($rezultat) > 0) {
           echo "<script> alert('Korisničko ime već postoji.')</script>";
		} else {
			
				
				$upit = "INSERT INTO users (Fname, Lname, Email, UserName, Pass, Gender, Tip, UradjenaAnketa) 
				               VALUES ('{$ime}','{$prezime}','{$email}','{$kor_ime}','{$sifra}','{$pol}','{$tip}', '0')";
                mysqli_query($conn,$upit);
                echo "<script> alert('Uspešna registracija.')</script>";
            }
			
			
			$upit = "SELECT UserName, Pass, Tip,UradjenaAnketa FROM users WHERE UserName = '{$kor_ime}' AND Pass = '{$sifra}'";
			$rez = mysqli_query($conn,$upit);
			if (mysqli_num_rows($rez) > 0) {
				$podaci = mysqli_fetch_assoc($rez);
				 $_SESSION['user'] = $kor_ime;
				 $_SESSION['tip']= $podaci["Tip"];
				 $_SESSION['UradjenaAnketa']=$podaci["UradjenaAnketa"];
			} else {
				echo "<script> alert('Neispravno korisničko ime ili lozinka.')</script>";
			}
    }
?>