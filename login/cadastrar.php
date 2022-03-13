<?php 

	//verificar sessao
	session_start();
    
    //verificando se a variavel sessao existe
	if (!isset($_SESSION["system_control"])) {
		
?>	
	<script type="text/javascript">
		alert("Voce nao esta Logado");
		document.location.href="login.php";
	</script>
<?php

	}
	else{
?>
	<html>
		<head>
			<title>Cadastro</title>
			<meta charset="utf-8">
		</head>
		<body>
			<form method="POST" action="cadastrar_login.php">
				<center>Cadastro </p>
				Nome: <input type="text" name="nome" required></p>
				Senha: <input type="password" name="senha" required></p>
				<input type="submit" value="Cadastrar">
				</center>
			</form>	
		</body>
	</html>
<?php
	}



 ?>