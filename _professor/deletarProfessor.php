<?php
	require_once('../conecta.php'); 

		$nomeProfessor=$_POST['tSelecioneProfessor'];

	mysqli_query($conexao,"DELETE FROM professor WHERE nomeProfessor='$nomeProfessor'");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['deletarSucesso'])) {
    
    echo '<script type="text/javascript">
    alert("Deletado com sucesso!");
    location.href="excluirProfessor.php";    
    </script>';
	}




		

?>
