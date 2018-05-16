<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Controle de Frequência</title>
		<link rel="stylesheet" type="text/css" href="_css/pauta.css"/>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/crud.css"/>
		<?php require_once ("conecta.php"); ?>
		
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Pauta de Frequência Mensal</h1>
		<img class="logoUdf" src="_imagens\logo-UDF.png"/>
	</header>
	<section class="corpoPauta">
		<form class="formCrudSelecioneEditar" method="get" action="telaPauta.php">
			<div >
				<label for="cSelecioneTurma">Selecione turma*</label>
				<input type="text" name="tSelecioneTurma" id="cSelecioneTurma" size="40" maxlength="40" placeholder="Selecione o turma" list="listaTurma" />
				<datalist id="listaTurma">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT*FROM turma order by codigoTurma ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['codigoTurma']."'>".$dados['codigoTurma']."</option>");}?> </datalist>
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
		<table class="cabecalhoPauta">
			<tr>
				<td><b>Curso:</b> <?php echo $nomeCurso ?></td>
				<td><b>Oferta:</b> <?php echo $codigoOferta ?> </td>
				<td><b>Turma:</b> <?php echo $codigoTurma ?></td>
				<td><b>Sala:</b> <?php echo $sala ?></td>
			</tr>
			<tr>
				<td><b>Carga Horária/Crédito:</b> <?php echo "$carga/$credito" ?></td>
				<td><b>Período:</b><?php echo $selecionePeriodo ?></td>
				<td colspan="2" ><b>Mês/Ano:</b> <?php echo "Maio/2018" ?></td>
			</tr>
			<tr>
				<td colspan="4" ><b>Discíplina:</b> <?php echo $nomeDisciplina ?></td>
			</tr>
			<tr>
				<td colspan="4" ><b>Professor(a):</b> Eduardo Sene Barbosa</td>
			</tr>
		</table>
		<table  class="dataPauta">
			<tr>
				<td rowspan="2" style="width: 15%"><b>R.G.M</b></td>
				<td rowspan="2" style="width: 40%"><b>Nome</b></td>
				<td rowspan="2" style="width: 10%"><b>Total de faltas</b></td>
				<td colspan="10"><b>Data da aula</b></td>
			</tr>
			<tr>
				<td>10</td>
				<td>10</td>
				<td>10</td>
				<td>10</td>
				<td>10</td>
				<td>10</td>
				<td>10</td>
				<td>10</td>
				<td>10</td>
				<td>10</td>
			</tr>
		</table>
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
