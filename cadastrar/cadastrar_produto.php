<?php
	//Importando a Conexão
	require('..\connect.php');
	
	// Pegamos a palavra
	$nome_produto = trim($_POST['nome_produto']);
		
	//Verificando se ja existe um produto com nome desejado
	$sql_2 = mysqli_query($conn,"SELECT * FROM $tab_produto WHERE `nome` = '$nome_produto'");
	
	//Transformando o resultado em numeros
	$numero = mysqli_num_rows($sql_2);
	if($numero != 0)
	{
		echo "Existe um Produto deste mesmo nome";
	}
	else
	{		
		// Inserindo os dados
		$sql = mysqli_query($conn,"INSERT INTO $tab_produto(`nome`) VALUES ('$nome_produto')");	
		echo "Produto Cadastrado com Sucesso!";
	}		
?>
<p><a href="../funcionario.php">Voltar</a>