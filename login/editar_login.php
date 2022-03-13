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
	else
	{
		//Sessao já criada	
		//Recuperando as variaveis da sessão
		$system_control = $_SESSION["system_control"];  
		$login = $_SESSION["login"];
		
		//Verificando se o usuário realizou o login
		
		if($system_control == 1)
		{
		?>
		<html>
			<head>
				<title>Editar Perfil</title>
				<meta charset="utf-8">
			</head>
			<body>		
				<form>				
				Meu Perfil<hr>
				Nome: <input type="text" value="<?php echo $login;?>" >
				</form>
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