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
		<h1>Cadastro do Turma(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<div class="formCrudImportar">
				<label for="cSelecioneTurma">Importar arquivo CSV </label>
				<input type="text" name="tSelecioneTurma" id="cSelecioneTurma" size="40" maxlength="40" placeholder="Importar arquivo" list="listaCoordenador" />
				<button class="btn" type="button">Arquivo</button>
				<p> OU </p>
		</div>
		<form class="formCrud" name="cadastroTurma" method="post" action="adicionaTurma.php?cadastradoSucesso">
			<div>
				<label for="cNomeCurso">Nome do Curso*</label> 
				<input required type="text" name="tNomeCurso" id="cNomeCurso" size="40" maxlength="40" placeholder="Nome do Curso"/>
			</div>
			<div>
			<label for="cCodigoOferta">Código da oferta*</label>
			<input required type="text" name="tCodigoOferta" id="cCodigoOferta" size="8" maxlength="8" placeholder="Código da Oferta" pattern="[0-9]+$"/>
			</div>
			<div>
			<label for="cCodigoTurma">Código da turma*</label>
			<input required type="text" name="tCodigoTurma" id="cCodigoTurma" size="8" maxlength="8" placeholder="Código da Turma"  pattern="[0-9]+$"/>
			</div>
			<div>
			<label for="cSala">Sala*</label>
			<input required type="text" name="tSala" id="cSala" size="40" maxlength="40" placeholder="Sala"/>
			</div>
			<div>
			<label for="cCarga">Carga horária*</label>
			<input required type="text" name="tCarga" id="cCarga" size="40" maxlength="40" placeholder="Carga horária"/>
			</div>
			<div>
			<label for="cCredito">Crédito*</label>
			<input required type="text" name="tCredito" id="cCredito" size="40" maxlength="40" placeholder="Crédito"/>
			</div>
			<div >
				<label for="cSelecionePeriodo">Selecione o período*</label>
				<input required type="text" name="tSelecionePeriodo" id="cSelecionePeriodo" size="40" maxlength="40" placeholder="Selecione o Período" list="listaPeriodo" />
				<datalist id="listaPeriodo">
					<option value="Matutino"></option>
					<option value="Vespertino"></option>
					<option value="Nortuno"></option>
				</datalist>
			</div>
			<div>
			<label for="cNomeDisciplina">Nome da disciplina*</label>
			<input required type="text" name="tNomeDisciplina" id="cNomeDisciplina" size="40" maxlength="40" placeholder="Nome da disciplina"/>
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
