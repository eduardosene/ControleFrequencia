<?php
	require_once('../conecta.php'); 

		$nomeAluno=$_POST['tSelecioneAluno'];

	mysqli_query($conexao,"DELETE FROM aluno WHERE nomeAluno='$nomeAluno'");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['deletarSucesso'])) {
    
    echo '<script type="text/javascript">
    alert("Deletado com sucesso!");
    location.href="excluirAluno.php";    
    </script>';
	}

?>
