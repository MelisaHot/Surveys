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
    </head>
    <body>
    <section class="header">
        <!--div>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label-->
            
            <ul class="menu" style="text-align: right;">
                <img src="online4.png" style="float: left; padding: 30px 0; width: 40px;">
                <a id="active" href="index.php">Početna</a>
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
            if(isset($_SESSION['korisnik'])){
              echo "   
             <a href='logout.php' style=' float:right; font-family: 'Open Sans', sans-serif; font-size:20px; '>Odjavi se</a>
                  
                ";
            }else{
              echo "   
              <a  href='prijava.php' style=' float:right; font-family: 'Open Sans', sans-serif; font-size:20px; '> Prijavi se</a>
              <p style='float: left; color: #fff; padding: 40px 0; margin: 5px; font: 100%/1.5em 'Open Sans', sans-serif; color: #fff;'>ONLINE KUPOVINA</p>
             
              ";
            } 
          ?>
               <a href="registracija.php" style="float: right; ">Registracija</a>
            <!--label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label-->
            </ul>
        </div>
        <div class="text-box">
            <h1>Koliko često se koristi online kupovina?</h1>
            <p>Pojam online prodavnica je najprostije moguće rečeno prodavnica usluga ili proizvoda na globalnoj mreži. Online prodavnica je <br>sastavni deo procesa poznatog kao online kupovina ( engl. online shopping ). 
            Online kupovina podrazumeva proces <br> u okviru koga posetioci mogu da kupuju određene proizvode ili usluge koje se nude u okviru online prodavnice.</p>
            <a href="prodavnica.php" class="hero-btn">Procitaj vise o tome</a>
        </div>
        </section>
       
    </body>
</html>