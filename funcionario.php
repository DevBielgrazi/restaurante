<?php
	//Inicializando uma sessao
	session_start();
	
	//Armazenando o valor da sesssao em uma variavel
	$funcao = $_SESSION["funcao"];
	
	echo " Tela: $funcao <p>";
?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<b>Menu</b></p>
		<a href="./pesquisar/form_pesquisar_produto.html">Pesquisar produtos</a><br>
		<a href="./alterar/form_pesquisar_produto.html">Alterar produtos</a><br>
		<a href="./cadastrar/form_cadastrar_produto.html">Cadastrar produtos</a><br>
		<a href="./excluir/form_excluir_produto.html">Excluir produtos</a><br>
	</body>
</html>	