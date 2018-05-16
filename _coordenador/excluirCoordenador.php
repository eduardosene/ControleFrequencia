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
		<h1>Excluir do Coordenador(a)</h1>
		<img class="logoUdf" src="../_imagens/logo-UDF.png"/>
	</header>
	<section class="corpo">
		<form class="formCrudSelecioneExcluir" method="post" action="deletarCoordenador.php?deletarSucesso">
			<div >
				<label for="cSelecioneCoordenador">Selecione o Coordenador*</label>
				<input required type="text" name="tSelecioneCoordenador" id="cSelecioneCoordenador" size="40" maxlength="40" placeholder="Selecione o Coordenador" list="listaCoordenador" />
				<datalist id="listaCoordenador">
				<?php 
				 $consulta=mysqli_query($conexao,"SELECT * FROM coordenador order by nomeCoordenador ASC");
				 while ($dados = mysqli_fetch_array($consulta)) {echo("<option value='".$dados['nomeCoordenador']."'>".$dados['nomeCoordenador']."</option>");}?> 
				</datalist>
			</div>	
		
			<div class="captchaExcluir">
				<div class="g-recaptcha" data-sitekey="6Lf2HlgUAAAAACFkaTTuWnAZ2NPtBDTsD6ybRHvd"></div>
			</div>
		<div class="divBtnExcluir">
			<button class="btn" type="sumbit">Excluir</button>
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
