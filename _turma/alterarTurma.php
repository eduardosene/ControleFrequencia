<?php
	require_once('../conecta.php'); 
				$codigoTurma=$_POST['tCodigoTurma'];
				$nomeCurso=$_POST['tNomeCurso'];
				$codigoOferta=$_POST['tCodigoOferta'];
				$sala=$_POST['tSala'];
				$carga=$_POST['tCarga'];
				$credito=$_POST['tCredito'];
				$selecionePeriodo=$_POST['tSelecionePeriodo'];
				$nomeDisciplina=$_POST['tNomeDisciplina'];


	//Validação nome da matricula
			$val=true; 

			$consulta = mysqli_query($conexao,"SELECT * FROM turma WHERE codigoTurma='$codigoTurma'");
			$row = mysqli_num_rows($consulta);
			if($row != 1 ){
				do{
					$val = false;
				echo '<script type="text/javascript">
				    alert("Não pode alterar o Codigo da Turma!");
				    location.href="javascript:history.go(-1)";    
				    </script>';
				   } while ($val == true);
			}

	//Inclute no banco
	mysqli_query($conexao,"UPDATE turma SET sala='$sala', nomeCurso='$nomeCurso', codigoOferta='$codigoOferta', carga='$carga', credito='$credito', selecionePeriodo='$selecionePeriodo', nomeDisciplina='$nomeDisciplina' WHERE codigoTurma = '$codigoTurma'");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso

if (isset($_GET['alterarSucesso']) && ($val == true)) {
    
    echo '<script type="text/javascript">
    alert("Alterado com sucesso!");
    location.href="editarTurma.php";    
    </script>';
	}


		

?>
