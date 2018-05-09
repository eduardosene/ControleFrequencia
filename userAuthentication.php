<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Autenticação</title>
		<script type="text/javascript" src="_js/userAuthentication.js"></script>

</head>
<body>

<?php
	require_once('conecta.php'); 

	$login=$_POST['tLogin'];
	$senha=$_POST['tSenha'];

	$consultaProfessor = mysqli_query($conexao,"SELECT * FROM professor WHERE usuarioProfessor='$login' and senhaProfessor='$senha' ");
	$rowProfessor = mysqli_num_rows($consultaProfessor);

	$consultaCoordenador = mysqli_query($conexao,"SELECT * FROM coordenador WHERE usuarioCoordenador='$login' and senhaCoordenador='$senha' ");
	$rowCoordenador = mysqli_num_rows($consultaCoordenador);

		if($rowProfessor > 0){
			session_start();
			$_SESSION['tLogin']=$_POST['tLogin'];
			$_SESSION['tSenha']=$_POST['tSenha'];
			echo "<script>loginSucessFullyProfessor()</script>";
		} else if($rowCoordenador > 0){
			session_start();
			$_SESSION['tLogin']=$_POST['tLogin'];
			$_SESSION['tSenha']=$_POST['tSenha'];
			echo "<script>loginSucessFullyCoordenado()</script>";

		}else {
			echo "<script>loginFailed()</script>";
		}

?>


</body>
</html>
