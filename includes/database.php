<?php 

	// EXECUTA QUERYS
	function DBExecute($query){
		
		$cnx = DBConnect();

		$result = @mysqli_query($cnx, $query) or die(mysqli_error());

		DBClose($cnx);

		return $result;

	}

	function DBRead($tabela, $parametros = null, $campos = '*'){
		// $tabela = DB_PREFIX.'_'.$tabela;
		
		$cnx = DBConnect();

		$parametros = ($parametros) ? " {$parametros}" : null;
		$query = "SELECT {$campos} FROM {$tabela}{$parametros}";

		$result = @mysqli_query($cnx, $query) or die(mysqli_error());

		DBClose($cnx);

		return $result;
		
		// return $query;

		// $result = DBExecute($query);

		// // OU if (mysqli_num_rows($result) == 0)
		// if (!mysqli_num_rows($result))
		// 	return false;
		// else{
		// 	while ($res = mysqli_fetch_assoc($result)){
		// 		$data[] = $res;
		// 	}

		// return $data;
	}

 ?>