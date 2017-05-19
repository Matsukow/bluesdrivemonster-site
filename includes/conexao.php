<?php
	$servidor = "localhost";
	// $usuario = "root";
	$usuario = "id1403720_matsukow";
	$senha = "siren916";
	// $dbname = "sitebdm";
	$dbname = "id1403720_sitebdm";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>