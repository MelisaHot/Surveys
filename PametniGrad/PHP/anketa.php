<?php
$sql="SELECT  * FROM pitanjaiodg WHERE anketa='Sredina' ";
$result= $conn->query($sql);	
$pitanja = array();
$index = 0;
while($row = mysqli_fetch_assoc($result)){
	$pitanja[$index] = $row;
	$index++;
}

	if (isset($_POST['btnSredina'])){
		$insert = "INSERT INTO anketa (Kor_ime, anketa, pitanje1, pitanje2, pitanje3, pitanje4, pitanje5, pitanje6, pitanje7, pitanje8, pitanje9, pitanje10) 
				               VALUES ('{$_SESSION['korisnik']}','sredina','{$_POST['t1']}','{$_POST['t2']}','{$_POST['t3']}','{$_POST['t4']}','{$_POST['t5']}','{$_POST['t6']}','{$_POST['t7']}','{$_POST['t8']}','{$_POST['t9']}','{$_POST['t10']}')";
		 mysqli_query($conn,"SET NAMES utf8"); 
		mysqli_query($conn,$insert);
		if(!empty($_POST['t1']) && !empty($_POST['t2'])&& !empty($_POST['t3'])
									    && !empty($_POST['t4']) && !empty($_POST['t5'])&& !empty($_POST['t6'])
										&& !empty($_POST['t7']) && !empty($_POST['t8'])&& !empty($_POST['t9'])
										&& !empty($_POST['t10'])  ){
		$update = "UPDATE korisnici SET sredina = 1 WHERE Kor_ime = '{$_SESSION['korisnik']}' ";
		mysqli_query($conn,$update);
		if($pitanja[1]['odg1']==$_POST['t2']){
			echo "ISTI ODG!";
		}else
		echo "nije isti";
		}
		
	}

?>