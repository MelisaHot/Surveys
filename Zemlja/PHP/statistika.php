<?php session_start(); 
?>
<?php 

require 'Connection.php';
$query="SELECT pitanje1 , COUNT(*) FROM anketa  GROUP BY pitanje1";
mysqli_query($conn,"SET NAMES utf8"); 
$res= $conn->query($query);
?>

<?php
require 'Connection.php';
$upit="SELECT pitanje6 , COUNT(*) FROM anketa  GROUP BY pitanje6";
mysqli_query($conn,"SET NAMES utf8"); 
$res1= $conn->query($upit);

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
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        // u data dajemo podatke koje ce se prikazati u grafikonu
        var data = google.visualization.arrayToDataTable([
            ['Odgovori', 'Broj odgovora'],
            <?php 
            require 'Connection.php';
                while($row=$res->fetch_assoc()){
                    mysqli_query($conn,"SET NAMES utf8"); 
                    echo "['".$row['pitanje1']."',".$row['COUNT(*)']."],";
                }   
            
            ?>
        ]);
        // u options imamo dodatne opcije kao sto je naslov i da li je grafikon 3d
        var options = {
          title: 'Odgovori na pitanje: Da li smatrate da je Zemlja ravna ploča?',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart')); //pozvamo funkciju za vizuelizaciju 

        chart.draw(data, options); // crtamo grafikon chart.draw je gotova funkcija za crtanje grafikona
      }
      </script>
         <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);
      function drawChart1() {

        var data1 = google.visualization.arrayToDataTable([
            ['Odgovori', 'Broj odgovora'],
            <?php 
            require 'Connection.php';
                while($row1=$res1->fetch_assoc()){
                    mysqli_query($conn,"SET NAMES utf8"); 
                    echo "['".$row1['pitanje6']."',".$row1['COUNT(*)']."],";

                }   
            
            ?>
        ]);

        var options1 = {
          title: 'Odgovori na pitanje: Da li ste mišljenja da bismo pali s ivice Zemlje, da je Zemlja ravna ploča?',
          is3D: true,
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1')); //poziva gotovu fnkciju za crtanje grafikona br2

        chart1.draw(data1, options1);
      }
    </script>
 
    
    </head>
    <body>
        <div class="header">
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>

            <ul class="menu">
                <a  href="index.php">Početna</a>
                <a href="sfera.php">Sfera</a>
                <a href="ploca.php">Ravna ploča</a>
                <a href="anketa.php">Anketa</a>
                <?php	
				if(isset($_SESSION['user'])&&($_SESSION['tip']=='Admin')){
					echo '
                        <a href="uvid.php">Svi odgovori</a>
                        <a id="active" href="statistika.php">Statistika</a>
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
        <div>
        <h1 class="h" style="font-size: 5vw; padding-left: 25%;"> Da li je Zemlja ravna ploča? </h1>
        <h1 class="h" style="font-size: 5vw; padding-left: 25%;"> Da li je Zemlja ravna ploča? </h1>
        </div>
        <div id="piechart" style="width: 500px; height: 300px; padding-top:90px; margin-left:410px; "></div>
        <div id="piechart1" style="width: 500px; height: 300px; padding-top:90px; margin-left:410px; "></div>
        
        </section>
       
    </body>
</html>