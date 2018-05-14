<?php
	require_once('../conecta.php'); 

		$nomeCoordenador=$_POST['tSelecioneCoordenador'];

	mysqli_query($conexao,"DELETE FROM coordenador WHERE nomeCoordenador='$nomeCoordenador'");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['deletarSucesso'])) {
    
    echo '<script type="text/javascript">
    alert("Deletado com sucesso!");
    location.href="excluirCoordenador.php";    
    </script>';
	}




		

?>
