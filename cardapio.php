<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
      <script src="https://kit.fontawesome.com/583a595d2b.js"></script>
      
      
      
      <title>Pizzaria</title>
  
    <style>
        .navbar-inverse .dropdown-menu{
                background-color: #800000 !important;
        }
       
        .navbar-inverse a{
                color: #fff !important;
        }
    
        .carousel-caption p{
            color:aqua;
            
        }
        
        body {
            color:white;
            background-image:url(https://freedesignfile.com/upload/2016/01/Chef-with-pizza-vector-material.jpg) ;
           /*background-size: cover;*/
            background-repeat: repeat;
            
        
        }
        main{
              max-width: 960px;
    min-height: 1009px;
    min-height: 1009px;
    margin: 0 auto;
    background-color: green;
    opacity: 0.9;
}
        .text-center{
            text-align:center;
        }    
      
      </style>
    </head>
  <body>
    <main class="container"><!-- a tag "container-fuid" serve para ocupar quase os 100% da página e a tag com apenas o "container" deixa mais centralizado na pagina-->
        
    <nav class="navbar navbar-expand-md navbar-inverse bg-warning">
  <a class="navbar-brand" href="#"> Paraíso das Pizzas</a>
  <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="pizzaria.php"><i class="fas fa-home"></i> Home </a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="pedidos.php"><i class="fas fa-phone-volume"></i> Pedidos </a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="cardapio.php"><i class="fas fa-pizza-slice"></i> Cardapio <span class="sr-only"> (página atual)</span></a>
      </li>
        <li class="nav-item ">
             <a class="nav-link" href="#login" data-toggle="modal" ><span style="font-size: 1em; color: tomato;"><i class="fas fa-sign-in-alt"></i></span> login </a>
      </li>
        <li class="nav-item ">
             <a class="nav-link"  href="" data-toggle="modal" data-target="#exampleModalLong" ><span style="font-size: 1em; color: tomato;"><i class="fas fa-sign-in-alt"></i></span> Cadastro </a></li>
      
      </ul>
  
        
</div>
</nav> 
     
    
<br><br><br>
      
  <h1>Cardapio do Paraíso dos Sabores:
      <br><br>
      1) Pizza de Calabresa...............................R$50,00<br><br>
      2) Pizza de Quatro Queijos...........................R$39,00<br><br>
      3) Pizza de Catupiry...........................R$28,00<br><br>
      4) Pizza Vegetariana...........................R$35,00<br><br>
      5) Pizza de Mussarela...........................R$43,00<br><br>
  
  </h1>
    <h1>Sobremesas:<br><br>
      1) Pizza Morango c/chocolate...............................R$50,00<br><br>
      2) Pizza de Banana...........................R$39,00<br><br>
      3) Pizza de Confete...........................R$28,00<br><br>
      4) Pizza de Caramelo...........................R$35,00<br><br>
      5) Pizza Chocolate com Caramelo...........................R$43,00<br><br>
  
    </h1>
     <h1>Bebidas:<br><br>
      1) Coca-Cola...............................R$6,00<br><br>
      2) Pepsi...........................R$9,00<br><br>
      3) Guarana Antartica...........................R$10,00<br><br>
      4) Cerveja Amnésia ...........................R$14,00<br><br>
      5) Cerveja Conan...........................R$15,00<br><br>
  
    </h1>
        
     </main> 

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
              
  <div class="form-group">
    <label for="exampleInputPassword1"> Confirme sua Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>
        
        
        
        
     
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLongTitle" style="color: #343a40;">Dados</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

          <form>
   <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Nome">
    </div>
        <div class="form-group col-md-6">
      <label for="inputEmail4">Sobrenome</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Sobrenome">
    </div>
       <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Bairro</label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Onde você mora?</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Clique em mim
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
  
</form>
      </div>

    </div>
  </div>
</div>


</body>
</html>