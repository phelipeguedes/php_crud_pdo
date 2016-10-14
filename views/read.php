<?php 

include('../models/Usuario.php');
include('../dao/UsuarioDao.php');

$dao = new UsuarioDao();
$usuario = new Usuario();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Selecionar Usuários</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	 
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		.panel{
			background: #990000;
			color: #fff;
		}

		tr, th{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-body">
			DADOS DOS USUÁRIOS
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Senha</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				$resultado = $dao->read();
				foreach ($resultado as $linha) {
					?>
					<tr>
						<td><?= $linha['id']; ?></td>
						<td><?= $linha['nome']; ?></td>
						<td><?= $linha['email']; ?></td>
						<td><?= $linha['senha']; ?></td>
						<td><a href="delete.php?acao=deletar&id=<?php echo $linha['id']; ?>" onclick=' return confirm("Tem certeza que quer excluir este(a) usuário(a)?"); ' >excluir</a> |
							<a href="update.php?acao=atualizar&id=<?php echo $linha['id']; ?>">atualizar</a>
						</td>
					</tr>

					<?php } ?>
				</tbody>
			</table>

			<a href="home.php"><button type="button" class="btn btn-default">Retornar</button></a>
		</div>	
	</body>
	</html>
