<?php include './header.php' ?>
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

    <?php
        $simples = array(
            array(
                "id" => 1,
                "nome" => "Mussarela",
                "texto" => "Molho de tomate e mussarela.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 2,
                "nome" => "Calabresa",
                "texto" => "Molho de tomate, mussarela e calabresa.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 3,
                "nome" => "Presunto",
                "texto" => "Presunto ,molho de tomate e mussarela.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 4,
                "nome" => "Margherita",
                "texto" => "Molho de tomate, mussarela, tomates e manjericão.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 5,
                "nome" => "Frango c/ Catupiry",
                "texto" => "Molho de tomate, mussarela, frango desfiado com catupiry.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 6,
                "nome" => "Portuguesa",
                "texto" => "Molho de tomate, presunto, mussarela, ovos, cebola e azeitonas.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 7,
                "nome" => "Carne Seca c/ Catupiry",
                "texto" => "Molho de tomate, mussarela, carne seca desfiada com catupiry.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 8,
                "nome" => "Bacon",
                "texto" => "Molho de tomate, mussarela e bacon.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            ),
            array(
                "id" => 9,
                "nome" => "Americana",
                "texto" => "Molho de tomate, mussarela, bacon, calabresa, ovos e cebola.",
                "precoP" => 29,00,
                "precoM" => 33,00,
                "precoG" => 40,00,
            )
        );

        $especiais = array(
            array(
                "id" => 10,
                "nome" => "Milão",
                "texto" => "Presunto cozido picado, mussarela, calabresa artesanal moída, fatias de cebola branca e azeitona verde fatiada.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 11,
                "nome" => "Cacciatore",
                "texto" => "Queijo parmesão, calabresa de javali e pimenta dedo-de-moça. Finalizada com folhas frescas de alecrim.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 12,
                "nome" => "Cinco Queijos",
                "texto" => "Mozzarella, provolone, gorgonzola, requeijão cremoso e parmesão.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 13,
                "nome" => "Caprese",
                "texto" => "Mozzarella, fatias de tomate fresco, mozzarella de búfala em bola. Finalizada com pesto de azeitonas portuguesa e manjericão.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 14,
                "nome" => "Baiana",
                "texto" => "Mozzarella, calabresa artesanal moída, pimenta calabresa, tomate fresco picado, alho frito e azeitona portuguesa.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 15,
                "nome" => "Burrata",
                "texto" => "Mozzarella de búfala, alho poró e queijo burrata. Finalizada com fatias de tomate cereja.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 16,
                "nome" => "Di Parma",
                "texto" => "Mozzarella, fatias de tomate fresco. Finalizada com lâminas de presunto parma.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 17,
                "nome" => "Shitake",
                "texto" => "Mozzarella, Delicioso Mix de Cogumelos e Alho Poró.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 18,
                "nome" => "Farnese",
                "texto" => "Mozzarella, tomate seco, lâminas de presunto parma e rúcula fresca.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            )
        );

        $doces = array(
            array(
                "id" => 19,
                "nome" => "Banana",
                "texto" => "Mozzarella, banana, açúcar e canela.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 20,
                "nome" => "Sensação",
                "texto" => "Requeijão cremoso, recheio de morango, chocolate ao leite e morangos.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 21,
                "nome" => "Nutella",
                "texto" => "Creme de leite, nutella, avelã picada.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            ),
            array(
                "id" => 22,
                "nome" => "Brownie",
                "texto" => "Creme de leite, requeijão cremoso, chocolate em lasca, brownie em cubo.",
                "precoP" => 36,00,
                "precoM" => 41,00,
                "precoG" => 49,00,
            )
        );
    ?>

            <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1 class="jumbotron">Cardápio</h1>
             </div> 
            </div>
            
            
            <div class="col">
                <div class="tamanhos row" id=simples>
                    <div  class="col-lg-6 col-md-6 col-sm-3 col-3">
                        <h2>Pizzas Simples</h2>
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


                <?php for($i=0;$i < sizeof($simples) ;$i++) :?>
                <div class="<?= ($i % 2 == 0) ? 'pizzas1 row': 'pizzas2 row';?>">
                    <div class="col-lg-6 col-md-6 col-sm-3 col-3">
                        <div class="row">
                        <h3 class="col-lg-12"><?= $simples[$i]["nome"]?></h3>
                        <p class="descrição col-lg-12"><?= $simples[$i]["texto"]?></p>
                        </div>
                    </div>
                
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($simples[$i]["precoP"], 2, ',', '.');?></p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($simples[$i]["precoM"], 2, ',', '.');?></p>
                    </div>
                    <div  class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($simples[$i]["precoG"], 2, ',', '.');?></p>
                    </div>
                    
                </div>
                <?php endfor ?>
                
                <div style="height: 30px;"></div>

                <div class="tamanhos row" id=simples>
                    <div  class="col-lg-6 col-md-6 col-sm-3 col-3">
                        <h2>Pizzas Especiais</h2>
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

                <?php for($i=0;$i < sizeof($especiais) ;$i++) :?>
                <div class="<?= ($i % 2 == 1) ? 'pizzas1 row': 'pizzas2 row';?>">
                    <div class="col-lg-6 col-md-6 col-sm-3 col-3">
                        <div class="row">
                        <h3 class="col-lg-12"><?= $especiais[$i]["nome"]?></h3>
                        <p class="descrição col-lg-12"><?= $especiais[$i]["texto"]?></p>
                        </div>
                    </div>
                
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($especiais[$i]["precoP"], 2, ',', '.');?></p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($especiais[$i]["precoM"], 2, ',', '.');?></p>
                    </div>
                    <div  class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($especiais[$i]["precoG"], 2, ',', '.');?></p>
                    </div>
                    
                </div>
                <?php endfor ?>

                <div style="height: 30px;"></div>

                <div class="tamanhos row" id=simples>
                    <div  class="col-lg-6 col-md-6 col-sm-3 col-3">
                        <h2>Pizzas Doces</h2>
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

                <?php for($i=0;$i < sizeof($doces) ;$i++) :?>
                <div class="<?= ($i % 2 == 0) ? 'pizzas1 row': 'pizzas2 row';?>">
                    <div class="col-lg-6 col-md-6 col-sm-3 col-3">
                        <div class="row">
                        <h3 class="col-lg-12"><?= $doces[$i]["nome"]?></h3>
                        <p class="descrição col-lg-12"><?= $doces[$i]["texto"]?></p>
                        </div>
                    </div>
                
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($doces[$i]["precoP"], 2, ',', '.');?></p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($doces[$i]["precoM"], 2, ',', '.');?></p>
                    </div>
                    <div  class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <p class="preço">R$<?= number_format($doces[$i]["precoG"], 2, ',', '.');?></p>
                    </div>
                    
                </div>
                <?php endfor ?>
            
                <div style="height: 30px;"></div>

            </div>

<?php include './footer.php' ?>