<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <title>Cardápio</title>
        <link href="fontawesome-free-5.9.0-web/css/all.css" rel="stylesheet">
        <script defer src="fontawesome-free-5.9.0-web/js/all.js"></script>
        <script src="Recursos/JavaScript/myVar.js"></script>
    </head>
    <link rel="stylesheet" type="text/css" href="Recursos/CSS/style.css">
    
    <body onresize="detectResize();">
        <main class="container">
            <div id="content"></div>
            <nav class="navbar navbar-expand-lg navbar-toggleable-sm navbar-inverse bg-light bg-dark">
              <a class="navbar-brand" style="color:#007BFF">Pizzaria Gourmet</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon" style="color: tomato;"><i class="fas fa-list-alt fa-lg" style="padding-top:8px;"></i></span>
              </button>

              <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php"><span style="color: Tomato;"><i class="fas fa-home"></i></span> Início</a>
                  </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cardapio.php"><span style="color: Tomato;"><i class="fas fa-pizza-slice"></i></span> Cardápio</a> <span class="sr-only"></span>
                </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="sobre-nos.php"><span style="color: Tomato;"><i class="fas fa-newspaper"></i></span> Sobre-nós</a> <span class="sr-only"></span>
                </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contato.php"><span style="color: Tomato;"><i class="fas fa-comment"></i></span> Contato</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#login" data-toggle="modal"><span style="color: Tomato;"><i class="fas fa-sign-in-alt"></i></span> Login</a>
                    </li>

                </ul>
              </div>
            </nav>