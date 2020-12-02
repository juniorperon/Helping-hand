<?php
// Conexão
require_once 'conexao.php';

// Sessão
session_start();

if(isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($conexao, $_POST['email_login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha_login']);

	if(empty($login) or empty($senha)):
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else:
		// 105 OR 1=1 
	    // 1; DROP TABLE teste

		$sql = "SELECT email FROM cadastrousuario WHERE email = '$login'";
		$resultado = mysqli_query($conexao, $sql);		
		if(@mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		$sql = "SELECT * FROM cadastrousuario WHERE email = '$login' AND senha = '$senha'";
		$resultado = mysqli_query($conexao, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['email'] = $dados['email'];
				header('Location: http://localhost/Helping-hand/menu.php');
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>