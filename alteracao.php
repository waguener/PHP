<?php 

	session_start();

	$email = $_POST['email'];
	$nome = $_POST['nome'];

	$conexao = @mysql_connect("127.0.0.1", "root") or die ("Sem conexão com o servidor");
	$select = @mysql_select_db("cadastro1") or die("Sem acesso ao DB, Entre em contato com o Administrador, amaralmatta@gmail.com");

	$result = mysql_query("SELECT * FROM `cadastro1` WHERE `email` = '$email' AND `nome`= '$nome'");

	if(mysql_num_rows ($result) > 0 ){
		$_SESSION['email'] = $email;
		$_SESSION['nome'] = $nome;
		header('location:alterar.php');
		
	}else{
		unset ($_SESSION['email']);
		unset ($_SESSION['nome']);
		header('location:usuario_nao_encontrado.php');


		}

?>