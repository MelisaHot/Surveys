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
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
   
   <?php
		include 'registration.php';
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
                        <a href="nevalidne.php">Nevalidne ankete</a>
                        ';
                    }
			    ?>
                <?php
            if(isset($_SESSION['user'])){
              echo "   
             <a   href='logout.php' style=' float:right; font-family: 'Ubuntu', sans-serif; font-size:20px;'>Odjavi se</a>
                  
                ";
            }else{
              echo "   
              <a  style=' float:right; font-family: 'Ubuntu', sans-serif; font-size:20px; ' href='Prijava.php'> Prijavi se</a>
             
                ";
            } 
          ?>
                <a id="active" href="registracija.php" style="float: right; ">Registracija</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            </ul>
        </div>

        <section >
        <h1 class="h" style="font-size: 5vw; padding-left: 35%;"> REGISTRUJ SE </h1>
        <h1 class="h" style="font-size: 5vw; padding-left: 35%;"> REGISTRUJ SE </h1>
        <div  style=" padding-top:10%; font-family: Brush Script MT; font-size:25px;">
			<form action="#" method="POST" name="mojaForma" >
				<table id=example3 style="color:#0b4564; font-family: 'Ubuntu', sans-serif; font-size:25px;margin-left: auto; margin-right: auto;">
                <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
						<td><b>Ime:</b></td>
						<td><input id="txt" name="Ime" type="text" size="20" onkeypress="allowCharOnly(event)" style="border-radius:10px;text-align:center;color:#cce0ff;background-color:#0b4564;" required></td>
					</tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
					<tr>
						<td><b>Prezime:</b></td>
						<td><input id="txt" name="Prezime" type="text" size="20"onkeypress="allowCharOnly(event)" style="border-radius:10px;text-align:center;color:#cce0ff;background-color:#0b4564;" required></td>
					</tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
					<tr>
						<td> <b>Koisničko ime: </b> </td>
						<td><input id="txt" name="Kor_ime" type="text" size="20" minlength=5 style="border-radius:10px;text-align:center;color:#cce0ff;background-color:#0b4564;" required></td>
					</tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
					<tr>
						<td><b> E-mail:</b>  </td>
						<td><input id="txt" name="Email" type="email" size="20"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters@characters.domain " style="border-radius:10px;text-align:center;color:#cce0ff;background-color:#0b4564;" required></td>
					</tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
					<tr>
						<td> <b>Lozinka:  </b></td>
						<td><input id="txtpass" name="Sifra" type="Password" minlength=5 size="20"  style="border-radius:10px;text-align:center;color:#cce0ff;background-color:#0b4564;" required>
						<input  type="checkbox" value="Show password" onclick="PrikaziLozinku()"><label style="font-size:60%;">Show password. </td>
					</tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
					<tr>
						<td><b> Pol: </b> </td>
						<td>
							<select id="txt" name="Pol" style="border-radius:10px;text-align:center;color:#cce0ff;background-color:#0b4564;">
								<option value="Male">Muško</option>
								<option value="Female">Žensko</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><br><input type="submit" id="txt" name="registracija" value="Registracija" style=" border-radius:10px;width:30%;height:40px;font-size:21px;color:#cce0ff;background-color:#0b4564;" >
						</td>
					</tr>
				</table>
				
			</form>
                    </div>
        </section>
       
    </body>
</html>