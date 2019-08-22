<!DOCTYPE html>

<html>
    <head>
    <title>Exercicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container text-white bg-dark">
            <fieldset>
                <legend>Calcule os valores</legend>
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
                <legend>Calcule o salario final</legend>
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