<?php
	require_once('../conecta.php'); 

	$nomeProfessor=$_POST['tNomeProfessor'];
	$usuarioProfessor=$_POST['tUsuarioProfessor'];
	$matriculaProfessor=$_POST['tMatriculaProfessor'];
	$emailProfessor=$_POST['tEmailProfessor'];
	$senhaProfessor=$_POST['tSenhaProfessor'];
	$redigitarProfessor=$_POST['tRedigitarProfessor'];

	//Validação nome do usuário
			$val=true; 
			$consultaP = mysqli_query($conexao,"SELECT * FROM professor WHERE usuarioProfessor='$usuarioProfessor'");
			$rowP = mysqli_num_rows($consultaP);

			$consultaC = mysqli_query($conexao,"SELECT * FROM coordenador WHERE usuarioCoordenador='$usuarioProfessor'");
			$rowC = mysqli_num_rows($consultaC);
			if($rowP >= 1 || $rowC >= 1 ){
				do{
					$val = false;
				echo '<script type="text/javascript">
				    alert("Nome de usuário já existente!");
				    location.href="javascript:history.go(-1)";    
				    </script>';
				   } while ($val == true);
			}
	//Inclute no banco
	mysqli_query($conexao,"INSERT INTO professor (nomeProfessor, usuarioProfessor, matriculaProfessor, emailProfessor, senhaProfessor, redigitarProfessor) VALUES ('$nomeProfessor', '$usuarioProfessor', '$matriculaProfessor', '$emailProfessor', '$senhaProfessor', '$redigitarProfessor')");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['cadastradoSucesso']) && ($val == true)) {
    
    echo '<script type="text/javascript">
    alert("Cadastrado com sucesso!");
    location.href="cadastroProfessor.php";    
    </script>';
	}


		

?>
