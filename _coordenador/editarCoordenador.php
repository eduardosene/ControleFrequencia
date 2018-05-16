<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8"/>
		<title>Controle de Frequência</title>
		<link rel="stylesheet" type="text/css" href="../_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/telaInicial.css"/>
		<link rel="stylesheet" type="text/css" href="../_css/crud.css"/>
		<script type="text/javascript">
			 function validarSenhaCoordenador(){

	        NovaSenha = document.cadastroCoordenador.tSenhaCoordenador.value;
	        CNovaSenha = document.cadastroCoordenador.tRedigitarCoordenador.value;
	        if (NovaSenha != CNovaSenha){ 
	             alert("SENHAS INCORRETAS! \nFAVOR DIGITAR SENHAS IGUAIS");
	             return false;
        }
        return true;
 }
		</script>
		<?php 
		require_once ("../conecta.php"); 
		require_once ('../function.php'); 
		verificaUsuario();
		?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="interface">
	<header class="cabecalho">
		<h1>Editar do Coordenador(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<!-- Selecione -->
		<form class="formCrudSelecioneEditar" method="get" action="editarCoordenador.php">
			<div >
				<label for="cSelecioneCoordenador">Selecione o Coordenador*</label>
				<input type="text" name="tSelecioneCoordenador" id="cSelecioneCoordenador" size="40" maxlength="40" placeholder="Selecione o Coordenador" list="listaCoordenador" />
				<datalist id="listaCoordenador">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT * FROM coordenador order by nomeCoordenador ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['nomeCoordenador']."'>".$dados['nomeCoordenador']."</option>");}?> </datalist>
			</div>	
				<div class="divBtn">
				<center><button class="btn" type="submit">Consultar</button></center>
				</div>
		</form>
		<?php 

			$nomeCoordenador=filter_input(INPUT_GET,'tSelecioneCoordenador');
			$consulta=mysqli_query($conexao,"SELECT * FROM coordenador WHERE nomeCoordenador = '$nomeCoordenador'");
			$linha=mysqli_fetch_assoc($consulta);

			$coordenacao=$linha['coordenacao']?$linha['coordenacao']:"";
			$matriculaCoordenador=$linha['matriculaCoordenador']?$linha['matriculaCoordenador']:"";
			$emailCoordenador=$linha['emailCoordenador']?$linha['emailCoordenador']:"";
			$senhaCoordenador=$linha['senhaCoordenador']?$linha['senhaCoordenador']:"";
			$redigitarCoordenador=$linha['redigitarCoordenador']?$linha['redigitarCoordenador']:"";
		?>

		<form class="formCrud" name="editarCoordenador" method="post" action="alterarCoordenador.php?alterarSucesso" onSubmit="return validarSenhaCoordenador();">
			<div>
				<label for="cCoordenacao">Coordenação*</label>
				<input type="text" name="tCoordenacao" id="cCoordenacao" size="40" maxlength="40" placeholder="Nome Coordenação" value="<?php echo $coordenacao ?>"/>
			</div>
			<div>
				<label for="cNomeCoordenador">Nome completo*</label> 
				<input type="text" name="tNomeCoordenador" id="cNomeCoordenador" size="40" maxlength="40" placeholder="Nome Completo" value="<?php echo $nomeCoordenador ?>" />
			</div>
			<div>
			<label for="cMatriculaCoordenador">Matrícula*</label>
			<input type="text" name="tMatriculaCoordenador" id="cMatriculaCoordenador" size="8" maxlength="8" placeholder="Matrícula" pattern="[0-9]+$" value="<?php echo $matriculaCoordenador ?>"/>
			</div>
			<div>
				<label for="cEmailCoordenador">E-mail*</label>
				<input type="email" name="tEmailCoordenador" id="cEmailCoordenador" size="40" maxlength="40" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $emailCoordenador ?>" />
			</div>
			<div>
				<label for="cSenhaCoordenador">Senha*</label>
				<input type="password" name="tSenhaCoordenador" id="cSenhaCoordenador" size="40" maxlength="40" placeholder="Senha" value="<?php echo $senhaCoordenador ?>" />
			</div>
			<div>
				<label for="cRedigitarSenhaCoordenador">Redigitar a senha*</label>
				<input type="password" name="tRedigitarCoordenador" id="cRedigitarSenhaCoordenador" size="40" maxlength="40" placeholder="Senha" value="<?php echo $redigitarCoordenador ?>" />
			</div>

			<div class="g-recaptcha" data-sitekey="6Lf2HlgUAAAAACFkaTTuWnAZ2NPtBDTsD6ybRHvd"></div>

			<div class="divBtn">
			<button class="btn" type="submit">Alterar</button>
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
