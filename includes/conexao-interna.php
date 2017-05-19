<?php 

	// PROTEGE CONTRA SQL Injection
	function DBEscape($dados){

		$cnx = DBConnect;

		if(!is_array($dados))
			$dados = mysqli_real_escape_string($cnx, $dados);
		else{
			$arr = $dados;
			foreach ($arr as $key => $value) {
				$key = mysqli_real_escape_string($cnx, $dados);
				$value = mysqli_real_escape_string($cnx, $dados);

				$dados[$key] = $value;
			}
		}

		DBClose($cnx);
		return $dados;
	}
	
	function DBClose($cnx){
		@mysqli_close($cnx) or die(mysqli_error($cnx));
	}
	// ABRE CONEXÃO COM MYSQL
	function DBConnect(){
		try{
				$cnx = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());

				mysqli_set_charset($cnx, DB_CHARSET) or die(mysqli_error($cnx));

				if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

				return $cnx;
		} catch (Exception $e){
				echo 'Erro: '.$e->getMessage();
				return null;
		}

	}

 ?>