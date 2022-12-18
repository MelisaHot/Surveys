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
    <section class="header">
        <!--div>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label-->
            
            <ul class="menu" style="text-align: right;">
                <img src="online4.png" style="float: left; padding: 30px 0; width: 40px;" >
                <a href="index.php">Početna</a>
                <a href="prodavnica.php">Šta je online prodavnica?</a>
                <a id="active" href="prednosti.php">Prednosti i mane</a>
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
        <div class="text-box" style="top: 50%;">
            <h1> Prednosti i mane online kupovine</h1>
        </div>
        </section>
        <section class="section" style="color: #fff;">
            <h1> Prednosti online kupovine</h1>
            <p>Internet je omogućio revoluciju načina na koji danas obavljamo kupovinu.
                Zbog brojnih prednosti i pogodnosti internet kupovine sve veći broj ljudi ovih dana radije kupuje “online” 
                nego u konvencionalnim prodavnicama.
                Postoji mnogo razloga zašto i mi mislimo da je kupovina preko interneta takođe najbolja opcija… 
            </p>
            <div class="row">
                <div class="coll">
                    <h4>Kupovina preko interneta je pogodna za bilo koga, bilo gde</h4>
                    <p>Uobičajeni problem radnog vremena jeste to da je skoro za svakoga isto – i za potrošače i za prodavce. 
                        Najveći deo vremena provodimo u kancelarijama, saobraćaju ili jednostavno kod kuće, sa porodicom ili prijateljima. 
                        Kupovina u online prodavnici omogućava dragocenu uštedu u vremenu, jer je dostupna 24h, 7 dana u nedelji, čak i praznicima. 
                        Bilo kada, u bilo koje vreme, sa bilo koje lokacije.
                    </p>
                </div>
                <div class="coll">
                    <h4>Pronađite proizvod koje možda nećete videti u prodavnicama</h4>
                    <p>Budući da su prodavnice sa fizičkom lokacijom prostorno ograničene, trgovci obično ne mogu da izlože sve proizvode koje imaju u ponudi. 
                        Nasuprot tome, u online prodavnici uvek možete pogledati celokupan asortiman, svih proizvoda i brendova. 
                        Možete da pronađete tačno ono što želite.
                    </p>
                </div>
                <div class="coll">
                    <h4>Kupovina preko interneta je lakše i manje stresna</h4>
                    <p>Razmislite o prodavnicama i tržnim centrima: zamislite ljude, gužvu, buku, redove i gubljenje vremena. 
                    Sada zamislite da u miru razgledate i kupujete ispred svog ekrana upoređujući najbolje ponude i proizvode.
                    Kupovina preko interneta je jednostavno lakša i „udobnija“.</p>
                </div>
            </div>

            <h1> Mane online kupovine</h1>
            <p>Mane elektronske trgovine zapažaju i vlasnici i korisnici e-trgovina. 
                Internet prodaja ima mane kao i drugi vidovi e-poslovanja. 
                Nedostaci su najčešće vezani za troškove izrade elektronske prodavnice i bezbedno poslovanja.
            </p>
            <div class="row">
                <div class="coll">
                    <h4>Bezbednost online trgovine</h4>
                    <p>Bezbednost je važno pitanje poslovanja preko interneta. 
                        Korisnik lako izgubi poverenje u online prodavnicu ukoliko posumnja da je na bilo koji način ugrožen. 
                        Zato se prilikom izrade web shop-a primenjuju rigorozni bezbednosni standardi
                        i najsavremenije tehnologije za zaštitu online komunikacije.
                    </p>
                </div>
                <div class="coll">
                    <h4>Sigurnost plaćanja preko interneta</h4>
                    <p>Nisu sve bankovne kartice podržane za plaćanje preko interneta. 
                        Jedino je Visa kartica prihvaćena na svim web sajtovima za prodaju preko interneta. 
                        Za plaćanje karticom potreban je otvoren domaći ili devizni račun.
                    </p>
                </div>
                <div class="coll">
                    <h4>Dostava ili isporuka porudžbina</h4>
                    <p>Troškovi dostave i isporuke porudžbina mogu biti slaba tačka online trgovine. 
                        Kupci izbegavaju dodatne troškove i traže web prodavnice u kojima ne moraju da plaćaju isporuku. 
                        Zato je za vlasnika web shopa jako važno da pitanje isporuke artikala reši na najoptimalniji način.
                    </p>
                </div>
            </div>
        </section>            
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
            
       
    </body>
</html>