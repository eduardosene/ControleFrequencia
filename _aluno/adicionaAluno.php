<?php
	require_once('../conecta.php'); 

	$nomeAluno=$_POST['tNomeAluno'];
	$matriculaAluno=$_POST['tMatriculaAluno'];
	$selecioneTurma=$_POST['tSelecioneTurma'];
	//Inclute no banco
	mysqli_query($conexao,"INSERT INTO aluno (matriculaAluno, nomeAluno) VALUES ('$matriculaAluno', '$nomeAluno')");

	mysqli_query($conexao,"INSERT INTO aluno_has_turma (aluno_matriculaAluno, turma_codigoTurma ) VALUES ('$matriculaAluno', '$selecioneTurma')");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso

if (isset($_GET['cadastradoSucesso'])){
    
    echo '<script type="text/javascript">
    alert("Cadastrado com sucesso!");
    location.href="cadastroAluno.php";    
    </script>';
	}

		

?>
