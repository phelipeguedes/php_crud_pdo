<?php 

require_once('../dao/UsuarioDao.php');
require_once('../models/Usuario.php');

session_start();
	
	if(isset($_GET['acao'])){
		$usuario = new Usuario();
		$dao = new UsuarioDao();	
	
		$id = $_GET['id'];

		if(isset($_GET['id']) && isset($_POST['atualizar'])){

			$id = $_GET['id'];
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$usuario->_setId($id);
			$usuario->_setNome($nome);
			$usuario->_setEmail($email);
			$usuario->_setSenha($senha);

			if($dao->getById($id) && ($dao->update($usuario)))
			{	
				/* Classe 'Alert' do Bootstrap */
				echo" <div class='alert alert-success' role='alert'> Usuário(a) atualizado(a) com sucesso!; </div>";
			} 
			else
			{	
				/* Classe 'Alert' do Bootstrap */
				echo" <div class='alert alert-danger' role='alert'> Ocorreu um erro ou este usuário não existe!; </div>";
			}
			
		}
	}
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Atualizar</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 	
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 	 
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			.panel{
				background: #990000;
				color: #fff;
			}
			button#retornar{
				margin-left: -610px;
			}
		</style>
	</head>
	<body>

		<div class="panel panel-default">
			<div class="panel-body">
				ALTERAR DADOS
			</div>
		</div>		

		<form class="form-horizontal" action="" role="form" method="post">
			<div class="form-group">
				<label for="id" class="control-label col-sm-1">Id:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="id"  value="<?php echo $id; ?>"/>
				</div>
			</div>

			<div class="form-group">
				<label for="nome" class="control-label col-sm-1">Nome:</label>
				<div class="col-sm-3">
					<input type="text" name="nome" class="form-control" required value="<?php  ?>">		
				</div>			
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Email:</label>
				<div class="col-sm-3">
					<input type="text" name="email" class="form-control" required value="<?php ?>">	
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="control-label col-sm-1">Password:</label>
				<div class="col-sm-3">
					<input type="password" name="senha" class="form-control" required value="<?php ?>">	
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-6">
					<button type="submit" class="btn btn-default" name="atualizar">Atualizar</button>
				</div>

				<div class="col-sm-1">
					<a href="home.php"><button type="button" class="btn btn-default" id="retornar">Retornar</button></a>
				</div>
			</div>
		</form> 						
		<?php   ?>
	</body>
	</html>