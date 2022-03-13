<?php
	//Importando a Conexão
	require('..\connect.php');
	
	// Pegamos a palavra
	$nome = $_POST['nome_produto'];	
	
	//Procurando o produto solicitado
	$sql = mysqli_query($conn,"SELECT * FROM $tab_produto WHERE `nome` = '$nome'");
	
	//Transformando o resultado em numeros
	$numero = mysqli_num_rows($sql);
	
	//Transformando o resultado em vetor
	$vetor_produto = mysqli_fetch_array($sql);
		
	if($numero != 0)
	{
?>
		<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<title>- Restaurante Motoclube - </title>
			</head> 
			<body>
				<h2>Restaurante Motoclube</h2><p>
				<table border=1>
					<tr>
						<td>
							<form method="post" action="alterar_produto.php">
								Novo nome do Produto: <input name="nome_produto" value="<?php echo $vetor_produto['nome'];?>" type=text size=50 maxlength=50><br>
								<input type="hidden" name="codigo" value="<?php echo $vetor_produto['codigo'];?>">
								<input type=submit value=Enviar>
							</form>
						</td>	
					</tr>	
				</table>	
			</body>
		</html>
<?php
	}
	else
	{		
		echo "Produto Inexistente";
	}		
?>
<p><a href="form_pesquisar_produto.html">Voltar</a>