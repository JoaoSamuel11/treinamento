
  <?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="index.css" rel="stylesheet">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Brasil Júnior</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#mej">MeJ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Parcerias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Treinamento 2019.2/Home/login">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


    
  <div id="objetivo">
    <h1  class="text-center">Nosso Objetivo</h1>
    <p class="text-center">"Representar e potencializar o Movimento Empresa Júnior brasileiro como agente de formação de empreendedores comprometidos e capazes de transformar o país"</p>
  </div>

  <div id= "mej">
    <h2 class="text-center">Movimento empresa júnior</h2>
    <p class="text-center">"Nossa missão é formar, por meio da vivência empresarial, empreendedores comprometidos e capazes de transformar o Brasil Desde 2010, o MEJ já impactou mais de R$ 70.000.000,00 na economia brasileira, que são integralmente reinvestidos na educação empreendedora dos estudantes</p>
  </div>


  <h3 class="text-center">Entre em contato:</h3>
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <form>
      <div class="form-group">
        <label for="exampleInputPassword1">Nome</label>
        <input type="Name" class="form-control" id="exampleInputName1" placeholder="Nome">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Assunto</label>
        <input type="Assunto" class="form-control" id="exampleInputAssunto1">
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <form action="/action_page.php" method=”post”></form>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</html>


