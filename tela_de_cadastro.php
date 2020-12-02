<!DOCTYPE html>
<?php
session_start();
?>
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
				if (email_login == "")
				{
					alert("Favor informar o seu Email!")
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
	
		<form class="form-horizontal col-sm-5" method="POST" action="logar.php"  name="relatopropio">
			<div class="form-group">
				<div class="col-sm-12">
					<center><img src="sgsp logo.png" width="200px" height="100px" class="img-responsive" alt="Responsive image"></center>
				</div>
			</div>

			<br>

			<div class="form-group">
					<label id="pad" for="prontuario">E-mail</label>
					<div id="pad">
						<input type="text" name="email_login" class="form-control" id="email"  placeholder="Digite seu e-mail">
					</div>
			</div>

			<div class="form-group">
				<label id="pad" for="senha">Senha</label>
					<div id="pad">
						<input type="password" name="senha_login" class="form-control" id="senha" placeholder="Digite a senha">
					</div>
			</div>

			<center>			
				<div class="form-group">
					<div class="col-sm-12">
						<a type="submit"  class="btn btn-success" id="alinhado">Acessar</a> 
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
		<form method="POST" action="cadastro.php" name="relatopropio" onSubmit="return validaForm()">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
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
									<center><img src="user.png" width="150px" height="100px" class="img-responsive" alt=""></center>
								</div>
							</div>

							<div class="form-group">                
                				<label id="pad" for="nome" >Nome</label>
                				<div id="pad">
                  					<input  type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" maxlength="30" required>
                				</div>
              				</div>

                      <div class="form-group">                
                        <label id="pad" for="data" >Data de Nascimento</label>
                        <div id="pad">
                            <input  type="date" class="form-control" id="nasc" name="data">
                        </div>
                      </div>

                      <div class="form-group">                
                        <label id="pad" for="cidade" >Cidade</label>
                        <div id="pad">
                            <input  type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade onde reside" maxlength="30" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="email">E-Mail</label>
                          <div id="pad">
                            <input  type="email" class="form-control"  name="email" id="email" placeholder="Digite seu e-mail" maxlength="50" required>
                          </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="telefone">Telefone</label>
                        <div id="pad">
                            <input  type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone" maxlength="12" onkeypress="formatar('##.####-####', this)" maxlength="30" required>
                        </div>
                      </div>  

              				<div class="form-group">
                				<label id="pad" for="cpf" >CPF</label>
                				<div id="pad">
                  					<input  type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this)" maxlength="30" required>
                				</div>
              				</div>

                      <div class="form-group">                
                        <label id="pad" for="senha" >Senha</label>
                        <div id="pad">
                            <input  type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" maxlength="30" required>
                        </div>
                      </div>

                  
              				<center>
                				<div class="form-group" id="alinhado">
                  					<div class="col-sm-12">
                    					<button type="submit" class="btn btn-success">Cadastrar</button>
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