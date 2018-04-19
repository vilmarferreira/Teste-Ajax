<html>
	<head>
		<title> Formulário simples com Ajax</title>
	</head>
	
	<body>
	<script src="validate-email.js"></script>
		<form id="formulario">
			<fieldset>
				<input type="text" id="nome" placeholder="Nome">
				<br/>
				<input type="text" id="email" placeholder="Email" onblur="validacaoEmail(formulario.email)">
				<div id="msgemail"></div>
				<br/>
				<input type="password" id="senha" placeholder="Senha">
				</br>
				<input type="submit" id="enviar" placeholder="Enviar">
				<input type="hidden" id="metodo", value="formulario">
				
			</fieldset>
		</form>
	<!-- JAVASCRIPT -->
	<script src="jquery-3.3.1.min.js"></script>
	<script src="formulario.js"></script>

	
	
	<!-- JAVASCRIPT -->
	</body>
</html>