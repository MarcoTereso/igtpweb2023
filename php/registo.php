<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include 'header.php';
		echo $cabecalho;

		include 'menu.php';
		//is_null($path_home);
		//$path_home = '../index.php';
		//$path_regiso = 'registo.php';
		//$path_contatos = 'contatos.php';
		echo $menu;
	?>
	<main>
		<form class="border border-primary" style="width: 80%; margin-left: 10%" method="POST" action="valida.php">
			<div class="row">
				<div class="col">
					<label for="nome" class="form-label">Nome:</label><input type="text" name="nome" id="nome" placeholder="Insira o seu nome" class="form-control">
				</div>
				<div class="col">
					<label for="login" class="form-label">Login:</label><input type="text" name="login" id="login" class="form-control" placeholder="Insira o seu login">
				</div>
			</div>
			<div class="row">
				<div class="col-12">
				<label for="morada" class="form-label">Morada:</label><input type="text" name="morada" id="morada" class="form-control" placeholder="Insira a sua morada">
			</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="insta" class="form-label">Instagram:</label><input type="text" name="insta" id="insta" class="form-control" placeholder="Insira a sua conta de instagram">
				</div>
				<div class="col">
					<label for="email" class="form-label">Email:</label><input type="email" name="email" id="email" class="form-control" placeholder="Insira o seu email">
				</div>
			</div>
			<div id="row">
				<div id="col">
					<label for="nif" class="form-label">NIF:</label><input type="text" name="nif" id="nif" class="form-control" placeholder="Insira o seu nif">
				</div>
				<div id="col">
					<label for="telef" class="form-label">Telefone:</label><input type="text" name="telef" id="telef" class="form-control" placeholder="Insira o seu telefone">
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
					<input   type="submit" name="btn_enviar" value="Submeter Dados" class="btn btn-light">
				</div>
		</form>
	</main>
</body>
</html>