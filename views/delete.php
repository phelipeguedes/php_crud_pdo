<?php 

require_once("../dao/UsuarioDao.php");
require_once("../models/Usuario.php");

if(isset($_GET['acao']) || isset($_GET['deletar'])){

	$id = $_GET['id'];

	$usuario = new Usuario();
	$dao = new UsuarioDao();

	if($dao->getById($id) && ($dao->delete($id)))
	{	
		/* Classe 'Alert' do Bootstrap */
		echo "<div class='alert alert-success' role='alert'>Usuário(a) deletado(a) com sucesso!</div>";
	}
	else
	{	
		/* Classe 'Alert' do Bootstrap */
		echo "<div class='alert alert-danger' role'alert'>Este usuário não existe!.</div>";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Deletar Usuário(a)</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	 
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
		.panel{
			background: #990000;
			color:#fff;
		}

		button#retornar{
			margin-left: -610px;
		}
	</style>
</head>
<body>
	<div class="panel panel-defult">
		<div class="panel-body">
			DELETAR USUÁRIO(A)
		</div>
	</div>
	<form action="" class="form-horizontal" method="get">
		<div class="form-group">
			<label for="id" class="control-label col-sm-1">Id:</label>
			<div class="col-sm-3">
				<input type="text" name="id" class="form-control" required>		
			</div>			
		</div> 	
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<a href=""><button type="submit" class="btn btn-default" name="deletar" onclick=' return confirm("Tem certeza que deseja excluir este(a) usuário(a)?"); ' >Deletar</button></a>
			</div>

			<div class="col-sm-1">
				<a href="home.php"><button type="button" class="btn btn-default" id="retornar">Retornar</button></a>
			</div>
		</div>	
	</form>

</body>
</html>