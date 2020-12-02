<?php

include_once("conexao.php");

$nome  = $_REQUEST['nome'];
$nascimento = $_REQUEST['data_nascimento'];
$cep = $_REQUEST['cep'];
$cidade = $_REQUEST['cidade'];
$endereco = $_REQUEST['endereco'];
$estado = $_REQUEST['estado'];
$email = $_REQUEST['email_cd'];
$telefone = $_REQUEST['telefone'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha_cd1'];

	try {
		$sql = "INSERT INTO cadastrousuario (nome, data_nasc, cep, cidade,endereco,estado,email, telefone, cpf, senha) 
		VALUES ('$nome', '$nascimento','$cep','$cidade','$endereco','$estado','$email','$telefone','$cpf','$senha')";
	
		$query = mysqli_query($conexao, $sql);
		
	
		echo " Cadastro Feito com Sucesso <br><br>";
		 
		
		echo <<<HTML
		
		<a href="http://localhost/Helping-hand/login.php">Voltar?</a>
HTML;
   
	} catch (PDOException $e) {
		echo $e->getMessage();
		echo("Erro ao cadastrar ao site");
	}
	
	
	

?>