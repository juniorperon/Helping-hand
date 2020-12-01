<?php
// Conexão
require_once 'conexao.php';

// Sessão
session_start();

// Botão enviar
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

		if(mysqli_num_rows($resultado) > 0):
		$senha = ($senha);       
		$sql = "SELECT * FROM cadastrousuario WHERE email = '$login' AND senha = '$senha'";



		$resultado = mysqli_query($conexao, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($conexao);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['email'];
				header('Location: http://localhost/Helping-hand/perfil.php');
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="favicon.png" type="image/x-icon" />
		<title>Acesso ao Sistema</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "estilo.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script language="JavaScript">
			/* Verifica se os campos de login e senha foram preenchidos */
			function validaForm()
			{
				d = document.login;
				//Verifica se o campo login está vazio
				if (d.login.value == "")
				{
					alert("Favor informar o seu Prontuario!")
					d.login.focus();
					return false;
				}
				//Verifica se o campo senha está vazio
				if (d.senha.value == "")
				{
				alert("Favor informar sua senha!");
				d.senha.focus();
				return false;
				}									
				return true;
			}
		</script>

		<script>
			function formatar(mascara, documento)
          	{
            	var i = documento.value.length;
            	var saida = mascara.substring(0,1);
            	var texto = mascara.substring(i)
            
            	if (texto.substring(0,1) != saida)
            	{
            		documento.value += texto.substring(0,1);
            	}
           	}
        </script>

		<script>
			window.history.forward(1);
		</script>

		<script>
			$('#myModal').on('shown.bs.modal', function () 
			{
 				$('#myInput').focus()
			}
		</script>


	</head>

	<body class="corpo">
		<form class="form-horizontal col-sm-5" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validaForm()">
			<div class="form-group">
				<div class="col-sm-12">
					<center><img src="sgsp logo.png" width="150px" height="100px" class="img-responsive" alt="Responsive image"></center>
				</div>
			</div>

			<br>

			<div class="form-group">
					<label id="pad" for="prontuario">E-mail</label>
					<div id="pad">
						<input type="text" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" name="email_login" class="form-control" required id="prontuario" placeholder="Digite seu e-mail" >
					</div>
			</div>

			<div class="form-group">
				<label id="pad" for="senha">Senha</label>
					<div id="pad">
						<input type="password" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"name="senha_login" class="form-control" required id="senha" placeholder="Digite a senha">
					</div>
			</div>

			<center>			
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" name="btn-entrar" class="btn btn-success">Entrar</button> <!-- trocar para button depois -->
					</div>
				</div>
			</center>

			<center><label>Não tem cadastro? O que acha de fazer uma boa ação. Cadastre-se! <a data-toggle="modal" href="#myModal">Clique Aqui</a></label></center>
		</form>

		<!-- Modal -->
		<!-- Modal que contém o cadastro de um novo usuário -->
    <!-- Algumas Observações do formulário de cadastro -->
    <!-- 1 - action="" - Precisa ser informado o php onde salva as informações para o banco de dados -->
    <!-- 2 - name="" - Informa o nome do php sem o .php, apenas o nome do arquivo -->
    <!-- 3 - Em cada div o id e name deve levar o nome do campo que está no php que salva as informações no banco de dados -->
		<form method="post" action="cadastra.php" name="" onSubmit="return validaForm()">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel">Cadastro de novo usuário</h4>
      					</div>

     					<div class="modal-body">
   							<br>
   							<div class="form-group">
 								<div class="col-sm-12">
									<center><img src="user.png" width="100px" height="100px" class="img-responsive" alt=""></center>
								</div>
							</div>

							<div class="form-group">                
                				<label id="pad" for="nome" >Nome</label>
                				<div id="pad">
                  					<input  type="text" class="form-control" required id="nome" name="nome" placeholder="Digite seu nome">
                				</div>
              				</div>

                      <div class="form-group">                
                        <label id="pad" for="data_nascimento" >Data de Nascimento</label>
                        <div id="pad">
                            <input  type="date" class="form-control" required id="data_nascimento" name="data_nascimento">
                        </div>
                      </div>

                      <div class="form-group">                
                        <label id="pad" for="cidade">CEP</label>
                        <div id="pad">
                            <input  type="text" class="form-control" required id="cidade" name="cidade" placeholder="Digite o CEP">
                        </div>
                      </div>

                      <div class="form-group">                
                        <label id="pad" for="cidade">Cidade</label>
                        <div id="pad">
                            <input  type="text" class="form-control" required id="cidade" name="cidade" placeholder="Digite a cidade onde reside">
                        </div>
                      </div>

                      <div class="form-group">                
                        <label id="pad" for="cidade">Endereço</label>
                        <div id="pad">
                            <input  type="text" class="form-control" required id="cidade" name="cidade" placeholder="Digite a cidade onde reside">
                        </div>
                      </div>

                      <div class="form-group">                
                        <label id="pad" for="cidade">Estado</label>
                        <div id="pad">
                            <input  type="text" class="form-control" required id="cidade" name="cidade" placeholder="Digite a cidade onde reside">
                        </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="email">E-Mail</label>
                          <div id="pad">
                            <input  type="text" class="form-control"  name="email_cd" required id="email" placeholder="Digite seu e-mail">
                          </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="telefone">Telefone</label>
                        <div id="pad">
                            <input  type="text" name="telefone" class="form-control" required id="telefone" placeholder="Digite seu telefone" maxlength="12" onkeypress="formatar('##.####-####', this)">
                        </div>
                      </div>  

              				<div class="form-group">
                				<label id="pad" for="cpf" >CPF</label>
                				<div id="pad">
                  					<input  type="text" class="form-control" required id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this)">
                				</div>
              				</div>

                      <div class="form-group">
                        <label id="pad" for="modulo">Tipo de Acesso</label>
                          <div id="pad">
                            <select class="form-control" name="modulo">
                                <option value="" selected hidden>Selecione o Acesso</option>
                                <option value="1">Doações</option>
                                <option value="2">Receber Pedidos</option>                  
                            </select>
                          </div>
                      </div>

                      <div class="form-group">                
                        <label id="pad" for="senha" >Senha</label>
                        <div id="pad">
                            <input  type="password" class="form-control" required id="senha" name="senha_cd1" placeholder="Digite sua senha">
                        </div>
                      </div>

                      <div class="form-group">                
                        <label id="pad" for="nomedorelator" >Confirme sua senha</label>
                        <div id="pad">
                            <input  type="password" class="form-control" required id="senha" name="senha_cd" placeholder="Informe sua senha mais uma vez">
                        </div>
                      </div>
                
              				<center>
                				<div class="form-group" id="alinhado">
                  					<div class="col-sm-12">
                    					<button type="submit" onclick="cadastro_feito()" class="btn btn-success">Cadastrar</button>
                  					</div>
                				</div>

                				<div class="form-group" id="alinhado">
                  					<div class="col-sm-12">
                    					<button type="reset" class="btn btn-success">Cancelar</button>
                  					</div>
                				</div>
                			</center>
                		</div>
          			</div>
        		</div>
        	</div>
        </form>
	</body>
</html>