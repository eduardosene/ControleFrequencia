<?php
	require_once('../conecta.php'); 

				$nomeAluno=$_POST['tNomeAluno'];
				$matriculaAluno=$_POST['tMatriculaAluno'];
				$selecioneTurma=$_POST['tSelecioneTurma'];

				//Validação nome da matricula
			$val=true; 

			$consulta = mysqli_query($conexao,"SELECT * FROM aluno WHERE matriculaAluno='$matriculaAluno'");
			$row = mysqli_num_rows($consulta);
			if($row != 1 ){
				do{
					$val = false;
				echo '<script type="text/javascript">
				    alert("Não pode alterar o RGM!");
				    location.href="javascript:history.go(-1)";    
				    </script>';
				   } while ($val == true);
			}

		
	//Inclute no banco
	mysqli_query($conexao,"UPDATE aluno SET nomeAluno='$nomeAluno' WHERE matriculaAluno='$matriculaAluno'");

	$consulta=mysqli_query($conexao,"SELECT t.codigoTurma FROM aluno a JOIN aluno_has_turma aht ON a.matriculaAluno = aht.aluno_matriculaAluno JOIN turma t ON t.codigoTurma = aht.turma_codigoTurma WHERE a.nomeAluno='$nomeAluno';");
	$linha=mysqli_fetch_assoc($consulta);
	$codigoTurma = $linha['codigoTurma']?$linha['codigoTurma']:"";
	if ($codigoTurma != $selecioneTurma){

	mysqli_query($conexao,"UPDATE aluno_has_turma SET turma_codigoTurma='$selecioneTurma' WHERE aluno_matriculaAluno='$matriculaAluno'");

	}


	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['alterarSucesso']) && ($val == true)) {
    
    echo '<script type="text/javascript">
    alert("Alterado com sucesso!");
    location.href="editarAluno.php";    
    </script>';
	}

		

?>
