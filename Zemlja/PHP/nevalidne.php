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

        <style>
            td{
    color:#cce0ff;
    padding:5px 0px;
  
  }
  tr{
    color:#cce0ff;
    padding:0px;
  }
  th{
    color:#cce0ff;
    background-color:#0b4564;
    padding:0px;
    padding:5px 3px;s
  }
  table{
    text-align:center;
    overflow:scroll; 
    width:100%;
    background-color: #0b4564;
    overflow-y:auto; 
    
  }
 
        </style>
    </head>
    <body>
    <?php
		include 'izbrisiNevalidne.php';
	  ?>
        <div class="header">
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>

            <ul class="menu">
                <a href="index.php">Početna</a>
                <a href="sfera.php">Sfera</a>
                <a href="ploca.php">Ravna ploča</a>
                <a href="anketa.php">Anketa</a>
                <?php	
				if(isset($_SESSION['user'])&&($_SESSION['tip']=='Admin')){
					echo '
                        <a href="uvid.php">Svi odgovori</a>
                        <a href="statistika.php">Statistika</a>
                        <a  id="active" href="nevalidne.php">Nevalidne ankete</a>
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
        <h1 class="h" style="font-size: 5vw; padding-left: 30%;"> Nevalidne ankete </h1>
        <h1 class="h" style="font-size: 5vw; padding-left: 30%;"> Nevalidne ankete </h1>
        
        <?php 
            include 'Connection.php';

            $nevalidni = array();
            $sql="SELECT Kor_ime, pitanje1, pitanje2, pitanje3, pitanje4, pitanje5, pitanje6, pitanje7, pitanje8, pitanje9, pitanje10 FROM anketa WHERE validna=0";
            mysqli_query($conn,"SET NAMES utf8"); 
            $izvrsi = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($izvrsi)){
                $nevalidni[] = $row; 
            }
            $sql1="SELECT  * FROM pitanjaiodg ";
            $result= $conn->query($sql1);	
            $pitanja = array();
            $index = 0;
            while($row = mysqli_fetch_assoc($result)){
                $pitanja[$index] = $row;
                $index++;
            }
            /*ako nema nevalidnih anketa */
            if($nevalidni == null){
                echo '<h2 style="color:#0b4564; text-align:center;padding-top:10%; font-family: Brush Script MT; font-size:35px;">
                                Nema nevalidnih anketa!
                            </h2>';
            }
            /*prikazi sve nevalidne ankete */
            else{
                echo'      
                <div style="padding-top:8%" >
                <table border="1" >
            <tr>
                <th >Korisničko ime</th>';
                /*pitanja iz ankete */
                for($i=0; $i<sizeof($pitanja); $i++){
                    echo'
                <th >'.$pitanja[$i]['pitanje'].'</th>
                    ';
                }
                echo'
                </tr>';
            ?>
            <!--odgovori nevalidnih anketa-->
            <?php for($i=0; $i<sizeof($nevalidni); $i++){ ?>
            <tr>
                <td>
                    <?php {echo $nevalidni[$i]["Kor_ime"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje1"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje2"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje3"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje4"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje5"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje6"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje7"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje8"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje9"];} ?>
                </td>
                <td>
                    <?php {echo $nevalidni[$i]["pitanje10"];} ?>
                </td>
                
            </tr>
            <?php } ?>
                </table>
    <form action="#" method="POST" >
    <input type="submit" id="neval" name="nevalidna" value="Izbriši ankete" style="border-radius:10px;width:15%;height:15%;font-size:21px;color:#cce0ff;background-color:#0b4564;float:right;" >
</form>

    </div>
    <?php } ?>
        
        </section>
       
    </body>
</html>