<?php 

	/**
	* 
	*/
	class Usuario
	{

		private $id;
		private $nome;
		private $email;
		private $senha;

		public function getId()
		{
			return $this->id;
		}

		public function _setId($id)
		{
			$this->id = $id;

			return $this;
		}

		public function getNome()
		{
			return $this->nome;
		}

		public function _setNome($nome)
		{
			$this->nome = $nome;

			return $this;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function _setEmail($email)
		{
			$this->email = $email;

			return $this;
		}

		public function getSenha()
		{
			return $this->senha;
		}

		public function _setSenha($senha)
		{
			$this->senha = $senha;

			return $this;
		}
	}

	?>