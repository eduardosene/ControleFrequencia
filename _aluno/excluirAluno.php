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
		<?php 
		require_once ("../conecta.php"); 
		require_once ('../function.php'); 
		verificaUsuario();
		?>
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Excluir do Aluno(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
			<form class="formCrudSelecioneExcluir" method="post" action="deletarAluno.php?deletarSucesso">
			<div >
				<label for="cSelecioneAluno">Selecione o Aluno*</label>
				<input type="text" name="tSelecioneAluno" id="cSelecioneAluno" size="40" maxlength="40" placeholder="Selecione o Aluno" list="listaAluno" />
				<datalist id="listaAluno">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT * FROM aluno order by nomeAluno ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['nomeAluno']."'>".$dados['nomeAluno']."</option>");}?> </datalist>
			</div>		
		<?php 

			$nomeAluno=filter_input(INPUT_GET,'tSelecioneAluno');
			$consulta=mysqli_query($conexao,"SELECT * FROM aluno WHERE nomeAluno = '$nomeAluno'");
			$linha=mysqli_fetch_assoc($consulta);
			$matriculaAluno= $linha['matriculaAluno']?$linha['matriculaAluno']:"";
		?>

		<div class="captchaExcluir">
				<div class="g-recaptcha" data-sitekey="6Lf2HlgUAAAAACFkaTTuWnAZ2NPtBDTsD6ybRHvd"></div>
		</div>

			<div class="divBtnExcluir">
			<button class="btn" type="submit">Excluir</button>
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
 <!--js-->
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</body>
</html>
