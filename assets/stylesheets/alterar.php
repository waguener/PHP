<?php
session_start();
$conexao = @mysql_connect("127.0.0.1", "root") or die ("Sem conexão com o servidor");
$select = @mysql_select_db("cadastro1") or die("Sem acesso ao DB, Entre em contato com o Administrador, amaralmatta@gmail.com");

?>
<!DOCTYPE html>
<html>
<head>
	<title>alterar dados</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/alteracao.css">
</head>
<body>
	<div class="conteudo">
			<h2 align="center">Alterando sua senha. </h2>
			<form method="post" action="novos_dados.php" class="recuperar">

				Confirme o seu e-mail &nbsp<input type="email" name="email" id="email" required="" placeholder="Digite o e-mail cadastrado." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
				Nova Senha &nbsp<input class="text" type="password" id="senha" name="senha" maxlength="6" placeholder="Nova senha" title="Digite aqui sua nova senha"><br><br>


				<input class="button" type="submit" name="alterar" value="Alterar">
				<input class="button" type="reset" name="limpar" value="Limpar">
			</form>
	</div>
</body>
</html>
