<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Controle de Frequência</title>
		<link rel="stylesheet" type="text/css" href="../_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/telaInicial.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/crud.css"/>
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Cadastro do Aluno(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<div class="formCrudImportar">
				<label for="cSelecioneTurmaAluno">Importar arquivo CSV </label>
				<input type="text" name="tSelecioneAluno" id="cSelecioneAluno" size="40" maxlength="40" placeholder="Importar arquivo" list="listaCoordenador" />
				<button class="btn" type="button">Arquivo</button>
				<p> OU </p>
		</div>
		<form class="formCrud" name="cadastroAluno" method="post" action="adicionaAluno.php?cadastradoSucesso" >
			<div>
				<label for="cNomeAluno">Nome completo*</label> 
				<input required type="text" name="tNomeAluno" id="cNomeAluno" size="40" maxlength="40" placeholder="Nome Completo"/>
			</div>
			<div>
			<label for="cMatriculaAluno">RGM*</label>
			<input required type="text" name="tMatriculaAluno" id="cMatriculaAluno" size="8" maxlength="8" placeholder="RGM" pattern="[0-9]+$"/>
			</div>
			<div >
				<label for="cSelecioneTurma">Selecione a Turma*</label>
				<input required type="text" name="tSelecioneTurma" id="cSelecioneTurma" size="40" maxlength="40" placeholder="Selecione a Turma" list="listaTurma" />
				<datalist id="listaTurma">
					<option value="Turma 01"></option>
					<option value="Turma 02"></option>
					<option value="Turma 03"></option>
				</datalist>
			</div>

			<div class="divBtn">
			<button class="btn" type="submit">Criar Conta</button>
			<button class="btnCancelar" type="button">Cancelar</button>
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
