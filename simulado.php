<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simutec - Simulado</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/estilo_simulado.css">
	<script language=JavaScript>
		<!-- begin
		var sHors = "0"+0; 
		var sMins = "0"+0;
		var sSecs = 5;
		function getSecs(){
			sSecs++;
			if(sSecs==60){sSecs=0;sMins++;
		    if(sMins<=9)sMins="0"+sMins;
		    }
			if(sMins==60){sMins="0"+0;sHors++;
		    if(sHors<=9)sHors="0"+sHors;
			}
			if(sSecs<=9)sSecs="0"+sSecs;
		clock1.innerHTML=sMins+"<font color=#000000>:</font>"+sSecs;
		    setTimeout('getSecs()',1000);

			}
		//-->
</SCRIPT>
</head>
<body>
	<div class="header">
			<h1><a href="home.php"> <img src="assets/images/Logo.png"></a></h1>
	</div>
	<div class="barra">
		<ul>
				<li><a href="principal.php"><img src="assets/images/icone-sair.png"> </a></li>
			<li id="contador">
				<span id="clock1">
			    </span>
			    <script>setTimeout('getSecs()',1000);</script>				
  			</li>
		</ul>
	</div>
	
	<div class="conteudo">
		<div class="simulado" >
		<h1>Boa Prova</h1>
			<form method="post" action="">
			
				<p>Questão 1</p>
					<input type="radio" name="resposta1">Resposta 1 <br>
					<input type="radio" name="resposta1">Resposta 2 <br>
					<input type="radio" name="resposta1">Resposta 3 <br>
					<input type="radio" name="resposta1">Resposta 4 <br>
				
				<p>Questão 2</p>
					<input type="radio" name="resposta2">Resposta 1 <br>
					<input type="radio" name="resposta2">Resposta 2 <br>
					<input type="radio" name="resposta2">Resposta 3 <br>
					<input type="radio" name="resposta2">Resposta 4 <br>
			
				<p>Questão 3</p>
					<input type="radio" name="resposta3">Resposta 1 <br>
					<input type="radio" name="resposta3">Resposta 2 <br>
					<input type="radio" name="resposta3">Resposta 3 <br>
					<input type="radio" name="resposta3">Resposta 4 <br>
			
				<p>Questão 4</p>
					<input type="radio" name="resposta4">Resposta 1 <br>
					<input type="radio" name="resposta4">Resposta 2 <br>
					<input type="radio" name="resposta4">Resposta 3 <br>
					<input type="radio" name="resposta4">Resposta 4 <br>
			
				<p>Questão 5</p>
					<input type="radio" name="resposta5">Resposta 1 <br>
					<input type="radio" name="resposta5">Resposta 2 <br>
					<input type="radio" name="resposta5">Resposta 3 <br>
					<input type="radio" name="resposta5">Resposta 4 <br>
			
				<p>Questão 6</p>
					<input type="radio" name="resposta6">Resposta 1 <br>
					<input type="radio" name="resposta6">Resposta 2 <br>
					<input type="radio" name="resposta6">Resposta 3 <br>
					<input type="radio" name="resposta6">Resposta 4 <br>
			
				<p>Questão 7</p>
					<input type="radio" name="resposta7">Resposta 1 <br>
					<input type="radio" name="resposta7">Resposta 2 <br>
					<input type="radio" name="resposta7">Resposta 3 <br>
					<input type="radio" name="resposta7">Resposta 4 <br>
				
				<p>Questão 8</p>
					<input type="radio" name="resposta8">Resposta 1 <br>
					<input type="radio" name="resposta8">Resposta 2 <br>
					<input type="radio" name="resposta8">Resposta 3 <br>
					<input type="radio" name="resposta8">Resposta 4 <br>
			
				<input type="submit" name="confirmar" id="confirmar" value="Confirmar Respostas">
			</form>
		</div>
	</div>

	<footer class="footer">
		<h5>www.simutec.com.br</h5>
	</footer>
</body>
</html>
