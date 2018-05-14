<?php
	require_once('../conecta.php'); 

	$coordenacao=$_POST['tCoordenacao'];
	$nomeCoordenador=$_POST['tNomeCoordenador'];
	$usuarioCoordenador=$_POST['tUsuarioCoordenador'];
	$matriculaCoordenador=$_POST['tMatriculaCoordenador'];
	$emailCoordenador=$_POST['tEmailCoordenador'];
	$senhaCoordenador=$_POST['tSenhaCoordenador'];
	$redigitarCoordenador=$_POST['tRedigitarCoordenador'];
	//Validação nome do usuário
			$val=true; 
			$consultaC = mysqli_query($conexao,"SELECT * FROM coordenador WHERE usuarioCoordenador='$usuarioCoordenador'");
			$rowC = mysqli_num_rows($consultaC);
			
			$consultaP = mysqli_query($conexao,"SELECT * FROM professor WHERE usuarioProfessor='$usuarioCoordenador'");
			$rowP = mysqli_num_rows($consultaP);
			if($rowC >= 1 || $rowP >= 1 ){
				do{
					$val = false;
				echo '<script type="text/javascript">
				    alert("Nome de usuário já existente!");
				    location.href="javascript:history.go(-1)";    
				    </script>';
				   } while ($val == true);
			}
	//Inclute no banco
	mysqli_query($conexao,"INSERT INTO coordenador (coordenacao, nomeCoordenador, usuarioCoordenador, matriculaCoordenador, emailCoordenador, senhaCoordenador, redigitarCoordenador) VALUES ('$coordenacao', '$nomeCoordenador', '$usuarioCoordenador', '$matriculaCoordenador', '$emailCoordenador', '$senhaCoordenador', '$redigitarCoordenador' )");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['cadastradoSucesso']) && ($val == true)) {
    
    echo '<script type="text/javascript">
    alert("Cadastrado com sucesso!");
    location.href="cadastroCoordenador.php";    
    </script>';
	}


		

?>
