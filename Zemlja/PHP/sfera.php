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

            <ul class="menu">
                <a href="index.php">Početna</a>
                <a id="active" href="sfera.php">Sfera</a>
                <a href="ploca.php">Ravna ploča</a>
                <a href="anketa.php">Anketa</a>
                <?php	
				if(isset($_SESSION['user'])&&($_SESSION['tip']=='Admin')){
					echo '
                        <a href="uvid.php">Svi odgovori</a>
                        <a href="statistika.php">Statistika</a>
                        <a href="nevalidne.php">Nevalidne ankete</a>
                        ';
                    }
			    ?>
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
        <section  >
        <!-- Naslov -->
            <div>
                <h1 class="h" style="padding-left: 37%" > Zemlja kao sfera </h1>
                <h1 class="h" style="padding-left: 37%"  > Zemlja kao sfera </h1>
            </div>
        <!-- Tabela da bi slke bile u istom redu  -->
            <div style="padding-top: 10%; padding-left:5%;padding-right:5%; ">
                <table >
                    <tr>
                        <td><img src="sl1.jpg" style="width: 100%"> </td>
                        <td><img src="sl8.jpg" style="width: 100%"> </td>
                        <td><img src="sl3.jpg" style="width: 100%"> </td>
                        <td><img src="sl5.jpg" style="width: 100%"> </td>
                    </tr>
                </table>
            </div>
            <div>
                <p class="par" style="padding-left:5%;padding-right:5%; padding-top: 2%; font-size: 1.2vw"> Rekli smo da su planete vasionska tela koja imaju loptasti oblik. I Zemlja je jedna od takvih. To možemo videti na brojnim snimcima naše planete iz svemira.
                    Prva razmišljanja o tome da je Zemlja okrugla imali su još grčki filozofi.
                    Crkva se pogotovo protivila verovanju da je Zemlja loptastog oblika, sve dok to 1522. godine nije dokazala uspešna Magelanova ekspedicija. Ekspedicija je oplovila Zemlju stalno ploveći ka zapadu i vratila se u istu luku iz koje je krenula.
                    Od kada je prihvaćeno verovanje o obliku Zemlje kao loptaste planete, postavljalo se pitanje kako svi ljudi na svim stranama sveta stoje i ne padnu u svemir.
                    U 17. veku su izvršena merenja sile Zemljine teže. Zemljina teža, drugačije nazvana gravitacija, sila je koja privlači sva tela ka Zemljinom centru.
                    Zemlja je precizno izmerena uz pomoć veštačkih satelita.Preciznim merenjem njenih dimenzija utvrđeno je da  Zemlja  nije potpuno pravilna lopta. Iz pravca sever-jug prečnik je malo manji nego iz pravca zapad-istok. Ovakvo telo nazivamo elipsoid.
                </p>
            </div>
            <div  style="padding-top: 15%;"> 
                <p class="par" style=" text-align: justify; font-size: 1.2vw; padding-left:5%; padding-right:5%;"> <img src="sl0.gif" style="width: 20%" align="left">  U 17. veku su izvršena merenja sile Zemljine teže. Zemljina teža, drugačije nazvana gravitacija, sila je koja privlači sva tela ka Zemljinom centru.
                        Zemlja je precizno izmerena uz pomoć veštačkih satelita. Preciznim merenjem njenih dimenzija utvrđeno je da  Zemlja  nije potpuno pravilna lopta. Iz pravca sever-jug prečnik je malo manji nego iz pravca zapad-istok. Ovakvo telo nazivamo elipsoid.
                        Krajnja severna i krajnja južna tačka na Zemlji zovu se Severni i Južni pol. To su mesta na kojima zamišljena Zemljina osa prolazi kroz površinu Zemlje.
                        Zamišljena linija kružnica tačno između Severnog i Južnog pola zove se ekvator. Tu je Zemlja malo ispupčena dok je na polovima blago spljoštena.
                        Površinu Zemlje čine voda i kopno. Okeani i mora čine veliki deo naše planete - oko 71 odsto, dok je preostalih 29 odsto pod kopnom.

                </p>
            </div>
            <div  style="padding-top: 15%;  padding-left:15%; padding-right:5%;"> 
            <!-- Tabela da bi slke bile u istom redu, slike sa opisima ispod  -->
            <table >
                    <tr>
                        <td><figure>
                        
                            <img src="sl10.gif"  style="width:50%">
                            <figcaption>Slika.1 - Severna hemisfera.</figcaption>
                            </figure></td>
                                                    <td><figure>
                            <img src="sl11.gif" style="width:50%">
                            <figcaption>Slika.2 - Južna hemisfera.</figcaption>
                            </figure> </td>
                            <td><figure>
                            <img src="sl12.png"  style="width:50%">
                            <figcaption>Slika.3 - Istočna hemisfera.</figcaption>
                            </figure></td>
                                                    <td><figure>
                            <img src="sl13.png" alt="Trulli" style="width:50%">
                            <figcaption>Slika.4 - Zapadna hemisfera.</figcaption>
                            </figure> </td>
                    </tr>
                </table>

            </div>
            <div  > 
                <p class="par" style=" text-align: justify; font-size: 1.2vw; padding-left:5%; padding-right:5%;"> 
                    Zemlja kruži oko Sunca na  srednjem rastojanju od 149,6 miliona kilometara. Kreće se po elipticnoj putanji, veoma malog ekscentriciteta (e=0,017). Oko Sunca obiđe za 365,2564 dana i pri ovom kretanju njena prosečna brzina iznosi oko 30 km /s.
                    Zemlja ima specifican oblik, sferno telo, spljosteno na polovima (geoid). Spljostenost je posledica njene rotacije čiji period iznosi 23h56m4s. Osa rotacije je nagnuta ka ravni njene putanje za ugao od oko 23,5°. Srednji prečnik Zemlje je 6370 km (ekvatorski prečnik iznosi 6378, a polarni 6357 km). Po masi Zemlja je peta planeta u Sunčevom sistemu, masa joj iznosi 5,975h1024kg. Prosečna gustina planete je 5,52 g/cm3.   
                    Za razliku od Merkura i Venere, Zemlja ima jedan prirodni satelit – Mesec. Srednje rastojanje Mesec – Zemlja iznosi oko 384400 kilometara. Masa Zemlje je 81,3 puta veća nego masa njenog pratioca; stoga se centar mase sistema Zemlja – Mesec nalazi unutar Zemlje, i to blize povrsini nego centru Zemlje. Posmatrana sa Meseca, Zemlja je plavkasta i ta boja potiče od vodene površine (hidrosfera), koja prekriva oko 71% ili skoro 2/3 Zemljine površine. Zemlju čine osnovno telo, vodena površina – hidrosfera i gasoviti omotač - atmosfera. 
                </p>
            </div>
            
        </section>
       
    </body>
</html>