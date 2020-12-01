<?php

include_once("conexao.php");

$nome  = $_REQUEST['nome'];
$nascimento = $_REQUEST['data'];
$cidade = $_REQUEST['cidade'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

	try {
		$sql = "INSERT INTO cadastrousuario (nome, nascimento, cidade, email, telefone, cpf, senha) 
		VALUES ('$nome', '$nascimento','$cidade','$email','$telefone','$cpf','$senha')";
	
		$query = mysqli_query($conexao, $sql);
		
	
		echo " Cadastro Feito com Sucesso <br><br>";
		 
		
		echo <<<HTML
		
		<a href="tela_de_cadastro.php">Voltar?</a>
HTML;
   
	} catch (PDOException $e) {
		echo $e->getMessage();
		echo("Erro ao cadastrar");
	}
	
	
	

?>