<?php
	//Importando a Conexão
	require('..\connect.php');
	
	// Pegamos a palavra
	$nome = trim($_POST['nome_usuario']);
	$endereco = trim($_POST['endereco']);
	$salario = trim($_POST['salario']);
	$date = trim($_POST['data_nascimento']);
	$rg = trim($_POST['rg']);
	$cpf = trim($_POST['cpf']);
	$telefone = trim($_POST['telefone']);
	$funcao = trim($_POST['funcao']);
	$login = trim($_POST['login']);
	$senha = trim($_POST['senha']);	
	
	//Verificando se ja existe um usuario com o rg ja cadastrado
	$sql_2 = mysqli_query($conn,"SELECT * FROM $tab_usuario WHERE `rg` = '$rg' OR `login` = '$login' OR `cpf` = '$cpf'");
	
	//Transformando o resultado em numeros
	$numero = mysqli_num_rows($sql_2);
	
	if($numero != 0)
	{
		echo "Existe um Usuario já cadastrado";
	}
	else
	{	
		$senha = md5($senha);
		// Inserindo os dados
		mysqli_query($conn,"INSERT INTO `usuario_sistema`(`nome`, `endereco`, `salario`,`data_nascimento`,`rg`, `cpf`, `telefone`, `funcao`, `login`, `senha`) VALUES ('$nome','$endereco',$salario,'$date','$rg','$cpf',$telefone,'$funcao','$login','$senha')");	
		echo "Usuario Cadastrado com Sucesso!";
	}		
?>
<p><a href="../index.html">Voltar</a>