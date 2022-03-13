<?php
    //Criando as variaveis locais
    
    $login = $_POST["login"];
    $password = $_POST["password"];
   
    if((empty($login)) && (empty($password)))
    {
                   //Todos os dados devem ser preenchidos
?>
                   <script language='JavaScript'>
                           alert('Você deve preencher todos os dados!!!');
                           document.location.href="index.html";
                   </script>
<?php
    }
    else if(empty($login))
    {

                    //Campo nickname deve ser preenchido
?>
                    <script language='JavaScript'>
                            alert('Você deve preencher o Campo Login!!');
                            document.location.href="index.html"
                    </script>
<?php
    }
    else if(empty($password))
    {

                    //Campo senha deve ser preenchido
?>
                    <script language='JavaScript'>
                            alert('Você deve preencher o Campo Senha!!');
                            document.location.href="index.html"
                    </script>
<?php
    }
    else
    {
        //Todos os campos foram preenchidos
                    
        //Importando o arquivo de conexao
        require("connect.php");

		//Verificando o login
        $consultar_login = "SELECT * FROM usuario_sistema WHERE login = '$login'";
        $resultado_consultar_login = mysqli_query($conn,$consultar_login);
        $quantidade_registros_login = mysqli_num_rows($resultado_consultar_login);

        //Verificando se foi encontrado algum registro do login informado
        if($quantidade_registros_login == 0)
        {
			//login Não Encontrado
?>
            <script language='javascript'>
                alert("Login Inexistente!!!");
                document.location.href="index.html";
            </script>
<?php
        }
		else
		{
			//Verificando a senha			
			$senha = md5($password);
				
			//Validando a senha
			$consultar_login = "SELECT * FROM $tab_usuario WHERE login = '$login' AND senha = '$senha'";
            $resultado_consultar_login = mysqli_query($conn,$consultar_login);
            $quantidade_registros_login = mysqli_num_rows($resultado_consultar_login);

            //Verificando a quantidade de registros que foi retornado

            if($quantidade_registros_login == 0)
            {
                //Senha Inválida
?>
                        <script language='javascript'>
                                alert("Senha Inválida!!!");
                                document.location.href="index.html";
                        </script>
<?php
			}    
			else
			{
				//Conta validada
				//Criando o vetor do usuario
				$vetor = mysqli_fetch_array($resultado_consultar_login);
				
				//Inicializando uma sessao
				session_start();

                //Criando uma variavel de controle do sistema
				//Registrando esta variavel no sistema
                $_SESSION["system_control"] = 1;

                //Registrando a variavel de status no sistema
                $_SESSION["cod_usuario"] = $vetor['codigo'];
				
				//Registando a funcao na sessao
				$_SESSION["funcao"] = $vetor['funcao'];
				
				//Fazendo o Redirecionamento
				if($_SESSION['funcao'] == 'administrador')
				{
?>
                        <script language='javascript'>
                                alert("Adm!!!");
                                document.location.href="adm.php";
                        </script>
<?php
				}
				else{
?>
                        <script language='javascript'>
                                alert("Funcionário!!!");
                                document.location.href="funcionario.php";
                        </script>
<?php
				}
			}
		}
	}
?>