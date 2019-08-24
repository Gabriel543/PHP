<!DOCTYPE html>

<html>
    <head>
        <title>Exercicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container text-white bg-dark">
            <fieldset>
                <legend>1 - Trocar Valores</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor A</label>
                        <input type="number" step= 1 name="A" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o valor B</label>
                        <input type="number" step= 1 name="B" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                
                echo "<br>";
                if( isset($_POST['A']) && $_POST['A'] != "" && $_POST['B'] && $_POST['B']){
                    $A = $_POST['A'];
                    $B = $_POST['B'];
                    $C = $A;
                    $A = $B;
                    $B = $C;
                    echo "A = $A <br>B = $B";
                }
            
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>2 - Valor absoluto</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="absoluto" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                
                echo "<br>";
                if( isset($_POST['absoluto']) && $_POST['absoluto'] != ""){
                    $absoluto = $_POST['absoluto'];
                    echo ($absoluto >= 0) ? "O valor absoluto de $absoluto é $absoluto" : "O valor absoluto de $absoluto é " .$absoluto*-1;
                }
            
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>3 - Ordenagem de valores decrece</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o primeiro valor</label>
                        <input type="number" step= 1 name="valor1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o segundo valor</label>
                        <input type="number" step= 1 name="valor2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o terceiro valor</label>
                        <input type="number" step= 1 name="valor3" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
            <?php 
                echo "<br>";
                if( isset($_POST['valor1']) && $_POST['valor1'] != "" && $_POST['valor2'] && $_POST['valor2'] && $_POST['valor3'] && $_POST['valor3']){
                    $valor1 = $_POST['valor1'];
                    $valor2 = $_POST['valor2'];
                    $valor3 = $_POST['valor3'];
                    if($valor1 > $valor2 && $valor1 > $valor3){
                        if ($valor2 > $valor3){
                            echo "$valor1 > $valor2 > $valor3";
                        }else{
                            echo "$valor1 > $valor3 > $valor2";
                        }
                    }else if($valor2 > $valor3 && $valor2 > $valor1){
                        if ($valor3 > $valor1){
                            echo "$valor2 > $valor3 > $valor1";
                        }else{
                            echo "$valor2 > $valor1 > $valor3";
                        }
                    }else{
                        if ($valor1 > $valor2){
                            echo "$valor3 > $valor1 > $valor2";
                        }else{
                            echo "$valor3 > $valor2 > $valor1";
                        }
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>4 - Inverter algorismo</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="algarismo" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                
                echo "<br>";
                if( isset($_POST['algarismo']) && $_POST['algarismo'] != ""){
                    $algarismo = $_POST['algarismo'];
                    if($algarismo >= 100 && $algarismo <= 999){
                        $dezena = $algarismo % 100;
                        $centena = ($algarismo - $dezena) / 100;
                        $unidade = $algarismo % 10;
                        $dezena  = ($dezena - $unidade) / 10;
                        echo "O inverso de $algarismo é $unidade$dezena$centena";
                    }
                }
            
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>5 - Par ou Impar</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="parImpar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['parImpar']) && $_POST['parImpar'] != "") {
                    $parImpar = $_POST['parImpar'];
                    echo ($parImpar % 2 == 0) ? "É par" : "É impar";
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>6 - Número primo</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="primo" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['primo']) && $_POST['primo'] != "") {
                    $primo = $_POST['primo'];
                    $listPrimo= [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47,53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
                    for($i = 0;$i < sizeof($listPrimo);$i++){
                        if($primo % $listPrimo[$i] == 0 && $primo != $listPrimo[$i]){
                            echo "$primo não é primo.";
                            break;
                        }else if($i == sizeof($listPrimo) - 1){
                            echo "$primo é primo.";
                        }
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>7 - Peso Ideal</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe a altura em metros</label>
                        <input type="number" step= 1 name="h" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o sexo(F/M)</label>
                        <input type="text" step= 1 name="sexo" class="form-control" list="M/F">
                        <datalist id="M/F">
                            <option value="F">
                            <option value="M">
                        </datalist> 
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['h']) && $_POST['h'] != ""){
                    $h = $_POST['h'];
                    if ($_POST["sexo"] == "F"){
                        echo "O peso ideal é " .(62.1 * $h - 44.7);
                    }else if($_POST["sexo"] == "M"){
                        echo "O peso ideal é " .(72.7 * $h - 58);
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>8 - Ordenagem de valores crescentes</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o primeiro valor</label>
                        <input type="number" step= 1 name="valor01" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o segundo valor</label>
                        <input type="number" step= 1 name="valor02" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o terceiro valor</label>
                        <input type="number" step= 1 name="valor03" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
            <?php 
                echo "<br>";
                if( isset($_POST['valor01']) && $_POST['valor01'] != "" && $_POST['valor02'] && $_POST['valor02'] && $_POST['valor03'] && $_POST['valor03']){
                    $valor01 = $_POST['valor01'];
                    $valor02 = $_POST['valor02'];
                    $valor03 = $_POST['valor03'];
                    if($valor01 < $valor02 && $valor01 < $valor03){
                        if ($valor02 < $valor03){
                            echo "$valor01 < $valor02 < $valor03";
                        }else{
                            echo "$valor01 < $valor03 < $valor02";
                        }
                    }else if($valor02 < $valor03 && $valor02 < $valor01){
                        if ($valor03 < $valor01){
                            echo "$valor02 < $valor03 < $valor01";
                        }else{
                            echo "$valor02 < $valor01 < $valor03";
                        }
                    }else{
                        if ($valor01 < $valor02){
                            echo "$valor03 < $valor01 < $valor02";
                        }else{
                            echo "$valor03 < $valor02 < $valor01";
                        }
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