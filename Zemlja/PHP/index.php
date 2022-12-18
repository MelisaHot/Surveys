<?php session_start(); 
?>
<!Doctype html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
        <link rel="stylesheet" type="text/css" href="CSS.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    </head>
    <body>
        <div class="header">
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>
            <!--MENI KOJI JE VIDLJIV SVIMA  -->
            <ul class="menu">
                <a id="active" href="index.php">Početna</a>
                <a href="sfera.php">Sfera</a>
                <a href="ploca.php">Ravna ploča</a>
                <a href="anketa.php">Anketa</a>
                <!--Ako je ulogovan administrator prikayi ostatak menija  -->
                <?php	
				if(isset($_SESSION['user'])&&($_SESSION['tip']=='Admin')){
					echo '
                        <a href="uvid.php">Svi odgovori</a>
                        <a href="statistika.php">Statistika</a>
                        <a href="nevalidne.php">Nevalidne ankete</a>
                        ';
                    }
			    ?>
                <!--Ako je korisnik prijavljen dodaj opciju da se odjavi  -->
                <?php
                    if(isset($_SESSION['user'])){
                    echo "   
                    <a href='logout.php' style=' float:right; font-family: 'Ubuntu', sans-serif; font-size:20px; '>Odjavi se</a>
                        
                        ";
                    }else{
                    echo "   
                    <a  href='Prijava.php' style=' float:right; font-family: 'Ubuntu', sans-serif; font-size:20px; '> Prijavi se</a>
                    
                        ";
                    } 
                ?>
                <a href="registracija.php" style="float: right; ">Registracija</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            </ul>
        </div>
        <section >
            <!--Sve sto je vidljivo na pocetnoj strani  -->
            <div>
                 <!--NASLOV - napisan 2 puta zbog animacije  -->
                <h1 class="h" style="font-size: 5vw; padding-left: 25%;"> Da li je Zemlja ravna ploča? </h1>
                <h1 class="h" style="font-size: 5vw; padding-left: 25%;"> Da li je Zemlja ravna ploča? </h1>
            </div>
            <div style="padding-top: 10%;  position: absolute; padding-left: 26%;">
                <table >
                    <tr>
                        <td style="width=50%; text-align:center">
                            <IMG SRC="600.gif" style="width: 102%" >
                        </td>
                        <td>
                            <h1 style="font-family: 'Ubuntu', sans-serif; font-style: italic; color:#0b4564;"> VS. </h1>
                        </td>
                        <td style="width=50%; text-align:center">
                            <IMG SRC="700.gif" style="width: 93%">
                        </td>
                    </tr>
                </table>
                <p class="par" style="text-align:center;">Iako naučni dokazi kažu da je Zemlja sfera koja kruži oko Sunca, postoje ljudi oko kojih i dalje misle da je naša planeta ravna. Iako je ideja da je Zemlja ravna naučno diskreditovana, čini se da raste poverenje u teoriju zavere. Saznajmo nešto više o ovome. </p>
            </div>
        </section>
       
    </body>
</html>