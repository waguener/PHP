<!DOCTYPE html>
<html>
<head>
	<title>Simutec - Cadastro Concluído</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/padrao.css">
</head>
<div class="header">
	<h1 class="logo-cadastro"><a href="home.php"> <img src="assets/images/Logo.png"></a></h1>
</div>
<div class="conteudo">
	<div class="caixa">
		<?php
		$nome= $_POST ["nome"];
		$email= $_POST ["email"];
		$senha= $_POST ["senha"];

		$conexao = @mysql_connect("localhost","root");

		if (!$conexao)
			die("Erro de conxão com localhost, o seguinte erro ocorreu" .mysql_error());
		$banco =  @mysql_select_db("cadastro1",$conexao);

		if (!$banco) 
			die("Erro de conexão com banco de dados, o seguinte erro ocorreu".mysql_error());
		$sql_email_check = mysql_query(
			"SELECT COUNT(idnome) FROM cadastro1 WHERE email='{$email}'"
			);

		$eReg = @mysql_fetch_array($sql_email_check);
		$email_check = $eReg[0];

		if ($email_check > 0)
			echo "<strong>Desculpe</strong>: <br /><br />";

		if ($email_check > 0){
			echo "Este email já está sendo utilizado por outro usuário.<br /><br />";

		}else{
			echo "<strong>Parabéns</strong>: <br /><br />";
			echo "Cadastro realizado com sucesso. <br/> <br/>";

			$query = "INSERT INTO `cadastro1`(`nome`, `email`, `senha`)	VALUES( '$nome' , '$email'  , '$senha')";

			mysql_query ($query, $conexao);
		}
		?>
		<a href="home.php" class="button" >Entrar</a>
		<input type="button" class="voltar" name="voltar" value="Voltar" onClick="history.go(-1)">
	</div>
</div>
<body>
</body>
</html>

