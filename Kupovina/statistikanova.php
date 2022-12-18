<?php session_start(); 
include 'prvoPitanje.php';
include 'drugoPitanje.php';
?>
<!Doctype html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Odgovor na pitanje: Koliko prosečno dnevno koristite internet?"
	},
	subtitles: [{
		text: "November 2017"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title: {
		text: "Odgovor na pitanje: Razlozi opredeljenja za online kupovinu?"
	},
	subtitles: [{
		text: "November 2017"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($podatakPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

chart.render();
chart1.render();
 
}
</script>


    
    </head>
    <body>
    <section class="header">
     
            
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
            <h1>STATISTIKA</h1>
        </div>
        </section>
        <section class="section" >
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </section>
            
       
    </body>
</html>