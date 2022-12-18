<?php
	if (isset($_POST['prijava']) && !empty($_POST['korisnickoIme']) && !empty($_POST['lozinka'])){
		require 'Connection.php';
		$korisnickoIme = $_POST['korisnickoIme'];
		$lozinka = $_POST['lozinka'];

		$prijavi = "SELECT id, KorisnickoIme, Lozinka, Tip FROM korisnici WHERE KorisnickoIme = '{$korisnickoIme}' AND Lozinka = '{$lozinka}'";
		$rezultat = mysqli_query($conn,$prijavi);
		if (mysqli_num_rows($rezultat) > 0) {
			$podaci = mysqli_fetch_assoc($rezultat);
			 $_SESSION['korisnik'] = $korisnickoIme;
			 $_SESSION['tip']= $podaci["Tip"];
			 $_SESSION['id']= $podaci["id"];
		} else {
			echo "<script> alert('Korisničko ime ili loznka ne postoje.')</script>";
		}
	} 
?>