<?php
	//Mantendo a sessão/cria uma sessao
    session_start();
	
	if(!isset($_SESSION["system_control"]))
	{
	?>
	<script>
		alert("Acesso Inválido!");
		document.location.href="login.php";
	</script>
	<?php		
	}
	else{
		//Sessao já criada	
		//Recuperando as variaveis da sessão
		$system_control = $_SESSION["system_control"];   
		
		//Verificando se o usuário realizou o login
		
		if($system_control == 1)
		{
		?>
		
		<html>
			<head>
				<title></title>
				<meta charset="utf-8">
			</head>
			<body>				
				logado
				<br><a href="editar_perfil.php">Editar Perfil</a>
				<br><a href="editar_login.php">Editar Login</a>
				<br><a href="logout.php">SAIR</a>
			</body>	
		</html>	
		<?php
		}
		else
		{
			//Acesso Inválido
			
			//Finalizando a sessão
			session_destroy();
			
			//Mensagem para o Usuário
		?>
		<script>
			alert("Acesso Inválido!");
			document.location.href="login.php";
		</script>
		<?php			
		}
	}
?>		