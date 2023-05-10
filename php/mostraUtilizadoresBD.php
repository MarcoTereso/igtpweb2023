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
  	<th>ID</th>
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
  		include 'ligaBD.php'; 
  		$query = "SELECT * FROM user";
  		$resultado = mysqli_query($liga,$query);
  		while($row = mysqli_fetch_assoc($resultado)){ 
  	?>
  	<tr>
  		<td><?php echo $row['iduser']; ?></td>
  		<td><?php echo $row['nome']; ?></td>
  		<td><?php echo $row['login']; ?></td>
  		<td><?php echo $row['morada']; ?></td>
  		<td><?php echo $row['instagram']; ?></td>
  		<td><?php echo $row['email']; ?></td>
  		<td><?php echo $row['nif']; ?></td>
  		<td><?php echo $row['telefone']; ?></td>
  		<td><?php echo $row['password']; ?></td>
  	</tr>

  <?php    }    ?>
  </tbody>
</table>
