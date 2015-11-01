<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

// Conecta com o servidor e seleciona o banco
$con = @mysqli_connect("localhost", "root", "", "bd_aula") or die("Erro ao conectar no banco: " . mysqli_connect_error());

// Cria o SQL
$sql = "SELECT * FROM tb_usuarios WHERE login='$login' AND senha='$senha'";

// Executa o SQL
$rs = @mysqli_query($con, $sql) or die("Erro de SQL: " . mysqli_error($con));

// Verifica o número de linhas do Result Set
if(mysqli_num_rows($rs)){
	
	$usuario = mysqli_fetch_assoc($rs);
		
	// Inicializa a sessão do usuário caso não exista ainda
	session_start();
	
	// Cria uma váriavel de sessão 
	$_SESSION["usuario_logado"] = $usuario;
	
	// Redireciona o usuário para o HOME
	header("location:usuario.php");
	
	
}else{
	// Inicializa a sessão do usuário caso não exista ainda
	session_start();

	// Cria uma mensagem de erro
	$_SESSION["erro"] = "Login e/ou senha inválido(s)!";

	// Redireciona o usuário para o INDEX
	header("location:index.php");
	
}

?>