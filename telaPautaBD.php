<?php
	require_once('../conecta.php'); 

	$nomeCurso=$_POST['tNomeCurso'];
	$codigoOferta=$_POST['tCodigoOferta'];
	$codigoTurma=$_POST['tCodigoTurma'];
	$sala=$_POST['tSala'];
	$carga=$_POST['tCarga'];
	$credito=$_POST['tCredito'];
	$selecionePeriodo=$_POST['tSelecionePeriodo'];
	$nomeDisciplina=$_POST['tNomeDisciplina'];
	//Validação codigo da turma
			$val=true; 
			$codigoTurmaV = mysqli_query($conexao,"SELECT * FROM turma WHERE codigoTurma='$codigoTurma'");
			$codigoTurmaRow = mysqli_num_rows($codigoTurmaV);

			$codigoOfertaV = mysqli_query($conexao,"SELECT * FROM turma WHERE codigoOferta='$codigoOferta'");
			$codigoOfertaRow = mysqli_num_rows($codigoOfertaV);
			if($codigoTurmaRow >= 1 || $codigoOfertaRow >= 1 ){
				do{
					$val = false;
				echo '<script type="text/javascript">
				    alert("Codigo e/ou Turma já existente!");
				    location.href="javascript:history.go(-1)";    
				    </script>';
				   } while ($val == true);
			}

	//Inclute no banco
	mysqli_query($conexao,"INSERT INTO turma (codigoTurma, sala, nomeCurso, codigoOferta, carga, credito, selecionePeriodo, nomeDisciplina) VALUES ('$codigoTurma', '$sala', '$nomeCurso', '$codigoOferta', '$carga', '$credito', '$selecionePeriodo', '$nomeDisciplina')");

	mysqli_close($conexao);

	//Mensagem de cadastrado com sucesso
if (isset($_GET['cadastradoSucesso']) && ($val == true)) {
    
    echo '<script type="text/javascript">
    alert("Cadastrado com sucesso!");
    location.href="cadastroTurma.php";    
    </script>';
	}


		

?>
