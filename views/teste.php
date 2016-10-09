<?php 

require_once('../dao/UsuarioDao.php');

	$dao = new UsuarioDao();
	$id = 1;

	$res = $dao->getById($id);
	
	if($dao->getById($id) != null)
	{
		print_r($res);
		
	}
	else
	{
		echo "Este(a) usuário(a) não existe.";
	}

 ?>