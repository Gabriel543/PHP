<!DOCTYPE html>

<html>
    <head>
    <title>Exercicio 0</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container text-white bg-dark">
            <fieldset>
                <legend>1 - Preço com desconto</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o preço</label>
                        <input type="number" step= 1 name="preço" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Verificar!</button>
                </form>
            </fieldset>
         

            <?php
                isset($_POST['preço']) ?  $preço = $_POST['preço']  : $preço = 0;
                echo "<br>";
                echo ($preço != 0) ? "O preço com desconto é " .($preço - $preço * 0.09) : "";

                
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>2 - Consumo médio</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe a distancia em km</label>
                        <input type="number" step= 1 name="distancia" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe os litros de combustível</label>
                        <input type="number" step= 1 name="combustivel" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                $distancia = isset($_POST['distancia']) ? $_POST['distancia']: 0;
                $combustivel = isset($_POST['combustivel']) ? $_POST['combustivel']: 0;
                echo "<br>";
                echo ($distancia != 0 && $combustivel) ? "O consumo médio é " .($distancia/$combustivel) ." km/L." : "";
                
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
        <fieldset>
                <legend>3 - Gasto de Combustível</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe a distancia em km</label>
                        <input type="number" step= 1 name="km" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe os litros de combustível</label>
                        <input type="number" step= 1 name="litro" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o valor por litro</label>
                        <input type="number" step= 1 name="VL" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                $km = isset($_POST['km']) ? $_POST['km'] : 0;
                $litro = isset($_POST['litro']) ? $_POST['litro'] : 0;
                $VL = isset($_POST['VL']) ? $_POST['VL'] : 0;
                echo "<br>";
                echo ($km != 0 && $litro && $VL != 0) ? "O preço por quilometro é " .($km/$litro/$VL) ." R$/km." : "";

                
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>4 - Salario com comissão</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe a quantia de carros vendidos</label>
                        <input type="number" step= 1 name="carros" class="form-control">
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if (isset($_POST['carros']) && $_POST['carros'] != ""){
                    $carros = $_POST['carros'] ;
                    echo ($carros < 0)? "" : "O salário total é R$ " .(800 + $carros * 300);
                }
                

                
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>5 - Eleição</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe a quantidade de eleitores</label>
                        <input type="number" step= 1 name="eleitores" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe os votos validos</label>
                        <input type="number" step= 1 name="validos" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe os votos brancos</label>
                        <input type="number" step= 1 name="brancos" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe os votos nulos</label>
                        <input type="number" step= 1 name="nulos" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['eleitores']) && $_POST['eleitores'] != "" && $_POST['eleitores'] >= 0){
                    $eleitores = $_POST['eleitores'];
                    if(isset($_POST['validos'])){
                        $validos = $_POST['validos'];
                        echo ($validos != "" && $validos >= 0) ? "A porcentagem de votos validos é " .($validos/$eleitores*100) ."%." : "A porcentagem de votos validos é 0%.";
                    }
                    echo "<br>";
                    if(isset($_POST['brancos'])){
                        $brancos = $_POST['brancos'];
                        echo ($brancos != "" && $brancos >= 0) ? "A porcentagem de votos brancos é " .($brancos/$eleitores*100) ."%." : "A porcentagem de votos brancos é 0%.";
                    }
                    echo "<br>";
                    if(isset($_POST['nulos'])){
                        $nulos = $_POST['nulos'];
                        echo ($nulos != "" && $nulos >= 0) ? "A porcentagem de votos nulos é " .($nulos/$eleitores*100) ."%." : "A porcentagem de votos nulos é 0%.";
                    }
                }
                
                
                
            ?>
            
            <br><br>
        </div>

        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

    

</html>