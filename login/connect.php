<?php 
	// Conex�o com o banco de dados
	$conn = mysqli_connect("localhost", "root", "") or die("N�o foi poss�vel a conex�o com o Banco");
	
	// Selecionando banco
	$db = mysqli_select_db($conn,"bd_login") or die("N�o foi poss�vel selecionar o Banco");
	
	//Tabelas
	$tab_login = "login";    
?>
