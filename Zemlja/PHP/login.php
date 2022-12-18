<?php
	if (isset($_POST['log']) && !empty($_POST['USERNAME']) && !empty($_POST['PASSWORD'])){
		require 'Connection.php';
		$korisnik = $_POST['USERNAME'];
		$sifra = $_POST['PASSWORD'];

		$upit = "SELECT UserName, Pass, Tip FROM users WHERE UserName = '{$korisnik}' AND Pass = '{$sifra}'";
		$rezultat = mysqli_query($conn,$upit);
		if (mysqli_num_rows($rezultat) > 0) {
			$podaci = mysqli_fetch_assoc($rezultat);
			 $_SESSION['user'] = $korisnik;
			 $_SESSION['tip']= $podaci["Tip"];
		} else {
			echo "<script> alert('Korisničko ime ili loznka ne postoje.')</script>";
		}
	} 
?>