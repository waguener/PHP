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
        </div>
        <div class='back'>
          <form action="logar.php" method="POST">
            E-mail: <input id="email" type="text" name="email" placeholder="Informe o e-mail cadastrado" required="" autofocus="email" title="Entre com o e-mail cadastrado"><br><br>
            Senha: <input  id="senha" type="password" name="senha" placeholder="Informe sua senha" required="" maxlength="6" title="Entre com a senha cadastrada"><br><br>
            <h6>
              <label for="recuperar" class="texto-recuperar"> Recuperar senha
              </a>
            </h6>
            <br>

            <input type="submit" id="entrar" name="entrar" value="Entrar">
            <input type="reset" id="limpar" name="limpar" value="Limpar">
          </form>
        </div>
      </div>
      <div class='card'>
        <div class='front'>
          <img src="assets/images/cadastro.png" class='contact'>
          <span class='name'> Área de Cadastro</span>
          <hr>
          <span class='job'> - SimuTec - </span>
        </div>
        <div class='back'>
          <form id="cadastro" action="cadastro1.php" method="post" name="cadastro1">
            <table class="tabela">
              <h3>Cadastro de Usuários</h3>
              <tr>
                <td>
                  Usuário
                  <input type="text" name="nome" id="nome" required="" placeholder="Entre com o seu Nome." autofocus="nome" title="Insira seu nome completo">
                </td>
              </tr>
              <tr>
                <td>
                E-mail
                  <input type="email" name="email" id="email" required="" placeholder="Entre com o E-mail." title="Entre com o seu e-mail">
                </td>       
              </tr>
              <tr>
                <td>
                  Senha
                  <input type="password" name="senha" id="senha" required="required" placeholder="******" maxlength="6" title="Senha de 6 digitos podendo ser letras e números">
                </td>
              </tr><br>
              <tr>
                <td>
                  <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar"/>
                  <input type="reset" name="limpar" id="limpar" value="Limpar">
                </td>
              </tr> 
            </table>
          </form>
        </div>
      </div>
      <div class='card'>
        <div class='front'>
         <img src="assets/images/Ranking.png" class='contact'>
         <span class='name'> Ranking - SimuTec</span>
         <hr>
         <span class='job'> - Confira sua colocação - </span>
       </div>
       <div class='back'>
        <span>Skills:</span>
        <p>HTML, CSS</p><br>
        <label for="avancado" class="botao-clique">Clique aqui para iniciar</label>
      </div>
    </div>
  </section>
  <input type="radio" name="sections" id="recuperar">
  <section class="sections" id="recuperar" >
    <h1 class="sub-titulo-home">Área de recuperação de senha</h1>
    <p class="paragrago-home">Esta área é exclusiva para voçê recuperar seu acesso.
    </p> 
    <div class='card' id="box-recuperar">
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
  </section>
  <input type="radio" name="sections" id="sobre">
  <section class="sections" id="sobre" >
    <h1 class="sub-titulo-home">  
      Sobre SimuTec
    </h1>
    <p class="paragrago-home">
      O SimuTec surgiu apartir de uma idéa de três jovens Amaral Matta, Wagner Elias e Luiz Felipe que ao se reunir para decidir qual seria o trabalho de conclusão de curso na ETEC Machado de  Assis de Caçapava - SP no ano de 2016.
    </p>
    <h1 class="sub-titulo-home">
      Introdução
    </h1>
    <p class="paragrago-home">
      O Simutec consiste em um simulado baseado em provas anteriores criado com o objetivo de incentivar os candidatos a uma vaga de um determinado curso na ETEC Machado de Assis a estudarem de uma forma mais dinâmica, com ferramentas onde o candidato possa ter uma noção de sua colocação em uma prova.
    </p>
    <h1 class="sub-titulo-home">
      Porque "SimuTec"
    </h1>
    <p class="paragrago-home">
      O nome SimuTec surgi bem simples, pois a idéa dos 3 jovens fundadores do sistema é orientar os novos canditados ao Vestibulinho da ETEC, com a junção de Sumulado com o Técnico do curso, dando origem ao <strong>SimuTec</strong>.
      </p>
    <h1 class="sub-titulo-home">
      Agradecimentos
    </h1>
    <p class="paragrago-home">
      Agradecemos a todos os professores e alunos que dedicaram suas vidas em compartilhar um pouco de seu conhecimento conosco. Obrigado pelo tempo e esforço que dedicaram a cada um de nós para que hoje pudéssemos chegar até aqui.
    </p>
    <h1 class="sub-titulo-home">
      Dedicatória
    </h1>
    <p class="paragrago-home">
      Dedicamos esta monografia a todos os amigos e familiares que nos apoiaram durante todo o tempo de estudo. Agradecemos a compreensão pelas horas dedicadas ao curso e também por toda ajuda que nos deram durante este período. 
    </p>
  </section>
  <input type="radio" name="sections" id="quantidadequestoes">
  <section class="sections" id="quantidadequestoes" >
  <h1 class="sub-titulo-home">
    Selecione o número de questões para o simulado.
  </h1>
  <input type="radio" name="questoes" value="20 questões">
  <input type="radio" name="questoes" value="30 questões">
  <input type="radio" name="questoes" value="40 questões">
  <input type="radio" name="questoes" value="50 questões">
</body>
</html>
