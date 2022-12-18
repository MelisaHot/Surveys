<?php
	session_start();
   unset($_SESSION["korisnik"]);
   unset($_SESSION["tip"]);
   header("Location: prijava.php");
   
?>