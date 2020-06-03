<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Simutec</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/stylesheets/padrao.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto" rel="stylesheet">
</head>
<body>
  <div class="pagina">
    <header>      
      <ul class="menu">
        <li>
          <h1 class="logo">
            <a href="home.php">
              <img src="assets/images/Logo.png" alt="logo" id="imagem-logo">
            </a>
          </h1>
        </li>
        <li class="botao">
          <label class="menu-nav" for="sobre">
            Sobre
          </label>
        </li>
        <li class="botao">
          <label class="menu-nav" for="home">
            Home
          </label>
        </li>
        <li class="redes-sociais">
          <a href="#">
            <img src="assets/images/redes-sociais/facebook.png" align="center"> 
          </a>
        </li>
       </ul>
    </header>
    <input type="radio" name="sections" checked id="home">
    <section class="sections" id="principal">
      <h1 class="sub-titulo-home">Bem Vindo</h1>
      <p class="paragrago-home">O SIMUTEC é um site onde o usuário poderá fazer um simulado da prova classificatória da ETEC, possibilitando um estudo de uma maneira diversificada e pratica.
      </p>
      <p class="paragrago-home">O usuário cadastra-se utilizando o nome, endereço, e-mail, telefone, RG e CPF antes de começar a utilizar o aplicativo.  Logo após ele poderá escolher o número de questões a serem realizadas, tendo como possibilidade também escolher a matéria específica. O número de questões variam entre 30, 40 e 50, podendo escolher as matérias Matemática, Português, Geografia, História, Física, Química.
      </p>
      <p class="paragrago-home">Ao término do tempo estipulado de acordo com o número de questões escolhidas o usuário verá o número de acertos e erros, mostrando na sequência qual questão ele errou. Ele poderá ver sua classificação em um ranking comparando seu rendimento com outros usuários, tendo uma noção mais exata de como seria sua classificação em relação ao Vestibulinho.</p>
      <div class='card'>
        <div class='front'>
          <img src="assets/images/1.png" class='contact'>
          <span class='name'> Simulado ETEC</span>
          <hr>
          <span class='job'> - Entrar - </span>
          <h3 class="naoencontrado">Usuário ou Senha não encontrados, tente novamente.</h3>
        </div>
        <div class='back'>
          <form action="opem.php" method="POST">
	          E-mail: <input id="email" type="text" name="email" placeholder="Informe o e-mail cadastrado" required="" autofocus="email" title="Entre com seu e-mail cadastrado"><br><br>
	          Senha: <input  id="senha" type="password" name="senha" placeholder="Informe sua senha" required="" title="Entre com a senha cadastrada" maxlength="6"a><br><br>
	          <h6>
	            <a href="recuperar.php"> Recuperar senha </a>
	          </h6><br>
	          <h6>
	            <a href="cadastro_de_clientes.php">Clique aqui para se Cadastrar</a>
	          </h6><br>
	          <input type="submit" id="entrar" name="entrar" value="Entrar">
	          <input type="reset" id="limpar" name="limpar" value="Limpar">
          </form>
        </div>
      </div>
      <div class='card'>
      	<div class='front'>
      		<img src="assets/images/alterar-senha.svg" class='contact'>
      		<span class='name'> Área para recuperar Senha</span>
      		<hr>
      		<span class='job'> - Alterar senha - </span>
      	</div>
      	<div class='back'>
      		<form action="alteracao.php" method="post">
      			<h3>Informe o nome e o e-mail cadastrado, para voltar a ter acesso aos estudos.</h3>
      			<table id="tabela_recuperar">
      				<tr>
      					<td>Usuário</td>
      					<td><input type="text" name="nome" id="nome" required="" placeholder="Digite o nome cadastrado." autofocus="nome" /></td>
      				</tr>

      				<tr>
      					<td>E-mail</td>
      					<td><input type="email" name="email" id="email" required="" placeholder="Digite o e-mail cadastrado." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/></td>
      				</tr>

      				<tr>
      					<td>
      						<input type="submit" name="recuperar" id="recuperar" value="Recuperar"/>
      					</td>
      					<td>
      						<input type="reset" name="limpar" id="limpar" value="Limpar"/>
      					</td>
      				</tr>
      			</table>
      		</form>
      	</div>
      </div>
      <div class='card'>
        <div class='front'>
          <img src="assets/images/Ranking.png" class='contact'>
          <span class='name'> Curso para Avançado</span>
          <hr>
          <span class='job'> - front-end web developer - </span>
        </div>
        <div class='back'>
          <span>Skills:</span>
          <p>HTML, CSS</p><br>
          <label for="avancado" class="botao-clique">Clique aqui para iniciar</label>
        </div>
      </div>
    </section>
    <input type="radio" name="sections" id="nao-encontrado">
    <section class="sections" id="iniciante">
    <div class="caixa">
      <h2>Entrar</h2><br>
      <h3>Usuário ou Senha não encontrados, tente novamente.</h3>

      <form action="opem.php" method="POST" class="recuperar">

          E-mail: <input id="email" type="text" name="email" placeholder="Informe o e-mail cadastrado" required="" autofocus="email" title="Entre com seu e-mail cadastrado"><br><br>
          Senha: <input  id="senha" type="password" name="senha" placeholder="Informe sua senha" required="" title="Entre com a senha cadastrada" maxlength="6"a><br><br>

          <h6>
            <a href="recuperar.php"> Recuperar senha </a>
          </h6><br>

          <h6>
            <a href="cadastro_de_clientes.php">Clique aqui para se Cadastrar</a>
          </h6><br>
          

          <input type="submit" id="entrar" name="entrar" value="Entrar">
          <input type="reset" id="limpar" name="limpar" value="Limpar">
          

        </form>
    </div>
    </section>
      
</div>

</body>
</html>
