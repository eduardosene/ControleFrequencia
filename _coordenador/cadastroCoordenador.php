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
		<h1>Cadastro do Coordenador(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<form class="formCrud" name="cadastroCoordenador" method="post" action="adicionaCoordenador.php?cadastradoSucesso" onSubmit="return validarSenhaCoordenador();">
			<div>
				<label for="cCoordenacao">Coordenação*</label>
				<input type="text" name="tCoordenacao" id="cCoordenacao" size="40" maxlength="40" placeholder="Nome Coordenação"/>
			</div>
			<div>
				<label for="cNomeCoordenador">Nome completo*</label> 
				<input type="text" name="tNomeCoordenador" id="cNomeCoordenador" size="40" maxlength="40" placeholder="Nome Completo"/>
			</div>
			<div>
				<label for="cUsuarioCoordenador">Nome de usuário*</label>
				<input type="text" name="tUsuarioCoordenador" id="cUsuarioCoordenador" size="40" maxlength="40" placeholder="Nome de usuário"/>
			</div>
			<div>
			<label for="cMatriculaCoordenador">Matrícula*</label>
			<input type="text" name="tMatriculaCoordenador" id="cMatriculaCoordenador" size="8" maxlength="8" placeholder="Matrícula" pattern="[0-9]+$"/>
			</div>
			<div>
				<label for="cEmailCoordenador">E-mail*</label>
				<input type="email" name="tEmailCoordenador" id="cEmailCoordenador" size="40" maxlength="40" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
			</div>
			<div>
				<label for="cSenhaCoordenador">Senha*</label>
				<input type="password" name="tSenhaCoordenador" id="cSenhaCoordenador" size="40" maxlength="40" placeholder="Senha" />
			</div>
			<div>
				<label for="cRedigitarSenhaCoordenador">Redigitar a senha*</label>
				<input type="password" name="tRedigitarCoordenador" id="cRedigitarSenhaCoordenador" size="40" maxlength="40" placeholder="Senha" />
			</div>

			<div class="g-recaptcha" data-sitekey="6Lf2HlgUAAAAACFkaTTuWnAZ2NPtBDTsD6ybRHvd"></div>

			<div class="divBtn">
			<button class="btn" type="submit">Criar Conta</button>
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
