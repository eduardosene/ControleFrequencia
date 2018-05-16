<?php
	require_once('../conecta.php'); 

				$coordenacao=$_POST['tCoordenacao'];
				$nomeCoordenador=$_POST['tNomeCoordenador'];
				$matriculaCoordenador=$_POST['tMatriculaCoordenador'];
				$emailCoordenador=$_POST['tEmailCoordenador'];
				$senhaCoordenador=$_POST['tSenhaCoordenador'];
				$redigitarCoordenador=$_POST['tRedigitarCoordenador'];

		
	//Inclute no banco
	mysqli_query($conexao,"UPDATE coordenador SET coordenacao='$coordenacao', nomeCoordenador='$nomeCoordenador', emailCoordenador='$emailCoordenador', senhaCoordenador='$senhaCoordenador', redigitarCoordenador='$redigitarCoordenador' WHERE matriculaCoordenador = '$matriculaCoordenador'");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['alterarSucesso'])) {
    
    echo '<script type="text/javascript">
    alert("Alterado com sucesso!");
    location.href="editarCoordenador.php";    
    </script>';
	}


		

?>
