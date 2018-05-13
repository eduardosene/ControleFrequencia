<?php
	require_once('../conecta.php'); 

				$nomeProfessor=$_POST['tNomeProfessor'];
				$matriculaProfessor=$_POST['tMatriculaProfessor'];
				$emailProfessor=$_POST['tEmailProfessor'];
				$senhaProfessor=$_POST['tSenhaProfessor'];
				$redigitarProfessor=$_POST['tRedigitarProfessor'];

	//Validação nome do usuário
		
	//Inclute no banco
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
