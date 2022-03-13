<?php	
	//conexao com o bd
	require('..\connect.php');
		
	// Pegamos a palavra
	$nome = $_POST['nome_produto'];	
	$codigo = $_POST['codigo'];
	
	//Procurando o produto solicitado
	$sql = mysqli_query($conn,"SELECT * FROM $tab_produto WHERE `nome` = '$nome'");
	
	//Transformando o resultado em numeros
	$numero = mysqli_num_rows($sql);
		
	if($numero != 0)
	{
		echo "Nome existente";
	}
	else
	{	
		//Atualizando a tabela
		$sql2 = mysqli_query($conn,"UPDATE $tab_produto SET `nome`= '$nome' WHERE `codigo`= $codigo");
		
		echo"Atualizado com Sucesso!";
	}		
?>
<p><a href="index.html">Voltar</a>