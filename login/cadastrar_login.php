<?php 
	//conectando com o banco
	require('connect.php');

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	$verificar = "SELECT * FROM login WHERE login = '$nome'";

	$executando_vereficar = mysql_query($verificar);
	$retornando_resultados = mysql_num_rows($executando_vereficar);

	if ($retornando_resultados == 1) {
?>
	<script type="text/javascript">
		alert("Usuario ja existente");
		document.location.href="cadastrar.php";
	</script>
<?php
	}
	else{
		$cadastrar = "INSERT INTO `login`(`login`, `senha`) VALUES ('$nome', '$senha')";
		$executando_cadastrar = mysql_query($cadastrar);
	}

 ?>