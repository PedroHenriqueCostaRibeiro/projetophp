<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     
  </head>

  <body>

    

  <nav  class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SeuLogin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php

 include("config.php");

switch(@$_REQUEST["page"]){
case "novo":
  include("novo-usuario.php");
  break;

  case "listar":
    include("listar-usuario.php");
    break;

  case "salvar":
    include("salvar-usuario.php");
    break;

  case "editar":
    include("editar-usuario.php");
    break;


    default;
    print "<h1>Bem Vindo  AO SEU LOGIN!</h1>";
    print "<h3> O Seu Login foi criado facilitar o acesso aos dados das suas contas, nós possuimos um site de cadastro onde todos os dados dos usuários serão listados. </h3>";
    print"<br/>";
    print "<h3> Se voce que conferir a sua conta, basta clicar em Novo usuário e preencher o formulário, logo em seguida você sera direcionado para a lista.</h3";
    
  
}


?>
</div>
</div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>