<?php 
    include_once './header.php';
    include_once './consulta_tipoComida.php'; 
    include_once './consulta_prato.php';
    $cont = 0;  
?>
    <style>
        div.col div.tamanhos div h2{
            font-weight: bold;
            display: flex;
            align-items:center;
            justify-content: center;
            height: 100%;
        }
        
        div.col div.tamanhos div h3{
            font-weight: bold;
            display: flex;
            align-items:center;
            justify-content: center;
            height: 100%;


        }
        div.col div.tamanhos div{
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            background-color: #EE8262;

        }
        
        div.col div.pizzas1 h3{
           font-weight: bold;
        }
        div.col div.pizzas2 h3{
            font-weight: bold;
            
        }
        
        
        div.col div.pizzas1 p.preço{
            font-size: 18px;
            display: flex;
            align-items:center;
            justify-content: center;
            height: 100%;
            
        }
        div.col div.pizzas2 p.preço{
            font-size: 18px;
            display: flex;
            align-items:center;
            justify-content: center;
            height: 100%;
        }
        div.col div.pizzas1 div{
            border-radius: 10px;
            background-color: #FF4040;
        } 
        
        div.col div.pizzas2 div{
            border-radius: 10px;
            background-color: #CD3333;
            
        } 
        
        div.col div.pizzas1 p.descrição{
            text-align: left;
            
        }
        div.col div.pizzas2 p.descrição{
           text-align: left; 
            
        }
        
         @media screen and (max-width:1199px){
             div.col div.tamanhos h3{
            font-size: 1.6em;
            }
            
        }
        
        @media screen and (max-width:991px){
            
        div.col div.tamanhos h3{
            font-size: 1.2em;
            }
        }
        
        @media screen and (max-width:767px){

            div.col div.tamanhos h3{
                font-size: 1.4em;
            }
            div.col div.tamanhos h2{
                font-size: 1.5em;
            }
            div.col div.pizzas1 h3{
                font-size: 1em;
            }
            div.col div.pizzas2 h3{
                font-size: 1em;
            }
        }
        @media screen and (max-width:576px){
            div.col div.tamanhos h2{
                font-size: 4.2vw;
            }
            div.col div.tamanhos h3{
                font-size: 4.2vw;
            }
            div.col div.pizzas1 p.preço{
                font-size: 4.1vw;
            }
            div.col div.pizzas2 p.preço{
                font-size: 4.1vw;
            }
            div.col div.pizzas1 p.descrição{
                font-size: 3.5vw;
                margin-left: -15px;
                
            }
            div.col div.pizzas2 p.descrição{
                font-size: 3.5vw;
                margin-left: -15px;
                
            }
            div.col div.pizzas1 h3{
                font-size: 3.5vw;
                margin-left: -15px;
                margin-top: 3px;
            
            }
            div.col div.pizzas2 h3{
                font-size: 3.5vw;
                margin-left: -15px;
                margin-top: 3px;
            
            }
        }
        
      
    </style>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h1 class="jumbotron">Cardápio</h1>
        </div> 
    </div>
       
    <div class="col">
        <?php foreach (listaTipo() as $tipo) : ?>
            <?php 
                $first = TRUE;
                $existe = FALSE;
             ?>
            <?php foreach(listaPratoByTipo($tipo['id_tipoComida']) as $prato) : ?>
                
                    <?php if($first==TRUE) : ?>
                        <div class="tamanhos row" id=simples>
                            <div  class="col-lg-6 col-md-6 col-sm-3 col-3">
                                <h2><?=$tipo['nome'] ?></h2>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                                <h3>Pequena</h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                                <h3>Média</h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                                <h3>Grande</h3>
                            </div>
                        </div>
                        <?php 
                            $first = FALSE; 
                            $existe = TRUE;
                        ?>    
                    <?php endif ?> 
                        <div class="<?= ($cont % 2 == 0) ? 'pizzas1 row': 'pizzas2 row';?>">
                            <div class="col-lg-6 col-md-6 col-sm-3 col-3">
                                <div class="row">
                                <h3 class="col-lg-12"><?= $prato['nomePrato']?></h3>
                                <p class="descrição col-lg-12"><?= $prato['descricaoPrato']?></p>
                                </div>
                            </div>
                        
                            <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                                <p class="preço">R$<?= number_format($prato['precoP'], 2, ',', '.');?></p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                                <p class="preço">R$<?= number_format($prato["precoM"], 2, ',', '.');?></p>
                            </div>
                            <div  class="col-lg-2 col-md-2 col-sm-3 col-3">
                                <p class="preço">R$<?= number_format($prato["precoG"], 2, ',', '.');?></p>
                            </div> 
                        </div>
                    <?php $cont++; ?> 
                         
            <?php endforeach ?>
            <?php if($existe ==TRUE) : ?>
                <div style="height: 30px;"></div>
            <?php endif ?>
        <?php endforeach; ?>
    </div>       
            

<?php include './footer.php' ?>