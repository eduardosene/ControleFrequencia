<?php
	require_once('../conecta.php'); 

				$nomeProfessor=$_POST['tNomeProfessor'];
				
	mysqli_query($conexao,"UPDATE professor SET nomeProfessor='$nomeProfessor', matriculaProfessor='$matriculaProfessor', emailProfessor='$emailProfessor', senhaProfessor='$senhaProfessor', redigitarProfessor='$redigitarProfessor'");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['alterarSucesso'])) {
    
    echo '<script type="text/javascript">
    alert("Alterado com sucesso!");
    location.href="editarProfessor.php";    
    </script>';
	}


		

?>
