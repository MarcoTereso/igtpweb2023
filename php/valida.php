<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">

<?php
	include 'header.php';
	echo $cabecalho;

	include 'menu.php';
	echo $menu;




//declarar variáveis e associar ao conteúdo do formulário
$nome = $_POST['nome'];
$login = $_POST['login'];
$morada = $_POST['morada'];
$instagram = $_POST['insta'];
$email = $_POST['email'];
$nif = $_POST['nif'];
$telef = $_POST['telef'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];   

//validação dos campos de formulário
if(is_null($pass) || is_null($repass)){
	echo "<script>
				alert('Preencha os campos password'); window.location.href = 'registo.php'; 
			</script>";
}

if($pass != $repass){
	echo "<script>alert('Os campos password não coincidem'); window.location.href = 'registo.php'; </script>";
}

?>

<table id="tabela_dados" class="table table-dark table-striped">
  <thead>
  	<th>Nome</th>
  	<th>Login</th>
  	<th>Morada</th>
  	<th>Instagram</th>
  	<th>Email</th>
  	<th>NIF</th>
  	<th>Telefone</th>
  	<th>Password</th>
  </thead>
  <tbody>
  	<tr>
  		<td><?php echo $nome; ?></td>
  		<td><?php echo $login; ?></td>
  		<td><?php echo $morada; ?></td>
  		<td><?php echo $instagram; ?></td>
  		<td><?php echo $email; ?></td>
  		<td><?php echo $nif; ?></td>
  		<td><?php echo $telef; ?></td>
  		<td><?php echo $pass; ?></td>
  	</tr>
  </tbody>
</table>

<?php

	$file = fopen("../bd/registo.txt", "a+");
	if(file_exists('../bd/registo.txt')){
	/*	$dados = "Nome: ".$nome."  -  Login: ".$login."  -  Morada: ".$morada."  -  Instagram: ".$instagram."  -  Email: ".$email."  -  NIF: ".$nif."  -  Telefone: ".$telef."  -  Password: ".$pass."\n";
	*/
		$dados = $nome."\n".$login."\n".$morada."\n".$instagram."\n".$email."\n".$nif."\n".$telef."\n".$pass."\n";
		fwrite($file,$dados);
	}else{
		echo "<script>alert('Erro ao tentar registar dados no ficheiro');</script>";
	}
	fclose($file);




include 'ligaBD.php';
$pass = sha1($pass);
$query = "INSERT INTO user(nome,login,morada,instagram,email,nif,telefone,password) VALUES('$nome','$login','$morada','$instagram','$email','$nif','$telef','$pass')";

if(mysqli_query($liga,$query)){
  echo "<script>alert('Registo inserido com sucesso!');</script>";
  echo "<script>window.location='mostraUtilizadoresBD.php';</script>";
}else{
  echo "<script>alert('Erro ao tentar registar dados na BD');</script>";
}
mysqli_close($liga);

?>