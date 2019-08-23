<!DOCTYPE html>

<html>
    <head>
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
    <div class="container text-white bg-dark">
            <fieldset>
                <legend>1 - Calcule o modulo</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="modulo" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                
                echo "<br>";
                if(isset($_POST['modulo']) && $_POST['modulo'] != "") {
                    $modulo = $_POST['modulo'];
                    echo ($modulo <  0) ? "|$modulo| = " .$modulo * -1 : "|$modulo| = " .$modulo;
                }
            
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>2 - Par ou Impar</legend>
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

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>3 - Verificar multiplos</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o primeiro valor</label>
                        <input type="number" step= 1 name="numa" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o segundo valor</label>
                        <input type="number" step= 1 name="numb" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['numa']) && $_POST['numa'] != "" && isset($_POST['numb']) && $_POST['numb'] != ""){
                    $numa = $_POST['numa'];
                    $numb = $_POST['numb'];
                    echo ($numb == 0) ? "Valor invalido divisão por 0" : (($numa % $numb == 0) ? $numa ." é multiplo de " .$numb : $numa ." não  é multiplo de " .$numb);
                }
               
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>4 - Negativo, positivo, zero</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="valor" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if (isset($_POST['valor']) && $_POST['valor'] != ""){
                    $valor = $_POST['valor'];
                    echo ($valor > 0) ? $valor ." é positivo.": (($valor == 0) ? "O número é zero." : $valor ." é negativo.");
                }
            
            ?>   
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>5 - Intervalo entre 5 e 20</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="intervalo" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['intervalo']) && $_POST['intervalo'] != ""){
                    $intervalo = $_POST['intervalo'];
                    echo ($intervalo > 5 && $intervalo < 20)? $intervalo ." está no intervalo entre 5 e 20." : $intervalo ." não está no intervalo entre 5 e 20.";
                }
               
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>6 - Operação condicional</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o primeiro valor</label>
                        <input type="number" step= 1 name="X" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o segundo valor</label>
                        <input type="number" step= 1 name="Y" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if (isset($_POST['X']) && $_POST['X'] != "" && isset($_POST['Y']) && $_POST['Y'] != ""){
                    $X = $_POST['X'];
                    $Y = $_POST['Y'];
                    echo ($X > $Y)? $X ." + " .$Y ." = " .($X + $Y) : $X ." * " .$Y ." = " .($X * $Y);
                }
            
            ?>   
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>7 - Relação entre os inteiros</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o primeiro valor</label>
                        <input type="number" step= 1 name="inteiro1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o segundo valor</label>
                        <input type="number" step= 1 name="inteiro2" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if (isset($_POST['inteiro1']) && $_POST['inteiro1'] != "" && isset($_POST['inteiro2']) && $_POST['inteiro2'] != ""){
                    $inteiro1 = $_POST['inteiro1'];
                    $inteiro2 = $_POST['inteiro2'];
                    echo ($inteiro1 > $inteiro2) ? $inteiro1 ." > " .$inteiro2 : (($inteiro1 == $inteiro2) ?  $inteiro1 ." = " .$inteiro2 :  $inteiro1 ." < " .$inteiro2);
                }
            
            ?>   
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>8 - Ano bissexto</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="bissexto" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if (isset($_POST['bissexto']) && $_POST['bissexto'] != ""){
                    $bissexto = $_POST['bissexto'];
                    echo($bissexto % 400 == 0) ? $bissexto ." é bissexto.": (($bissexto % 4 == 0 and $bissexto % 100 != 0) ? $bissexto ." é bissexto." : $bissexto ." não é bissexto.");
                }
            
            ?>   
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>9 - Verificar divisão por zero</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o numerador</label>
                        <input type="number" step= 1 name="numerador" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o denominador</label>
                        <input type="number" step= 1 name="denominador" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if (isset($_POST['numerador']) && $_POST['numerador'] != "" && isset($_POST['denominador']) && $_POST['denominador'] != ""){
                    $numerador = $_POST['numerador'];
                    $denominador = $_POST['denominador'];
                    echo ($denominador != 0)? $numerador ." / " .$denominador ." = " .($numerador/$denominador) : $numerador ." / " .$denominador ." não é uma operação valida: Divisão por Zero.";
                }
            
            ?>   
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>10 - Emprestimo</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o salario</label>
                        <input type="number" step= 1 name="salario" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe a prestação</label>
                        <input type="number" step= 1 name="prestação" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if (isset($_POST['salario']) && $_POST['salario'] != "" && isset($_POST['prestação']) && $_POST['prestação'] != ""){
                    $salario = $_POST['salario'];
                    $prestação = $_POST['prestação'];
                    if ($salario >= 0 && $prestação >= 0){
                        echo ($prestação > $salario * 0.2) ? "Empréstimo não pode ser concedido." : (($prestação == $salario * 0.2)? "Empréstimo em analise." : "Empréstimo pode ser concedido.");
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