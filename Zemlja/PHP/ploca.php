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
                <a href="sfera.php">Sfera</a>
                <a id="active" href="ploca.php">Ravna ploča</a>
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
        <section id="sekcija2">
            <div>
                <h1 class="h" style="padding-left: 30%" > Zemlja kao ravna ploča </h1>
                <h1 class="h" style="padding-left: 30%"  > Zemlja kao ravna ploča </h1>
            </div>
            <!-- Div sa snimcima sa youtube  -->
            <div style="padding-top: 10%; padding-left:10%;padding-right:5%; ">
                <table >
                    <tr>
                        <td><iframe width="500" height="300" src="https://www.youtube.com/embed/lm4iRrhHTrs"  ></iframe></td>
                        <td><iframe width="500" height="300" src="https://www.youtube.com/embed/ZtfTVozTS-s"  ></iframe></td>
                    </tr>
                </table>
            </div>
            <div>
                <p class="par" style="padding-left:5%;padding-right:5%; padding-top: 2%; font-size: 1.2vw"> 
                Iz nekog razloga pokret "ravna Zemlja" je zabeležio neverovatan rast popularnosti poslednjih godina. Nije najjasnije kako nešto što negira i baca u vodu vekove naučnih dokaza može da zadobije toliko pažnje. Zašto bi neko verovao da je Zemlja ravna?
                Od pregršt tekstova na internetu, kao i video snimaka koji opisuju zašto je Zemlja ravna, u tekstu koji piše Iflscience možete pročitati nekoliko teorija koje prema ravnozemljašima "dokazuju" i pokazuju da je Zemlja ravna, ali i zašto su one neverovatno pogrešne:
                </p>
                <h2 class="par" style="padding-left:5%;padding-right:5%; padding-top: 9%;"> 1. Horizont nije zakrivljen</h2>
                
                <p class="par" style="padding-left:7%;padding-right:5%; padding-top: 10%; font-size: 1.2vw"> 
                <img src="3.png" style="width: 20%" align="left">  Neki od ravnozemljša navode da je prava linija horizonta glavni dokaz da je Zemlja ravna ploča. 
                Izgleda da ovi ljudi zaboravljaju da je prečnik Zemlje 12.741 kilometara. Drugim rečima, velika je. Zamislite mrava koji sedi na nepravilnoj lopti koja je prekrivena mahovinom i prečnika je 1.000 metara - jednostavno ne bi uspeo da vidi zakrivljenje.
                Takođe su i studenti fizike sa Univerziteta u Lesteru napravili neke fenomenalne fotografije stratosfere i zakrivljenja Zemlje korsiteći meteorološki balon.
                </p>


                <h2 class="par" style="padding-left:5%;padding-right:5%; padding-top: 18%;">2. Niko, nikada nije prešao "zid" Antarktika</h2>
                <p class="par" style="padding-left:7%;padding-right:5%; padding-top: 20%; font-size: 1.2vw"> 
                <img src="6.png" style="width: 15%" align="right"> Iz Flat Earth pokreta takođe tvrde da je Antarktik džinovski, ledeni zid koji je osmišljen kako bi nas zadržao da ne padnemo sa našeg sveta u obliku diska. Kako bi podržali ovu teoriju, navode da još niko nije prešao čitav kontinent.
                    Međutim, ljudi su prelazili Antarktik mnogo, mnogo puta. Čak postoji i tačka nepristupačnosti na Južnom polu, koja je najudaljeniji unutrašnji neo kontinenta.</p>

                    <h2 class="par" style="padding-left:5%;padding-right:5%; padding-top: 26%;">3. Zemlja je nepokretna </h2>
                <p class="par" style="padding-left:7%;padding-right:5%; padding-top: 28%; font-size: 1.2vw">
                <img src="5.gif" style="width: 15%" align="left">
                  Trenutno se Zemlja kreće brzinom od 1.600 kilometara na sat. Ako je tako, zašto ne letimo okolo?Zamislite da ste u putničkom avionu i da letite brzinom od 926 kilometara na čas. Pored poletanja i sletanja (kada se promeni brzina), osećate se neverovatno mirno. Možete da šetate kroz avion, sipate piće i odete do toaleta bez problema. Rotacija Zemlje je konstantna, tako da je efekat isti. Ali opet, ako bi se naša planeta zaustavila, iz nekog kosmički neobjašnjivog razloga, sigurno bismo osetili promenu.

            </div>
            <div> 
            <h2 class="par" style="padding-left:5%;padding-right:5%; padding-top: 39%;">4. Zraci Sunca </h2>
                
                <p class="par" style=" text-align: justify; font-size: 1.2vw; padding-left:5%; padding-top: 41%; padding-right:5%;"> <img src="17.png" style="width: 20%" align="right"> 
                    Ravnozemljaši kažu da zraci Sunca dokazuju da Sunce nije toliko udaljeno. Ako je sunce stvarno udaljeno 149,6 miliona kilometara, onda bi zraci padali paralelno na našu planetu, a ne pod raznim uglovima.
Nažalost, zraci su stvarno paralelni. Ovaj raspršujući efekat je samo iluzija izazvana ljudskom percepcijom. To je ista iluzija koja čini da se šine voza spajaju u daljini dok ih posmatrate. 
Prvo totalno pomračenje Sunca od 1979. godine stanovnici Severne Amerike imaće prilike da posmatraju 21. avgusta. Tokom nekoliko momenata Mesec će, prolazeći između Sunca i Zemlje, zakloniti zvezdu.


 

                </p>
            </div>
            
        </section>
       
    </body>
</html>