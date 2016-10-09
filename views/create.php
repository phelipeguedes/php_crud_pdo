<?php 

include('../models/Usuario.php');
include('../dao/UsuarioDao.php');

if(isset($_POST['salvar']))
{
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$dao = new UsuarioDao();
	$usuario = new Usuario();

	$usuario->_setNome($nome);
	$usuario->_setEmail($email);
	$usuario->_setSenha($senha);

	if($dao->create($usuario))
	{	
		/* Classe 'Alert' do Bootstrap */
		echo "<div class='alert alert-success' role='alert'>Usuário(a) cadastrado(a) com sucesso!</div>";
	}
	else
	{	
		/* Classe 'Alert' do Bootstrap */
		echo "<div class='alert alert-danger' role'alert'>Ocorreu um erro. Não foi possível realizar o cadastro.</div>";
	}
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	 
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		form{
			margin: 20px 0px 1px -25px;
		}
		h2{
			background: #E6E8FA;
			height: 50px;
			width: 300px;
			margin-left: 20px;
			margin-bottom: 50px;
		}
		.panel-body{
			background: #990000;
			color: #fff;
		}
		button#retornar{
			margin-left: -630px;
		}
	</style>
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-body">
			INSERIR NOVO USUÁRIO(A)
		</div>
	</div>
	<form class="form-horizontal" action=""  role="form" method="post">
		<div class="form-group ">
			<label class="control-label col-sm-1" for="nome">Nome:</label>			
			<div class="col-sm-3">
				<input type="text" class="form-control" name="nome" id="nome" required>
			</div>			
		</div>	
		<div class="form-group">
			<label class="control-label col-sm-1" for="email">Email:</label>			
			<div class="col-sm-3">
				<input type="text" class="form-control" name="email" id="email" required>
			</div>			
		</div>	
		<div class="form-group">
			<label class="control-label col-sm-1" for="senha">Senha:</label>
			<div class="col-sm-3">
				<input type="password" class="form-control" name="senha" id="senha" required>
			</div>				
		</div>	
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<button type="submit" class="btn btn-default" name="salvar">Salvar</button>	
			</div>	
			<div class="col-sm-1">
				<a href="home.php"><button type="button" class="btn btn-default" id="retornar">Retornar</button></a>
			</div>		
		</div>
	</form>
</body>
</html>