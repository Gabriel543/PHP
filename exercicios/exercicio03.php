<!DOCTYPE html>

<html>
    <head>
        <title>Exercicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
    <div class="container text-white bg-secondary">
            <fieldset>
                <legend>1 - Operações aritméticas</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o primeiro valor</label>
                        <input type="number" step= 1 name="a" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informe o segundo valor</label>
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
                <legend>2 - Trocar Valores</legend>
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
                if( isset($_POST['A']) && $_POST['A'] != "" && isset($_POST['B']) && $_POST['B']){
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
                <legend>3 - Valor absoluto</legend>
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
                <legend>4 - Ordenagem de valores decrescente</legend>
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
                if(isset($_POST['valor1']) && $_POST['valor1'] != "" && isset($_POST['valor2']) && $_POST['valor2'] != "" && isset($_POST['valor3']) && $_POST['valor3'] != ""){
                    $valor1 = $_POST['valor1'];
                    $valor2 = $_POST['valor2'];
                    $valor3 = $_POST['valor3'];
                    if($valor1 > $valor2 && $valor1 > $valor3){
                        if ($valor2 > $valor3){
                            echo "$valor1 -> $valor2 -> $valor3";
                        }else{
                            echo "$valor1 -> $valor3 -> $valor2";
                        }
                    }else if($valor2 > $valor3 && $valor2 > $valor1){
                        if ($valor3 > $valor1){
                            echo "$valor2 -> $valor3 -> $valor1";
                        }else{
                            echo "$valor2 -> $valor1 -> $valor3";
                        }
                    }else{
                        if ($valor1 > $valor2){
                            echo "$valor3 -> $valor1 -> $valor2";
                        }else{
                            echo "$valor3 -> $valor2 -> $valor1";
                        }
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>5 - Inverter algorismo</legend>
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
                <legend>6 - Par ou Impar</legend>
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
                <legend>7 - Número primo</legend>
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
                    $listPrimo= [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269, 271, 277, 281, 283, 293, 307, 311, 313, 317, 331, 337, 347, 349, 353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431, 433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499];
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
                <legend>8 - Peso Ideal</legend>
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
                <legend>9 - Ordenagem de valores crescentes</legend>
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
                if(isset($_POST['valor01']) && $_POST['valor01'] != "" && isset($_POST['valor02']) && $_POST['valor02'] != "" && isset($_POST['valor03']) && $_POST['valor03'] != ""){
                    $valor01 = $_POST['valor01'];
                    $valor02 = $_POST['valor02'];
                    $valor03 = $_POST['valor03'];
                    if($valor01 < $valor02 && $valor01 < $valor03){
                        if ($valor02 < $valor03){
                            echo "$valor01 -> $valor02 -> $valor03";
                        }else{
                            echo "$valor01 -> $valor03 -> $valor02";
                        }
                    }else if($valor02 < $valor03 && $valor02 < $valor01){
                        if ($valor03 < $valor01){
                            echo "$valor02 -> $valor03 -> $valor01";
                        }else{
                            echo "$valor02 -> $valor01 -> $valor03";
                        }
                    }else{
                        if ($valor01 < $valor02){
                            echo "$valor03 -> $valor01 -> $valor02";
                        }else{
                            echo "$valor03 -> $valor02 -> $valor01";
                        }
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>10 - Tabuada de um número</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor</label>
                        <input type="number" step= 1 name="tabuada" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['tabuada']) && $_POST['tabuada'] != ""){
                    $tabuada = $_POST['tabuada'];
                    for($i = 0; $i < 11; $i++)
                        echo "$tabuada * $i = " .($tabuada * $i) ."<br>";
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>11 - Quadrado no intervalo de inteiros</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o maior valor</label>
                        <input type="number" step= 1 name="maior" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o menor valor</label>
                        <input type="number" step= 1 name="menor" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['maior']) && $_POST['maior'] != "" && isset($_POST['menor']) && $_POST['menor'] != ""){
                    $maior = $_POST['maior'];
                    $menor = $_POST['menor'];
                    if($maior > $menor){
                        for($i = $menor + 1; $i < $maior; $i++)
                            echo pow($i,2) .", ";
                    }
                    
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>12 - Aplicação</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Informe o valor inicial</label>
                        <input type="number" step= 1 name="inicial" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Informe o valor desejado</label>
                        <input type="number" step= 1 name="final" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['inicial']) && $_POST['inicial'] != "" && isset($_POST['final']) && $_POST['final'] != ""){
                    $inicial = $_POST['inicial'];
                    $saldo = $inicial;
                    $final = $_POST['final'];
                    $i = 0;
                    if($final >= $inicial){
                        while($final > $saldo){
                            $saldo *= 1.05;
                            $i++;
                        }
                        echo "Com um valor inicial de R$:$inicial e rendimento de 5% ao mês, serão necessarios $i meses para atingir o valor de R$:$final<br>Saldo Final: R$:$saldo";
                    }
                    
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>13 - Lista de primos entre 1 e 100</legend>
            </fieldset>
            
            <?php
                echo "<br>";
                for($i= 1;$i < 100;$i++){
                    for($j= 1;$j < $i;$j++){
                        if($i % $j == 0 && $j != 1){
                            break;
                        }else if($j == $i-1 ){
                            echo "$i, ";
                        }
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>14 - Lista de números perfeitos entre 1 e 500</legend>
            </fieldset>
            
            <?php
                echo "<br>";
                for($i= 1;$i < 500;$i++){
                    $perfeito = 0;
                    for($j= 1;$j < $i;$j++){
                        if($i % $j == 0){
                            $perfeito += $j;
                        }
                    }
                    if($perfeito == $i){
                        echo "$i, ";
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>15 - Probabilidade da soma de dois dados dar 7</legend>
            </fieldset>
            
            <?php
                echo "<br>";
                #maior valor de um dado é 6 e o menor é 1 então não existe nenhum valor no primeiro dado que faça o resultado de 7 ser impossível
                $dado1 = 6; #total de números possiveis
                $dado2 = 6; #total de números possiveis
                $TodasPossibilidades = $dado1 * $dado2;
                $Propabilidade7 = $dado2 / $TodasPossibilidades; #Assumindo que o dado1 é jogado primeiro, o valor do dado1 é irrelevante pois só existe um valor no dado2 entre 1 e 6 que pode fazer a soma ser 7
                #Sabendo disso dividimos a probabilidade de ser 7 por todas as possibilidades

                echo "Dizemos que a probabilidade do dado ser 7 é $Propabilidade7 ou $dado2 / $TodasPossibilidades";
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>16 - Vogais na frase</legend>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Escreva uma frase</label>
                        <input type="text" name="frase" class="form-control">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['frase']) && $_POST['frase'] != ""){
                    $frase = $_POST['frase'];
                    $vogais = 0;
                    for($i = 0;$i < strlen($frase);$i++){
                        if($frase[$i] == "a" || $frase[$i] == "A" || $frase[$i] == "e" || $frase[$i] == "E" || $frase[$i] == "i" || $frase[$i] == "I" || $frase[$i] == "o" || $frase[$i] == "O" || $frase[$i] == "u" || $frase[$i] == "U"){
                            $vogais++;
                        }
                    }
                    echo "A frase tem $vogais vogais.";
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>17 - Validar CPF/CNPJ</legend>
                <form action="#" method="post">
                    <div  class="form-group">
                        <label>Informe o tipo de documento </label>
                        <select name="documento" class="form-control">
                            <option value="" default hidden></option>
                            <option value="CPF">CPF</option>
                            <option value="CNPJ">CNPJ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Digite o número do CPF/CNPJ</label>
                        <input type="number" step= 1 name="numero" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                </form>
            </fieldset>
         

            <?php
                echo "<br>";
                if(isset($_POST['documento']) && $_POST['documento'] != "" && isset($_POST['numero']) && $_POST['numero'] != ""){
                    $documento = $_POST['documento'];
                    $numero = (string)$_POST["numero"];
                    if(strlen($numero) == 11 && $documento ="CPF"){
                        echo "CPF: " .substr($numero, 0, 3) ."." .substr($numero, 3, 3) ."." .substr($numero, 6, 3) ."-" .substr($numero, 9, 2) ." Validado";
                    }else if(strlen($numero) == 14 && $documento ="CNPJ"){
                        echo "CNPJ: " .substr($numero, 0, 2) ."." .substr($numero, 2, 3) ."." .substr($numero, 5, 3) ."/" .substr($numero, 8, 4) ."-" .substr($numero, 12, 2) ." Validado";
                    }else{
                        echo "Número Invalido para o documento";
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>18 - Vetor aleatório</legend>
            </fieldset>
         

            <?php
                echo "<br>";
                $vetor = [];
                $vetor2x = [];
                for($i = 0; $i < 29;$i++){
                    $rand = rand(-1000,1000);
                    $vetor[$i] = $rand;
                    $vetor2x[$i] = $rand * 2;
                    
                }
                print_r($vetor);
                echo "<br><br>";
                print_r($vetor2x);

            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>19 - Vetores A e B</legend>
            </fieldset>
         

            <?php
                echo "<br>";
                $vetorA;
                $vetorB;
                for($i = 0; $i < 10;$i++){
                    $rand = rand(0,250);
                    $vetorA[$i] = $rand;
                }
                for($i = 0; $i < sizeof($vetorA);$i++){
                    if($vetorA[$i] < 100){
                        $vetorB[$i] = "a";
                    }else if($vetorA[$i] == 100){
                        $vetorB[$i] = "b";
                    }else if($vetorA[$i] > 100 && $vetorA[$i] < 200){
                        $vetorB[$i] = "c";
                    }else if($vetorA[$i] == 200){
                        $vetorB[$i] = "d";
                    }else{
                        $vetorB[$i] = "e";
                    }
                    
                }
                echo "Vetor A<br>";
                print_r($vetorA);
                echo "<br><br>Vetor B<br>";
                print_r($vetorB);
                

            ?>
            <br><br>
        </div>
        
        <div class="container text-white bg-dark">
            <fieldset>
                <legend>20 - Ordenação por método bolha</legend>
            </fieldset>
         

            <?php
                echo "<br>";
                $vetorBolha;

                for($i = 0; $i < 15;$i++){
                    $rand = rand(0,250);
                    $vetorBolha[$i] = $rand;
                }
                for ($i = 0; $i < sizeof($vetorBolha);$i++){
                    for ($j = 0; $j < sizeof($vetorBolha) - 1;$j++){
                        if($vetorBolha[$j +1] <= $vetorBolha[$j]){
                            $aux = $vetorBolha[$j];
                            $vetorBolha[$j] = $vetorBolha[$j + 1];
                            $vetorBolha[$j + 1] = $aux;
                        }
                    }
                }
                echo "Vetor Ordernado<br>";
                print_r($vetorBolha);

            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>21 - Ordenação por método de seleção</legend>
            </fieldset>
         

            <?php
                echo "<br>";
                $vetorSelecao;

                for($i = 0; $i < 15;$i++){
                    $rand = rand(0,250);
                    $vetorSelecao[$i] = $rand;
                }
                for ($i = 0; $i < sizeof($vetorSelecao) - 1;$i++){
                    for ($j = $i+1; $j < sizeof($vetorSelecao);$j++){
                        $min = $i;
                        if($vetorSelecao[$j] < $vetorSelecao[$min]){
                            $min = $j;
                        }
                        if($vetorSelecao[$i] != $vetorSelecao[$min]){
                            $aux = $vetorSelecao[$i];
                            $vetorSelecao[$i] = $vetorSelecao[$min];
                            $vetorSelecao[$min] = $aux;
                        }
                    }

                }
                echo "Vetor Ordernado<br>";
                print_r($vetorSelecao);

            ?>
            <br><br>
        </div>

        <div class="container text-white bg-dark">
            <fieldset>
                <legend>22 - Archar elemento no vetor</legend>
            </fieldset>
         

            <?php
                echo "<br>";

                $vetorExiste;
                $existe = 0;
                for($i = 0; $i < 15;$i++){
                    $rand = rand(0,10);
                    $vetorExiste[$i] = $rand;
                }
                for ($i = 0; $i < sizeof($vetorExiste);$i++){
                    if($vetorExiste[$i] == $existe){
                        echo "O valor $existe existe no vetor:<br>";
                        print_r($vetorExiste);
                        break;
                    }else if($i == sizeof($vetorExiste) - 1){
                        echo "O valor $existe não existe no vetor:<br>";
                        print_r($vetorExiste);
                        break;
                    }
                }
            ?>
            <br><br>
        </div>

        <div class="container text-white bg-secondary">
            <fieldset>
                <legend>23 - Verificar elementos pares do vetor</legend>
            </fieldset>
         

            <?php
                echo "<br>";

                $vetorPar;
                for($i = 0; $i < 15;$i++){
                    $rand = rand(0,10);
                    $vetorPar[$i] = $rand;
                }
                for ($i = 0; $i < sizeof($vetorPar);$i++){
                    if($vetorPar[$i] % 2 != 0){
                        echo "Elemento impar achado no vetor:<br>";
                        print_r($vetorPar);
                        break;
                    }else if($i == sizeof($vetorPar) - 1){
                        echo "Todos os elementos são pares:<br>";
                        print_r($vetorPar);
                        break;
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