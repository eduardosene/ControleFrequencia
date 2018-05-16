<?php
	require_once('../conecta.php'); 

		$codigoTurma=$_POST['tSelecioneTurma'];

	mysqli_query($conexao,"DELETE FROM turma WHERE codigoTurma='$codigoTurma'");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['deletarSucesso'])) {
    
    echo '<script type="text/javascript">
    alert("Deletado com sucesso!");
    location.href="excluirTurma.php";    
    </script>';
	}




		

?>
