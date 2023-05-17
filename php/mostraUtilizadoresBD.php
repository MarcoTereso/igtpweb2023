<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- link para icones bandeiras -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>


<?php
	include 'header.php';
	echo $cabecalho;

	include 'menu.php';
	echo $menu;

	include 'init.php';
?>
<!-- inserir menu de linguas -->

<style type="text/css">
		#bandeiras{float: right; background-color: #188617;}
		.m-bandeiras{ margin: 10px; }
		.l-bandeiras{text-decoration: none}
	</style>
<header>
		<div id="bandeiras">
			<a href="?lingua=portugues" class="l-bandeiras"><span class="fi fi-pt m-bandeiras"></span></a>
			<a href="?lingua=ingles" class="l-bandeiras"><span class="fi fi-gb-eng m-bandeiras"></span></a>
			<a href="?lingua=espanhol" class="l-bandeiras"><span class="fi fi-es m-bandeiras"></span></a>
		</div>
	</header>
<table id="tabela_dados" class="table table-dark table-striped">
  <thead>
  	<th><?php echo $lang['ID']; ?></th>
  	<th><?php echo $lang['Nome']; ?></th>
  	<th><?php echo $lang['Login']; ?></th>
  	<th><?php echo $lang['Morada']; ?></th>
  	<th><?php echo $lang['Instagram']; ?></th>
  	<th><?php echo $lang['Email']; ?></th>
  	<th><?php echo $lang['NIF']; ?></th>
  	<th><?php echo $lang['Telefone']; ?></th>
  	<th><?php echo $lang['Password']; ?></th>
  	<th><?php echo $lang['Opcoes']; ?></th>
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
  		<td><a href="editaUtilizador.php?id=<?php echo $row['iduser']; ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="eliminaUtilizador.php?id=<?php echo $row['iduser']; ?>"><i class="fa fa-trash"></i></a></td>
  	</tr>

  <?php    }    ?>
  </tbody>
</table>
