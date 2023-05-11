<?php

$id = $_GET['id'];

?>
<script type="text/javascript">
	if(!confirm('tem a certeza que pretende remover o registo?')){
		window.location.href='mostraUtilizadoresBD.php';
	}else{
		window.location.href='delete.php?id=<?php echo $id; ?>';
	}
</script>





