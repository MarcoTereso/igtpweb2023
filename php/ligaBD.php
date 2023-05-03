<?php
//ligaBD.php

$servername = "localhost";
$user = "root";
$password = "";
$db = "utilizador";

$liga = mysqli_connect($servername,$user,$password,$db);

if(!$liga){
	echo "<script>alert('Base de dados inacessivel');</script>";
}


?>