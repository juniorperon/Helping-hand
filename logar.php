<?php
include ("conexao.php");
include_once("conexao.php");

// RECEBE AS VARIÁVEIS VIA POST E TRATA O SQL INJECTION FINALIZANDO COM A CODIFICAÇÃO MD5
$email = $_POST['email_login'];
$senha = $_POST['senha_login'];
/*$Login     = md5($LoginPost);*/
/*$Senha     = md5($SenhaPost);*/

$sql = "SELECT * FROM cadastrousuario WHERE email = '$email' AND senha ='$senha'"; //colocar nivel de acesso aqui tambem nivel= ?
$query = mysqli_query($conexao, $sql);

	header("location:http://localhost/Helping-hand/menu.php");


   
?>