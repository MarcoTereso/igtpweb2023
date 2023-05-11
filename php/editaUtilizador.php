
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">

<?php
	include 'header.php';
	echo $cabecalho;

	include 'menu.php';
	echo $menu;

	$id = $_GET['id'];
	include 'ligaBD.php'; 
  	$query = "SELECT * FROM user WHERE iduser=$id";
  	$dados = mysqli_query($liga,$query);
  	$row = mysqli_fetch_assoc($dados);
?>

<main>
		<form class="border border-primary" style="width: 80%; margin-left: 10%" method="POST" action="atualiza.php?id=<?php  echo $row['iduser'];  ?>">
			<div class="row">
				<div class="col">
					<label for="nome" class="form-label">Nome:</label><input type="text" name="nome" id="nome" placeholder="Insira o seu nome" class="form-control" value="<?php  echo $row['nome'];  ?>">
				</div>
				<div class="col">
					<label for="login" class="form-label">Login:</label><input type="text" name="login" id="login" class="form-control" placeholder="Insira o seu login" value="<?php  echo $row['login'];  ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-12">
				<label for="morada" class="form-label">Morada:</label><input type="text" name="morada" id="morada" class="form-control" placeholder="Insira a sua morada" value="<?php  echo $row['morada'];  ?>">
			</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="insta" class="form-label">Instagram:</label><input type="text" name="insta" id="insta" class="form-control" placeholder="Insira a sua conta de instagram" value="<?php  echo $row['instagram'];  ?>">
				</div>
				<div class="col">
					<label for="email" class="form-label">Email:</label><input type="email" name="email" id="email" class="form-control" placeholder="Insira o seu email" value="<?php  echo $row['email'];  ?>">
				</div>
			</div>
			<div id="row">
				<div id="col">
					<label for="nif" class="form-label">NIF:</label><input type="text" name="nif" id="nif" class="form-control" placeholder="Insira o seu nif" value="<?php  echo $row['nif'];  ?>">
				</div>
				<div id="col">
					<label for="telef" class="form-label">Telefone:</label><input type="text" name="telef" id="telef" class="form-control" placeholder="Insira o seu telefone" value="<?php  echo $row['telefone'];  ?>">
				</div>
			</div>
				<div class="row">
					<div class="col-4">
						<label for="pass" class="form-label">Password:</label><input type="password" name="pass" id="pass" class="form-control" placeholder="Insira password">
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<label for="repass" class="form-label">Reescreva Password:</label><input type="password" name="repass" id="repass" class="form-control" placeholder="Reescreva password">
					</div>
				</div>
				<div style="display: flex; justify-content: center;">
					<input   type="submit" name="btn_enviar" value="Atualizar Dados" class="btn btn-light">
				</div>
		</form>
	</main>