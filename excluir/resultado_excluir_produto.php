<?php
	//Importando a Conexão
	require('../connect.php');
	
	// Pegamos a palavra
	$nome = $_POST['nome_produto'];	
		
	//Procurando o produto solicitado
	$sql = mysqli_query($conn,"SELECT * FROM $tab_produto WHERE `nome` = '$nome'");
		
	//Transformando o resultado em numeros
	$numero_produtos = mysqli_num_rows($sql);	
		
		if($numero_produtos == 0)
			{
				echo "Nao existe produto Cadastrado com este nome!";
			}	
			else
			{
				// Inserindo os dados
				$sql2 = mysqli_query($conn,"DELETE FROM $tab_produto WHERE `nome` = '$nome'");	
				echo "Produto excluido com Sucesso!";
			}	
?>
<p><a href="form_excluir_produto.html">Voltar</a>