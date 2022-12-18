<?php session_start(); 
?>
<!Doctype html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script-->  
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!--script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <section>
        <!--div>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label-->
            
            <ul class="menu" style="text-align: right;">
                <img src="online4.png" style="float: left; padding: 30px 0; width: 40px;" >
                <a href="index.php">Početna</a>
                <a href="prodavnica.php">Šta je online prodavnica?</a>
                <a href="prednosti.php">Prednosti i mane</a>
                <a href="anketa.php">Anketa</a>
                <?php	
				if(isset($_SESSION['korisnik'])&&($_SESSION['tip']=='Admin')){
					echo '
                        <a href="uvid.php">Svi odgovori</a>
                        <a href="statistika.php">Statistika</a>
                        <a href="nevalidne.php">Nevalidne ankete</a>
                        ';
                    }
			    ?>
<?php 
include 'login.php';
	if(isset($_SESSION['korisnik'])){
				
		echo "
    <a href='logout.php' style=' float:right; ffont-family: 'Open Sans', sans-serif; font-size:20px;'>Odjavi se</a>
    <a href='registracija.php' style='float: right; '>Registracija</a></ul>
        <h1 style=' color: rgba(231, 117, 0.2); padding-top: 50px; display: grid; place-items: center;'>DOBRODOŠLI: {$_SESSION['korisnik']}</h1> ";
    
	} else
		{ echo "   
      <a  id='active' href='prijava.php' style=' float:right; font-family: 'Open Sans', sans-serif; font-size:20px; '> Prijavi se</a>
      <p style='float: left; color: #fff; padding: 40px 0; margin: 5px; font: 100%/1.5em 'Open Sans', sans-serif; color: #fff;'>ONLINE KUPOVINA</p>
      <a href='registracija.php' style='float: right; '>Registracija</a></ul>
      ";
      echo '
    <div id="login">
            <h1 style="text-align: center;color: #fff; font-size: 50px;"> Prijava </h1><br>
      <form name="form-login" action="#" method="POST" style="text-align: right; padding: 17px;">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" name="korisnickoIme" placeholder="Korisničko ime" required>
       
        <span class="fontawesome-lock"></span>
          <input type="password" id="pass" name="lozinka" placeholder="Lozinka">
        
        <input type="submit" name="prijava" value="Prijavi se">

</form>';
        }