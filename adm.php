<?php	
	//Mantendo a sessão/cria uma sessao
    session_start();
	
	if(!isset($_SESSION["system_control"]))
	{
?>
		<script>
			alert("Acesso Inválido!");
			document.location.href="index.html";
		</script>
	<?php		
	}
	else
	{		
		//Verificando se o usuario esta logado
		$system_control = $_SESSION["system_control"];
		
		//Verificando se o usuário realizou o login		
		if($system_control == 1)
		{
		
			//Armazenando o valor da sesssao em uma variavel
			$funcao = $_SESSION["funcao"];
	
			echo "$funcao";
			echo "$system_control";
?>
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				<body>
					<b>Menu</b></p>
					<a href="./pesquisar/form_pesquisar_produto.html">Pesquisar produtos</a>
					<a href="./alterar/form_pesquisar_produto.html">Alterar produtos</a>
					<a href="./alterar/form_cadastrar_produto.html">Cadastrar produtos</a>
				</body>
			</html>
<?php			
		}	
	}
			
