<?php

$id = $_GET['id'];

include 'ligaBD.php'; 
$query = "DELETE FROM user WHERE iduser=$id";
if(mysqli_query($liga,$query)){
	
 	echo "<script>window.location.href='mostraUtilizadoresBD.php';</script>";
}else{
	echo "<script>alert('Erro: Dados não eliminados');</script>";
}


?>