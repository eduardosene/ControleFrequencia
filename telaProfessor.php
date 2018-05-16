<?php
	require_once('conecta.php'); 
	require_once('function.php'); 
	verificaUsuarioTela();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Controle de Frequência</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="_css/telaInicial.css"/>
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Controle de Frequência</h1>
		<img class="logoUdf" src="_imagens\logo-UDF.png"/>
	</header>
	<section class="corpo corpoProfessor">
		<img class="iconePauta" src="_imagens\pauta.png"/>
		<form class="form">
			<div class="sectionTitulo">
					<h1>Pauta do mês</h1>
			</div>
			<div class="sectionConsultar">
				<input type="text" name="tConsultarTurma" class="cConsultar" size="80" maxlength="80" placeholder="Seleciona turma" list="listaTurma"/>
				<datalist id="listaTurma">
					<option value="Turma 01 "></option>
					<option value="Turma 02 "></option>
					<option value="Turma 03"></option>
				</datalist>
				<button class="btnConsultar" type="button">Consultar</button>
			</div>
			<div class="sectionTitulo">
					<h1>Relatório</h1>
			</div>
			<div class="sectionConsultar">
				<input type="text" name="tConsultarAnoRel" class="cConsultarAnoRel" size="4" maxlength="4" placeholder="Ano" list="listaAno" />
					<datalist id="listaAno">
						<option value="2016"></option>
						<option value="2017"></option>
						<option value="2018 "></option>
						<option value="2019"></option>
						<option value="2020"></option>
					</datalist>
				<input type="text" name="tConsultarMesRel" class="cConsultarMesRel" size="8" maxlength="8" placeholder="Mês" list="listaMes" />
					<datalist id="listaMes">
						<option value="Janeiro"></option>
						<option value="Fevereiro"></option>
						<option value="Março"></option>
						<option value="Abril"></option>
						<option value="Maio"></option>
						<option value="Junho"></option>
						<option value="Julho"></option>
						<option value="Agosto"></option>
						<option value="Setembro"></option>
						<option value="Outubro"></option>
						<option value="Novembro"></option>
						<option value="Dezembro"></option>
					</datalist>
				<input type="text" name="tConsultarTurmaRel" class="cConsultarTurmaRel" size="40" maxlength="40" placeholder="Seleciona turma" list="listaTurma"/>
					<datalist id="listaTurma">
						<option value="Turma 01 "></option>
						<option value="Turma 02 "></option>
						<option value="Turma 03"></option>
					</datalist>
				<button class="btnConsultarRel" type="button">Consultar</button>
			</div>
		</form>
		<div class="divBtnSairProfessor">
			<a href="userLogout.php" class="btnSair">Sair</a>
		</div>
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
