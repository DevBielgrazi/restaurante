<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
		//Recebendo os valores
		$login = $_POST['c_login'];
		$senha = $_POST['c_senha'];
		
		//Conectando com o banco para fazer a consulta do usuario
		require('connect.php');
		
		//sql de pesquisa de usuario
		$sql_pesquisa ="select * from $tab_login where `login` = '$login'";
		$resultado_nome = mysqli_query($conn,$sql_pesquisa);
		
		//tranformando em numero o resultado de usuario
		$numero_nome = mysqli_num_rows($resultado_nome);
		//mostrando na tela o numero de resultado de usuarios
		if($numero_nome != 1)
		{
			echo "Usuário não existente!";
		}
		else
		{
			//Verificando a senha
			$sql_senha ="select * from $tab_login where `senha` = '$senha'";
			$resultado_senha = mysqli_query($conn,$sql_senha);
			
			//tranformando em numero o resultado de usuario
			$numero_senha = mysqli_num_rows($resultado_senha);
			
			//Transformando o usuario em um vetor
			$vetor_login = mysqli_fetch_array($resultado_senha);
			
			if($numero_senha != 1)
			{
				echo "Senha incorreta!";			
			}
			else
			{
				//Login e a senha estão corretos		
				
				//Inicializando uma sessao
				session_start();
				
				//Criando uma variavel de controle do sistema
				
				//Registrando esta variavel no sistema
				$_SESSION["system_control"] = 1;
				
				//Registrando esta variavel no sistema
				$_SESSION["cod_login"] = $vetor_login['cod_login'];
				
				//Registrando esta variavel no sistema
				$_SESSION["login"] = $vetor_login['login'];
				
				//Atribuindo o valor de controle em uma variavel
				$status = $_SESSION["system_control"];
				
				//Redirecionando o usuario			
				if($status == 1)
				{			                                   
					//Redirecionando para a Tela de Logado
				?>
				<script language='JavaScript'>
					document.location.href="logado.php";
				</script>
				<?php
				}
				else
				{
					//Redirecionando para a Tela de Não Logado
				?>
				<script language='JavaScript'>
					document.location.href="nao_logado.php";
				</script>				
				<?php				
				}				
			}
		} 	
	?>	
