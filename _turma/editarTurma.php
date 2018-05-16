<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Controle de Frequência</title>
		<link rel="stylesheet" type="text/css" href="../_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/telaInicial.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/crud.css"/>
		<?php 
		require_once ("../conecta.php"); 
		require_once ('../function.php'); 
		verificaUsuario();
		?>
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Editar da Turma</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">

		<form class="formCrudSelecioneEditar" method="get" action="editarTurma.php">
			<div >
				<label for="cSelecioneTurma">Selecione turma*</label>
				<input type="text" name="tSelecioneTurma" id="cSelecioneTurma" size="40" maxlength="40" placeholder="Selecione o turma" list="listaTurma" />
				<datalist id="listaTurma">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT*FROM turma order by codigoTurma ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['codigoTurma']."'>".$dados['codigoTurma']."</option>");}?> </datalist>
			</div>	
				<div class="divBtn">
				<center><button class="btn" type="submit">Consultar</button></center>
				</div>
		</form>
		<?php 
			$codigoTurma=filter_input(INPUT_GET,'tSelecioneTurma');
			$consulta=mysqli_query($conexao,"SELECT * FROM turma WHERE codigoTurma = '$codigoTurma'");
			$linha=mysqli_fetch_assoc($consulta);
			$nomeCurso=$linha['nomeCurso']?$linha['nomeCurso']:"";
			$codigoOferta= $linha['codigoOferta']?$linha['codigoOferta']:"";
			$sala=$linha['sala']?$linha['sala']:"";
			$carga=$linha['carga']?$linha['carga']:"";
			$credito=$linha['credito']?$linha['credito']:"";
			$selecionePeriodo=$linha['selecionePeriodo']?$linha['selecionePeriodo']:"";
			$nomeDisciplina=$linha['nomeDisciplina']?$linha['nomeDisciplina']:"";
		?>

		<form class="formCrud" name="cadastroProfessor" method="post" action="alterarTurma.php?alterarSucesso">
			<div>
				<label for="cNomeCurso">Nome do Curso*</label> 
				<input required type="text" name="tNomeCurso" id="cNomeCurso" size="40" maxlength="80" placeholder="Nome do Curso" value="<?php echo $nomeCurso ?>"/>
			</div>
			<div>
			<label for="cCodigoOferta">Código da oferta*</label>
			<input required type="text" name="tCodigoOferta" id="cCodigoOferta" size="40" maxlength="10" placeholder="Código da Oferta" value="<?php echo $codigoOferta ?>"/>
			</div>
			<div>
			<label for="cCodigoTurma">Código da turma*</label>
			<input required type="text" name="tCodigoTurma" id="cCodigoTurma" size="8" maxlength="8" placeholder="Código da Turma"  pattern="[0-9]+$" value="<?php echo $codigoTurma ?>"/>
			</div>
			<div>
			<label for="cSala">Sala</label>
			<input type="text" name="tSala" id="cSala" size="40" maxlength="10" placeholder="Sala" value="<?php echo $sala ?>"/>
			</div>
			<div>
			<label for="cCarga">Carga horária</label>
			<input type="text" name="tCarga" id="cCarga" size="40" maxlength="10" placeholder="Carga horária" value="<?php echo $carga ?>"/>
			</div>
			<div>
			<label for="cCredito">Crédito</label>
			<input type="text" name="tCredito" id="cCredito" size="40" maxlength="10" placeholder="Crédito" value="<?php echo $credito ?>"/>
			</div>
			<div >
				<label for="cSelecionePeriodo">Selecione o período</label>
				<input type="text" name="tSelecionePeriodo" id="cSelecionePeriodo" size="40" maxlength="40" placeholder="Selecione o Período" list="listaPeriodo" value="<?php echo $selecionePeriodo ?>" />
				<datalist id="listaPeriodo">
					<option value="Matutino"></option>
					<option value="Vespertino"></option>
					<option value="Nortuno"></option>
				</datalist>
			</div>
			<div>
			<label for="cNomeDisciplina">Nome da disciplina*</label>
			<input required type="text" name="tNomeDisciplina" id="cNomeDisciplina" size="40" maxlength="10" placeholder="Nome da disciplina" value="<?php echo $nomeDisciplina ?>"/>
			</div>

			<div class="divBtn">
			<button class="btn" type="submit">Salvar</button>
			<button class="btnCancelar"><a href="../telaCoordenador.php">Cancelar</a></button> 
			</div>

		</form>
	</section>
	<footer class="rodapeLogin">
		<p>
			Grupo IV - Nortuno<br/>
			Curso de Análise e Desenvolvimento de Sistemas<br/>
			Copyright &copy; 2018 - Todos os direitos Reservados
		</p>
	</footer>
</div>
</body>
</html>
