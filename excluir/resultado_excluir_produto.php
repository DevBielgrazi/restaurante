<?php
	//Importando a Conexão
	require('..\connect.php');
	
	// Pegamos a palavra
	$opcao = $_POST['opcao'];	
	
	if($opcao == 'todos')
	{
		//Procurando o produto solicitado
		$sql = mysqli_query($conn,"SELECT * FROM $tab_produto");
		
		//Transformando o resultado em numeros
		$numero_produtos = mysqli_num_rows($sql);
				
		if($numero_produtos != 0)
		{
?>		
			<html>
				<head>
					<title>Visualizar todos</title>
				</head>
				<body>
					<h1>Todos os Produtos</h1><p>
					<table border="1">
						<tr>
							<td>Codigo</td>
							<td>Nome</td>						
						</tr>
<?php	
				//Declarando a variavel de controle e atribuindo o valor 0
				$i=0;
			
				while($i!= $numero_produtos)
				{
					//Transformando o resultado em vetor
					$vetor_produto = mysqli_fetch_array($sql);
?>
					<tr>
						<td><?php echo $vetor_produto['codigo'];?></td>
						<td><?php echo $vetor_produto['nome'];?></td>					
					</tr>
<?php
					$i = $i + 1;
				}
?>
					</table>
				</body>
			</html>	
<?php				
		}	
		else
		{
			echo "nâo existe produto Cadastrado!";
		}
	}
	else
	{
		$nome = $_POST['nome_produto'];
		
		//Procurando o produto solicitado em especifico
		$sql = mysqli_query($conn,"SELECT * FROM $tab_produto WHERE `nome` = '$nome'");
		
		//Transformando o resultado em numeros
		$numero_produtos = mysqli_num_rows($sql);
			
		if($numero_produtos != 0)
		{
?>		
			<html>
				<head>
					<title>Visualizar todos</title>
				</head>
				<body>
					<h1>Todos os Produtos</h1><p>
					<table border="1">
						<tr>
							<td>Codigo</td>
							<td>Nome</td>	
							<td>Quantidade</td>							
						</tr>
<?php	
				//Declarando a variavel de controle e atribuindo o valor 0
				$i=0;
			
				while($i!= $numero_produtos)
				{
					//Transformando o resultado em vetor
					$vetor_produto = mysqli_fetch_array($sql);
?>
					<tr>
						<td><?php echo $vetor_produto['codigo'];?></td>
						<td><?php echo $vetor_produto['nome'];?></td>
						<td><?php echo $vetor_produto['quantidade'];?></td>						
					</tr>
<?php
					$i = $i + 1;
				}
?>
					</table>
				</body>
			</html>	
<?php				
		}	
		else
		{
			echo "Nao existe produto Cadastrado com este nome!";
		}
	}	
?>
<p><a href="form_pesquisar_produto.html">Voltar</a>