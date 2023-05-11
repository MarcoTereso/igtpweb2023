<?php

$nome = $_POST['nome'];
$login = $_POST['login'];
$morada = $_POST['morada'];
$instagram = $_POST['insta'];
$email = $_POST['email'];
$nif = $_POST['nif'];
$telef = $_POST['telef'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$pass = sha1($pass);
$id = $_GET['id'];

include 'ligaBD.php'; 
 $query = "UPDATE user SET nome='$nome', login='$login', morada='$morada', instagram='$instagram', email='$email', nif=$nif, telefone=$telef ,password='$pass' WHERE iduser=$id";
 if(mysqli_query($liga,$query)){
 	echo "<script>alert('Dados atualizados com sucesso');</script>";
 	echo "<script>window.location.href='mostraUtilizadoresBD.php';</script>";
 }else{
 	echo "<script>alert('Erro: Dados não atualizados');</script>";
 }
 
?>