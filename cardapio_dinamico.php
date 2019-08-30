
      



        
        <nav class="navbar navbar-expand-md navbar-inverse bg-warning">
      <a class="navbar-brand" href="#"> Paraíso das Pizzas</a>
      <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="pizzaria.html"><i class="fas fa-home"></i> Home </a>
          </li>
         <li class="nav-item active">
            <a class="nav-link" href="pedidos.html"><i class="fas fa-phone-volume"></i> Pedidos </a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="cardapio.html"><i class="fas fa-pizza-slice"></i> Cardapio <span class="sr-only"> (página atual)</span></a>
          </li>
            <li class="nav-item ">
                 <a class="nav-link" href="#login" data-toggle="modal" ><span style="font-size: 1em; color: tomato;"><i class="fas fa-sign-in-alt"></i></span> login </a>
          </li>
            <li class="nav-item ">
                 <a class="nav-link"  href="" data-toggle="modal" data-target="#exampleModalLong" ><span style="font-size: 1em; color: tomato;"><i class="fas fa-sign-in-alt"></i></span> Cadastro </a></li>
          
          </ul>
      
            
    </div>
    </nav> 

<?php include './header.php' ?>
    <div class="container mt-3">
            <!-- Estrutura de array -->
            <?php
            $lista = array(
                array(
                    "id" => 1,
                    "nome" => "Pizza de Calabreza",
                    "quantidade"=> "100 un.",
                    "preco" => 50.90,
                    "imagem" => "prod1"
                ),
                array(
              "id" => 2,
            "nome" => "Pizza de 4 queijos",
            "quantidade" =>"250 un.",
            "preco" => 40.00,
            "imagem" => "prod2"
            ),
             array(
                "id" =>3,
                "nome" =>"Pizza de Catupiry",
                "quantidade" => "132 un.",
                "preco" => 25.00,
                "imagem" => "prod3"
                )
                );    

            $array = array(
                    "id" =>4,
                    "nome" =>"Pizza Vegetariana",
                    "quantidade" => "62 un.",
                    "preco" => 15.00,
                    "imagem" => "prod4"   
            );

            $array2 = array(
                "id" =>3,
                "nome" =>"Pizza de Mussarela",
                "quantidade" => "132 un.",
                "preco" => 23.00,
                "imagem" => "prod3"
              );    
                
           
          # insere o elemento em uma posição do array
            array_push($lista, $array);    
            ?>
            <!-- Estrutura de repetição -->
            <h1>Cardapio do Paraíso dos Sabores:</h1>
            <?php for($i = 0; $i < sizeof($lista); $i++) : ?>
                  
                  <h2><?= $i + 1 ?>) <?=$lista[$i]["nome"]?>...............................
                  <?=$lista[$i]["preco"]?></h2>
                <?php endfor; ?>
<?php include './footer.php' ?>

<i class="fas fa-image"></i>


        
     

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