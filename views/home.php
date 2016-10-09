<!DOCTYPE html>
<html>
<head>
	<title>Crud PDO</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	 
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		.jumbotron{
			background: #990000;
		}
		h2{
			font-family: arial;
			color: #fff;
		}

		img{
			margin: 5%;
			width: 500px;
		}
	</style>
</head>
<body>
	<?php session_start(); ?>
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h2>CRUD PDO</h2>
		</div>
	</div>	
	
	<div class="container">
		<div class="navbar navbar-default navbar fixed-top">
			<div class="navbar-inner">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
					<span class="sr-only"></span>	
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">App</a>
			</div>
			
			<div class="collapse navbar-collapse" id="navBar">
				<ul class="nav navbar-nav">
					<li><a href="create.php">Inserir</a></li>
					<li><a href="read.php">Listar</a></li>
					<li><a href="http://localhost/php_crud_pdo_5/views/update.php?acao=atualizar&id=">Editar</a></li>
					<li><a href="delete.php">Deletar</a></li>
				</ul>
			</div>
		</div>	
	</div>

	<div class="container">
		<img src="../img/php_01.png" alt="programando PHP" class="img-responsive img-rounded center-block" />
	</div>

</body>
</html>