<?php
	session_start();
   unset($_SESSION["user"]);
   unset($_SESSION["tip"]);
   header("Location: index.php");
   
?>