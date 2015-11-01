<?php

	
	// Abre a sessão do usuário
	session_start();
	
	// Destroi a sessão
	session_destroy();
	
	// Redireciona o usuário para o INDEX
	header("location:index.php");
?>