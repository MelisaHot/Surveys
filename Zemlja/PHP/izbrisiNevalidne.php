<?php
require 'Connection.php';
if (isset($_POST['nevalidna'])){
$delete="DELETE FROM anketa WHERE validna=0";
mysqli_query($conn,$delete);
}
?>