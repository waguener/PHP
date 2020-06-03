<!DOCTYPE html>
<html>
<head>
  <title>Simutec - Senha Alterada</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/stylesheets/padrao.css">
</head>
<div class="header">
  <h1 class="logo-cadastro"><a href="principal.php"> <img src="assets/images/Logo.png"></a></h1>
</div>
<div class="conteudo">
  <div class="caixa">
   <?php
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $conexao = @mysql_connect("127.0.0.1", "root") or die ("Sem conexão com o servidor");
   $select = @mysql_select_db("cadastro1") or die("Sem acesso ao DB, Entre em contato com o Administrador, amaralmatta@gmail.com");

   $sql_email_check = mysql_query(

    "SELECT COUNT(idnome) FROM cadastro1 WHERE email='{$email}'"
    );

   $eReg = @mysql_fetch_array($sql_email_check);
   $email_check = $eReg[0];

   if ($email_check = $email){
     echo "Cadastro atualizado com sucesso!";
     $query = "UPDATE cadastro1  SET  senha='$senha'  WHERE cadastro1.email = '$email'" ;
     $result = mysql_query($query);


   }else{
    echo "E-mail não é o mesmo cadastrado em nosso sistema!";
    echo "Insira o e-mail cadastrado!";
  }
  mysql_close($conexao);

  ?>
</div>
</div>
<body>
</body>
</html>

