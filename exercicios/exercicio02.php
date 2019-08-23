<!DOCTYPE html>

<html>
    <head>
    <title>Exercicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
    <div class="container text-white bg-dark">
            <fieldset>
                <legend>1 - Calcule o modulo</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="valor01" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Verificar!</button>
                </form>
            </fieldset>
         

            <?php
                $valor01 = isset($_POST['valor01']) ? $_POST['valor01']: 0;
                echo "<br>";
                echo ($valor01 > 0) ? $valor01 ." o modulo é |" .$valor01 ."|": $valor01 ." o modulo é |" .$valor01*-1 ."|";
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

                    <button type="submit" class="btn btn-primary">Verificar!</button>
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
                <legend>4 - Calcule os valores</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="valor01" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Verificar!</button>
                </form>
            </fieldset>
         

            <?php
                $valor01 = isset($_POST['valor01']) ? $_POST['valor01']: 0;
                echo "<br>";
                echo ($valor01 > 0) ? $valor01 ." é positivo.": (($valor01 == 0) ? "O número é zero." : $valor01 ." é negativo.");
            ?>
            <br><br>
        </div>

        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

    

</html>