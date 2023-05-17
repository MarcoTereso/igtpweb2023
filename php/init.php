<?php
session_start();
$linguas_permitidas=array('portugues','ingles','espanhol');

if(isset($_GET['lingua'])===true && in_array($_GET['lingua'], $linguas_permitidas)){
	$_SESSION['idioma'] = $_GET['lingua'];
}else{
	$_SESSION['idioma'] = 'portugues';
}
include $_SESSION['idioma'].".php";

?>