<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Controle de Frequência</title>
		<link rel="stylesheet" type="text/css" href="../_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/telaInicial.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/crud.css"/>
		<script type="text/javascript" src="../_js/validacaoForm.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php include ("../conecta.php"); ?>
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Excluir do Professor(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<form class="formCrudSelecioneExcluir" method="POST" action="deletarProfessor.php?deletarSucesso">
			<div >
				<label for="cSelecioneProfessor">Selecione o Professor*</label>
				<input type="text" name="tSelecioneProfessor" id="cSelecioneProfessor" size="40" maxlength="40" placeholder="Selecione o Professor" list="listaProfessor" />
				<datalist id="listaProfessor">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT*FROM professor order by nomeProfessor ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['nomeProfessor']."'>".$dados['nomeProfessor']."</option>");}?> </datalist>

				<div class="captchaExcluir">
				<div class="g-recaptcha" data-sitekey="6Lf2HlgUAAAAACFkaTTuWnAZ2NPtBDTsD6ybRHvd"></div>
		</div>
		<div class="divBtnExcluir">
			<button class="btn" type="submit">Salvar</button>
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
 <!--js-->
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</body>
</html>
