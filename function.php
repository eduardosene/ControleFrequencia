<?php
	//verificar usuário logado
	session_start();

	function verificaUsuarioTela(){
		if (!isset($_SESSION["tLogin"]) || !isset($_SESSION["tSenha"])){
		header("location: login.php");
		exit;
	}
}
	function verificaUsuario(){
		if (!isset($_SESSION["tLogin"]) || !isset($_SESSION["tSenha"])){
		header("location: ../login.php");
		exit;
	}
}

?>