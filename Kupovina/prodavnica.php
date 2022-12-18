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
                <a id="active" href="prodavnica.php">Šta je online prodavnica?</a>
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
        <section class="header2">
            <div class="text-box" style="top: 30%;">
            <!--h1 style="color: #2c3338; text-align: right;"> Šta je online prodavnica?</h1-->
            </div>
        </section>
            <section>
            <div style="padding-top: 5%; padding-left:5%;padding-right:5%; ">
                <!--img src="online4.jpg" style="width: 100%;"--> 
                <p style="padding-left:5%;padding-right:2%; font-size: 1.2vw; color: #fff;"> U okviru sistema online kupovine, odnosno online prodavnice postoji tri najzastupljenija načina poslovanja i to : B2C ( skraćeno od engleskih reči business to consumer ), 
                što podrazumeva da se proces u okviru online prodavnice odvija između kupca i preduzetnika, 
                to jest proizvođača ili pružaoca usluga, zatim B2B ( skraćeno od engleskih termina business to business ) u okviru koga se proces online trgovine odvija između dva preduzetnika, 
                a kao svojevrsna kombinacija ova dva načina online trgovine razvio se i metod B2B2C, što je skraćeno od engleskih termina business to business to client, što znači da se online trgovina odvija ili između dva preduzetnika ili između kupca i preduzetnika, 
                stim da u ovom načinu trgovine između njih postoji i posrednik.
                </p>
            </div>
            <div style="padding-left:5%;padding-right:5%; "> 
                <p style=" text-align: justify; font-size: 1.2vw; padding-left:5%; padding-right:5%; color: #fff;"> <!--img src="sl0.gif" style="width: 20%" align="left"-->  Upravo ovaj treći metod je mahom i najzastupljeniji u savremenim online prodavnicama. 
                Činjenica je da internet trgovina umnogome olakšava kupovinu određenih proizvoda i usluga. Međutim, ne treba zaboraviti da uzevši u obzir da nije u pitanju direktna trgovina, javljaju se brojni nedostaci, 
                a koji se najčešće odnose na pitanje kvaliteta ponuđenih proizvoda u okviru online prodavnice. 
                To se posebno odnosi na kupovinu proizvoda vezanih za garderobu, recimo, jer se vrlo često događa da slika proizvoda koju korisnik može videti na internet sajtu online prodavnice ne odgovara u potpunosti tom proizvodu.
                Baš iz tog razloga, mnogi posrednici u oblasti internet trgovine na svojim sajtovima navode i mogućnost povratka robe. Ali, to je samo jedna od mogućih neprijatnosti koja može da zadesi kupce koji koriste usluge online prodavnica.

                </p>
            </div>
            <div style="padding-left:5%;padding-right:5%; "> 
                <p style=" text-align: justify; font-size: 1.2vw; padding-left:5%; padding-right:5%; color: #fff;"> 
                U okviru većine online prodavnica plaćanje je moguće izvršiti svim platnim karticama. Ali, ovo se mahom odnosi na online prodavnice koje posluju na domaćem tržištu.
                Za one koji su svetski lideri u ovakvom načinu trgovine mahom je neophodno posedovati specijalnu karticu za plaćanje preko interneta, 
                što znatno otežava korišćenje usluga takvih online prodavnica za domaće korisnike. 
                Iako su online prodavnice sve prisutniji način kupovine različitih proizvoda i usluga često se može čuti pitanje vezano za sigurnost i bezbednost ovakvog načina kupovine. 
                Naravno, uzevši u obzir da je internet praktično otvoren za sve, uvek se može dogoditi da neka osoba zloupotrebi podatke korisnika. 
                Baš iz tog razloga, gotovo svaka online prodavnica bi trebalo da ima specijalan program koji štiti informacije i garantuje bezbednost podataka korisnika, kao i sprečavanje neovlašćenih izmena sačuvanih informacija korisnika, ali i mogućnost provere identiteta korisnika. 
                U skladu sa tim, gotovo sve online prodavnice bi trebalo da koriste metode šifrovanja, a u cilju što boljeg obezbeđivanja informacija koje im korisnik poveri.
                </p>
            </div>
            <div style="padding-left:5%;padding-right:5%; " > 
                <p style=" text-align: justify; font-size: 1.2vw; padding-left:5%; padding-right:5%; color: #fff;"> 
                Pored već navedenih tipova online prodavnica, postoje još i : C2B od engleskih termina consumer to business, u okviru koje se odvija online trgovina ali od strane kupca, 
                koji od prodavca traži određenu uslugu ili proizvod iznoseći pri tom svoje zahteve ( na primer budžet koji ima za kupovinu određenog proizvoda ili usluga ), C2C ( engl. consumer to consumer ), 
                a koja predstavlja online trgovinu nalik aukciji, koja se odvija između dva korisnika, B2A od engleskih reči business to administration čiji je osnovni segment poslovanja izvršavanje finasnijskih transakcija između preduzetnika, 
                odnosno kompanija i brojnih državnih institucija, C2A od engleskih reči consumer to administration, koja se odnosi na sve neophodne transakcije koje pojedinac ima prema različitim državnim organima, B2E ( engl. business to employee ), 
                koji je namenjen prvenstveno zaposlenima u okviru određene kompanije i P2P ( engl. peer to peer ), a u smislu isti prema istom, što je specifičan način zajedničke komunikacije, ali ne i online trgovina u klasičnom smislu reči.
            </p>
            </div>
            <div style="padding-left:5%;padding-right:5%; " > 
                <p style=" text-align: justify; font-size: 1.2vw; padding-left:5%; padding-right:5%; color: #fff;"> 
                Iako većina ovih tipova online prodavnica nije u široj upotrebi, barem ne u našoj zemlji svakodnevno se dolazi do zaključaka da se uvođenjem pomenutih modela online prodavnica umnogome utiče na olakšavanje poslovanja, 
                kako pojedinaca, tako i čitavih organizacija i državnih organa.
            </p>
            </div>
            <div style="padding-top: 2%; padding-left:30%; padding-right:30%;"> 
            <figure>
                <img src="online6.gif"  style="width:100%">
                </figure>
            </div>            
            <section class="footer" >
                <h4 style="font-size: 1.3vw;">O anketi<h4>
                    <p style="font-size: 1.2vw;">Koliko često se koristi online kupovina će nam dati uvid
                        o korišćenju interneta, <br>kao i razlozi kupovine preko interneta i šta se najčešće kupuje.
                    </p>
                    <div class="icons">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-linkedin"></i>
                    </div>
        </section>
            
        </section>
       
    </body>
</html>