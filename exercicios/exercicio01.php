<!DOCTYPE html>

<html>
    <head>
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container text-white bg-dark">
            <legend>1 - Valor real e inteiro</legend>
            <?php
                $inteira = 10;
                $real = 20.3;
                
                echo "O valor inteiro é: " .$inteira;
                
                echo "<br>O valor real é: " .$real;
                
            ?>
            <br><br>
        </div>
        
        <div class="container text-white bg-secondary">
            <legend>2 - Concatenar letras</legend>
            <?php
                $letra1 = "a";
                $letra2 = "l";
                $letra3 = "u";
                $letra4 = "n";
                $letra5 = "o";
                $letra6 = "s";
                
                echo  $letra1  .$letra2 .$letra3 .$letra4 .$letra5 .$letra6;
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <legend>3 - Conta de Celular</legend>
            <?php
                $assinatura = 32;
                $impulsos = 0.09;
                $V_impulsos = 254 - 90;
                $chamadas = 0.35;
                $V_chamadas = 23;
                
                echo "Assinatura: " .$assinatura;
                echo "<br>Impulsos: 254" ;
                echo "<br>Chamadas: " .$V_chamadas;
                
                
                $impulsos *= $V_impulsos;
                $chamadas *= $V_chamadas;
                $total = $impulsos + $chamadas + $assinatura;
                
                echo "<br>O valor total é " .$total;
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <legend>4 - Média de 11,19,7</legend>
            <?php

            $numa = 11;
            $numb = 19;
            $numc = 7;

            $numMedia = ($numa + $numb + $numc) / 3;

            echo "A média de ".$numa .", " .$numb .", " .$numc .", é " .$numMedia;
                
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <legend>5 - Média do aluno</legend>
            <?php

            $numa = 8;
            $numb = 7.5;
            $numc = 10;
            $numd = 9;
            $numMedia = ($numa + $numb*2 + $numc*3 + $numd*4) / 10;

            echo "Prova 1 - " .$numa ." | Prova 2 - " .$numb ." | Prova 3 - " .$numc ." | Prova 4 - " .$numd;
            echo "<br>A média do aluno é " .$numMedia;


            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>6 - Operações sobre valores</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor A</label>
                        <input type="number" step= 1 name="a" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o valor B</label>
                        <input type="number" step= 1 name="b" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                if(isset($_POST['a']) && $_POST['a'] != "" && isset($_POST['b']) && $_POST['b'] != ""){
                    $a = $_POST['a'];
                    $b = $_POST['b'];

                    echo $a ." + " .$b ." = " .($a + $b) ."<br>";
                    echo $a ." - " .$b ." = " .($a - $b) ."<br>";
                    echo $a ." * " .$b ." = " .($a * $b) ."<br>";
                    echo ($b != 0 ) ? $a ." / " .$b ." = " .($a / $b) ."<br>" : "Valor Invalido: divisão por 0";
                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>7 - Quadrado do valor</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o  valor</label>
                        <input type="number" step= 1 name="quadrado" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php

                if( isset($_POST['quadrado']) && $_POST['quadrado'] != ""){
                    echo "<br>O quadrado do valor é " .pow($_POST['quadrado'],2);

                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>8 - Cubo do valor</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o  valor</label>
                        <input type="number" step= 1 name="cubo" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php

                if( isset($_POST['cubo']) && $_POST['cubo'] != ""){
                    echo "<br>O cubo do valor é " .pow($_POST['cubo'],3);

                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>9 - Divisão, quadrado e cubo dos valores</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o primeiro valor</label>
                        <input type="number" step= 1 name="valor01" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o segundo valor</label>
                        <input type="number" step= 1 name="valor02" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                $valor01 = isset($_POST['valor01']) ? $_POST['valor01']: 0;
                $valor02 = isset($_POST['valor02']) ? $_POST['valor02']: 0;

                if($valor01 != 0 && $valor02 != 0){
                    echo "<br>A divisão dos valores é " .($valor01/ $valor02);
                    echo "<br>O quadrado fo primeiro valor é " .($valor01 ** 2);
                    echo "<br>O cubo do segundo valor é " .(pow($valor02,3));
                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>10 - Resto do número por 2</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o  valor</label>
                        <input type="number" step= 1 name="resto2" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php

                if( isset($_POST['resto2']) && $_POST['resto2'] != ""){
                    echo $_POST['resto2'] ." % 2 = " .($_POST['resto2'] % 2) ; 

                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>11 - Sucessor e Antecessor</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o  valor</label>
                        <input type="number" step= 1 name="SuceAnte" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php

                if( isset($_POST['SuceAnte']) && $_POST['SuceAnte'] != ""){
                    $SuceAnte = $_POST['SuceAnte'];
                    $antecessor = $SuceAnte - 1;
                    $sucessor = $SuceAnte + 1;

                    echo "Número: " .$SuceAnte ."<br>Antecessor: " .$antecessor ."<br>Sucessor: " .$sucessor;

                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>12 - Conversão real dolar</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor em reais</label>
                        <input type="number" step= 1 name="real" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php

                if( isset($_POST['real']) && $_POST['real'] != ""){
                    $real = $_POST['real'];
                    $dolar = 0.25;

                    echo "O valor de " .$real ." reais é igual a " .($real*$dolar) ." dolares."; 
                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>13 - Reajuste de 10%</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor a ser reajustado</label>
                        <input type="number" step= 1 name="reajuste" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php

                if( isset($_POST['reajuste']) && $_POST['reajuste'] != ""){
                    $reajuste = $_POST['reajuste'] + $_POST['reajuste'] * 0.1;

                    echo "O valor com reajuste é " .$reajuste; 
                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>14 - Reajuste de X%</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o salario do funcionario</label>
                        <input type="number" step= 1 name="salarioF" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o percentual de reajuste</label>
                        <input type="number" step= 1 name="reajusteF" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php

                if( isset($_POST['reajusteF']) && $_POST['reajusteF'] != "" && isset($_POST['salarioF']) && $_POST['salarioF'] != ""){
                    $reajusteF = $_POST['reajusteF'] /100;
                    $salarioF = $_POST['salarioF'] + $_POST['salarioF'] * $reajusteF;
                    echo "O valor com reajuste de " .($reajusteF*100) ."% é " .$salarioF; 
                }
            ?>
            <br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>15 - Calcule o salario final</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o salario/hora</label>
                        <input type="number" step= 1 name="salarioH" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe a quantidade de horas</label>
                        <input type="number" step= 1 name="qtdH" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Informe o desconto do INSS</label>
                        <input type="number" step= 1 name="inss" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                $salario = isset($_POST['salarioH']) ? $_POST['salarioH']: 0;
                $horas = isset($_POST['qtdH']) ? $_POST['qtdH']: 0;
                $inss = isset($_POST['inss']) ? $_POST['inss']: 0;

                if($salario != 0 && $horas != 0 && $inss != 0){
                    echo "O salario líquido é " .($salario * $horas) - (($salario *$horas) * ($inss/100));
                }
            ?>
            <br>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

    

</html>