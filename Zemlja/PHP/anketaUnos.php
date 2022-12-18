<?php
/*Potreban nam je niz iz baze da bi uporedili sa datim odgovorima jer moramo oynaciti nevalidne ankete */
$sql="SELECT  * FROM pitanjaiodg";
$result= $conn->query($sql);	
$pitanja = array();
$index = 0;
while($row = mysqli_fetch_assoc($result)){
	$pitanja[$index] = $row;
	$index++;
}

/*Ako je kliknuto dugme za unos ankete koje se zove anketaZemlja */
	if (isset($_POST['anketaZemlja'])){
			
        $checkbox1=$_POST['t3'];  /*Uzima odgovore iz svih checkboxova, niz odogovora */
        $chk="";  
        foreach($checkbox1 as $chk1)  /*prolazi kroz taj niz */
           {  
              $chk .= $chk1.",";  /* sve smesta u jedan string, odgovore odvaja "," */
           } 
           
        $checkbox2=$_POST['t4'];  /*Za drugi checkbox*/
        $chk2="";  
        foreach($checkbox2 as $chk3)  
           {  
              $chk2 .= $chk3.",";  
           } 

		$checkPitanje=str_replace(",","",$chk); /*funkcija uklanja "," zbog ispitivanja da li je validna */
		$checkPitanje1=str_replace(",","",$chk2);
		/*proverava da li su svi odgovori pod A, pod B, poc C ili pod D. Ako su svi odgovori oznaceni istim slovom validna=0 - to znaci da je anketa nevalidna */
		/*Prvi if - da li je sve pod A */
		if($pitanja[0]['odg1']==$_POST['t1'] && $pitanja[2]['odg1']==$checkPitanje && $pitanja[3]['odg1']==$checkPitanje1 && $pitanja[5]['odg1']==$_POST['t6']  &&  $pitanja[7]['odg1']==$_POST['t8'] && $pitanja[9]['odg1']==$_POST['t10'] ){
			
			$validna=0;
		}
		/*Da li je sve pod B */ 
		elseif($pitanja[0]['odg2']==$_POST['t1'] && $pitanja[2]['odg2']==$checkPitanje && $pitanja[3]['odg2']==$checkPitanje1 && $pitanja[5]['odg2']==$_POST['t6']  &&  $pitanja[7]['odg2']==$_POST['t8'] && $pitanja[9]['odg2']==$_POST['t10']){
			
			$validna=0;
		}
		/*Da li je sve pod C */ 
		elseif($pitanja[0]['odg3']==$_POST['t1'] && $pitanja[2]['odg3']==$checkPitanje && $pitanja[3]['odg3']==$checkPitanje1 && $pitanja[5]['odg3']==$_POST['t6']  &&  $pitanja[7]['odg3']==$_POST['t8'] && $pitanja[9]['odg3']==$_POST['t10']){
			
			$validna=0;
		}
		/*Da li je sve pod D */ 
		elseif($pitanja[0]['odg4']==$_POST['t1'] && $pitanja[2]['odg4']==$checkPitanje && $pitanja[3]['odg4']==$checkPitanje1 && $pitanja[5]['odg4']==$_POST['t6']  &&  $pitanja[7]['odg4']==$_POST['t8'] && $pitanja[9]['odg4']==$_POST['t10']){
			
			$validna=0;
		}
		/*Ako nije nista od toga - anketa je validna  */ 
		else
			$validna=1;
			
		/*Unosi u bazu sve odgovore  */
		$insert = "INSERT INTO anketa (Kor_ime, pitanje1, pitanje2, pitanje3, pitanje4, pitanje5, pitanje6, pitanje7, pitanje8, pitanje9, pitanje10, validna) 
				               VALUES ('{$_SESSION['user']}','{$_POST['t1']}','{$_POST['t2']}','{$chk}','{$chk2}','{$_POST['t5']}','{$_POST['t6']}','{$_POST['t7']}','{$_POST['t8']}','{$_POST['t9']}','{$_POST['t10']}','{$validna}')";
		 mysqli_query($conn,"SET NAMES utf8"); 
		mysqli_query($conn,$insert);
		/*Ako je korisnik uradio anketu - zabrani mu da opet radi */
		if(!empty($_POST['t1']) && !empty($_POST['t2'])&& !empty($_POST['t3'])
									    && !empty($_POST['t4']) && !empty($_POST['t5'])&& !empty($_POST['t6'])
										&& !empty($_POST['t7']) && !empty($_POST['t8'])&& !empty($_POST['t9'])
										&& !empty($_POST['t10'])  ){
		$update = "UPDATE users SET UradjenaAnketa = 1 WHERE UserName = '{$_SESSION['user']}' ";
		mysqli_query($conn,$update);
		
        }	
	}

?>