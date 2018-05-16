<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Controle de Frequência</title>
		<link rel="stylesheet" type="text/css" href="../_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/telaInicial.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/crud.css"
		<?php 
		require_once ("../conecta.php"); 
		require_once ('../function.php'); 
		verificaUsuario();
		?>
		/>
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Editar do Aluno(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<form class="formCrudSelecioneEditar">
			<form class="formCrudSelecioneEditar" method="get" action="editarAluno.php">
			<div >
				<label for="cSelecioneAluno">Selecione o Aluno*</label>
				<input type="text" name="tSelecioneAluno" id="cSelecioneAluno" size="40" maxlength="40" placeholder="Selecione o Aluno" list="listaAluno" />
				<datalist id="listaAluno">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT*FROM aluno order by nomeAluno ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['nomeAluno']."'>".$dados['nomeAluno']."</option>");}?> </datalist>
			</div>	
				<div class="divBtn">
				<center><button class="btn" type="submit">Consultar</button></center>
				</div>
		</form>
		<?php 

			$nomeAluno=filter_input(INPUT_GET,'tSelecioneAluno');
			$consulta=mysqli_query($conexao,"SELECT a.matriculaAluno, a.nomeAluno, t.codigoTurma FROM aluno a JOIN aluno_has_turma aht ON a.matriculaAluno = aht.aluno_matriculaAluno JOIN turma t ON t.codigoTurma = aht.turma_codigoTurma WHERE a.nomeAluno='$nomeAluno';");
			$linha=mysqli_fetch_assoc($consulta);
			$matriculaAluno= $linha['matriculaAluno']?$linha['matriculaAluno']:"";
			$codigoTurma= $linha['codigoTurma']?$linha['codigoTurma']:"";
			
		?>

		<form class="formCrud" name="editarAluno" method="post" action="alterarAluno.php?alterarSucesso">
			<div>
				<label for="cNomeAluno">Nome completo</label> 
				<input required type="text" name="tNomeAluno" id="cNomeAluno" size="40" maxlength="80" placeholder="Nome Completo" value="<?php echo $nomeAluno ?>"/>
			</div>
			<div>
			<label for="cMatriculaAluno">RGM</label>
			<input required type="text" name="tMatriculaAluno" id="cMatriculaAluno" size="40" maxlength="10" placeholder="RGM" pattern="[0-9]+$" value="<?php echo $matriculaAluno?>"/>
			</div>
			<div >
				<label for="cSelecioneTurma">Selecione turma*</label>
				<input type="text" name="tSelecioneTurma" id="cSelecioneTurma" size="40" maxlength="40" placeholder="Selecione o turma" value="<?php echo $codigoTurma?>" list="listaTurma" />
				<datalist id="listaTurma">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT*FROM turma order by codigoTurma ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['codigoTurma']."'>".$dados['codigoTurma']."</option>");}?> </datalist>
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
