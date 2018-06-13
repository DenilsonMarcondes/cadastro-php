<?php
	// passo 1 - abrir conexao

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";
$conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

	// Passo 2 - Testar conexao 

	if ( mysqli_connect_errno() ) {
		die("<h3>Conexao falhou: </h3>" .mysqli_connect_errno());
	}

?>