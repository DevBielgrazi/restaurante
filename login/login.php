<?php
	//Verificando se ja existe uma sessão aberta
	
	//Mantendo a sessão/cria uma sessao
    session_start();
	
	if(!isset($_SESSION["system_control"]))
	{
	?>
	<html>
		<head>
			<title>Login</title>
		</head>
		<body>
			<form action="verifica_login.php" method="POST">
				
				<table border="0" align="center">
					<tr>
						<th>Login</th><td><input type="text" name="c_login" size="10"></td>
					</tr>
					<tr>
						<th>Senha</th><td><input type="password" name="c_senha" size="10"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="botao" value="OK"></td>
					</tr>
				</table>
			</form>		
		</body>
	</html>
	<?php
	}
	else if($_SESSION["system_control"] == 1)
	{
	?>
	<script>		
		document.location.href="logado.php";
	</script>
	<?php
	}
?>