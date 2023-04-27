<?php

$nome = $_POST['nome'];

$pass = $_POST['pass'];
$repass = $_POST['repass'];   


if(is_null($pass) || is_null($repass)){
	echo "<script>
				alert('Preencha os campos password'); window.location.href = 'registo.php'; 
			</script>";
}

if($pass != $repass){
	echo "<script>alert('Os campos password não coincidem'); window.location.href = 'registo.php'; </script>";
}

?>