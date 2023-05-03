<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<?php
	include 'header.php';
	echo $cabecalho;

	include 'menu.php';
	echo $menu;

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
<?php
$file = fopen("../bd/registo.txt", "a+");
	if(file_exists('../bd/registo.txt')){		
		while(!feof($file)){   ?>
			<tr>
		  		<td><?php echo fgets($file,4096); ?></td>
		  		<td><?php echo fgets($file,4096); ?></td>
		  		<td><?php echo fgets($file,4096); ?></td>
		  		<td><?php echo fgets($file,4096); ?></td>
		  		<td><?php echo fgets($file,4096); ?></td>
		  		<td><?php echo fgets($file,4096); ?></td>
		  		<td><?php echo fgets($file,4096); ?></td>
		  		<td><?php echo fgets($file,4096); ?></td>
  			</tr>
<?php   }  ?>
		  </tbody>
		</table>
<?php
	}else{
		echo "<script>alert('Erro ao tentar abrir o ficheiro');</script>";
	}
	fclose($file);
?>