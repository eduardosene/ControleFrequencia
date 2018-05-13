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
		<h1>Editar do Professor(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<!-- Selecione -->
		<form class="formCrudSelecioneEditar" method="get" action="editarProfessor.php">
			<div >
				<label for="cSelecioneProfessor">Selecione o Professor*</label>
				<input type="text" name="tSelecioneProfessor" id="cSelecioneProfessor" size="40" maxlength="40" placeholder="Selecione o Professor" list="listaProfessor" />
				<datalist id="listaProfessor">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT*FROM professor order by nomeProfessor ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['nomeProfessor']."'>".$dados['nomeProfessor']."</option>");}?> </datalist>
			</div>	
				<div class="divBtn">
				<center><button class="btn" type="submit">Consultar</button></center>
				</div>
		</form>
		<?php 

			$nomeProfessor=filter_input(INPUT_GET,'tSelecioneProfessor');
			$consulta=mysqli_query($conexao,"SELECT * FROM professor WHERE nomeProfessor = '$nomeProfessor'");
			$linha=mysqli_fetch_assoc($consulta);
			$usuarioProfessor=$linha['usuarioProfessor']?$linha['usuarioProfessor']:"";
			$matriculaProfessor= $linha['matriculaProfessor']?$linha['matriculaProfessor']:"";
			$emailProfessor=$linha['emailProfessor']?$linha['emailProfessor']:"";
			$senhaProfessor=$linha['senhaProfessor']?$linha['senhaProfessor']:"";
			$redigitarProfessor=$linha['redigitarProfessor']?$linha['redigitarProfessor']:"";
		?>

		<form class="formCrud" name="cadastroProfessor" method="post" action="alterarProfessor.php?alterarSucesso" onSubmit="return validarSenha()">
			<div>
				<label for="cNomeProfessor">Nome completo*</label> 
				<input required type="text" name="tNomeProfessor" id="cNomeProfessor" size="40" maxlength="80" placeholder="Nome Completo" value="<?php echo $nomeProfessor ?>" />
			</div>
			
			<div>
			<label for="cMatriculaProfessor">Matrícula*</label>
			<input required type="text" name="tMatriculaProfessor" id="cMatriculaProfessor" size="8" maxlength="8" placeholder="Matrícula" pattern="[0-9]+$" value="<?php echo $matriculaProfessor ?>" />
			</div>
			<div>
				<label for="cEmailProfessor">E-mail*</label>
				<input required type="email" name="tEmailProfessor" id="cEmailProfessor" size="40" maxlength="40" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $emailProfessor ?>" />
			</div>
			<div>
				<label for="cSenhaProfessor">Senha*</label>
				<input required type="password" name="tSenhaProfessor" id="cSenhaProfessor" size="40" maxlength="40" placeholder="Senha" value="<?php echo $senhaProfessor ?>"/>
			</div>
			<div>
				<label for="cRedigitarSenhaProfessor">Redigitar a senha*</label>
				<input required type="password" name="tRedigitarProfessor" id="cRedigitarSenhaProfessor" size="40" maxlength="40" placeholder="Senha" value="<?php echo $redigitarProfessor ?>"/>
			</div>

			<div class="g-recaptcha" data-sitekey="6Lf2HlgUAAAAACFkaTTuWnAZ2NPtBDTsD6ybRHvd"></div>


			<div class="divBtn">
			<button class="btn" type="submit">Editar Conta</button>
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
