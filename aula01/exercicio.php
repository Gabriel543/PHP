<?php

$inteira = 10;
$real = 20.3;

echo "O valor inteiro é: " .$inteira;

echo "<br>O valor real é: " .$real;

echo "<br><br><hr><br><br>";


$letra1 = "a";
$letra2 = "l";
$letra3 = "u";
$letra4 = "n";
$letra5 = "o";
$letra6 = "s";

echo  $letra1  .$letra2 .$letra3 .$letra4 .$letra5 .$letra6;

echo "<br><br><hr><br><br>";

$assinatura = 32;
$impulsos = 0.09;
$V_impulsos = 254 - 90;
$chamadas = 0.35;
$V_chamadas = 23;



$impulsos *= $V_impulsos;
$chamadas *= $V_chamadas;
$total = $impulsos + $chamadas + $assinatura;

echo $total;


echo "<br><br><hr><br><br>";

$numa = 11;
$numb = 19;
$numc = 7;
$numMedia = ($numa + $numb + $numc) / 3;

echo $numMedia;

echo "<br><br><hr><br><br>";

$numa = 8;
$numb = 7.5;
$numc = 10;
$numd = 9;
$numMedia = ($numa + $numb*2 + $numc*3 + $numd*4) / 10;

echo $numMedia;

echo "<br><br><hr><br><br>";

$numa = 4;
$numb = 7;
$add = $numa + $numb;
$sub = $numa - $numb;
$mult = $numa * $numb;
$div = $numa / $numb;

echo $numa ." + " .$numb ." = " .$add ."<br>";
echo $numa ." - " .$numb ." = " .$sub ."<br>";
echo $numa ." * " .$numb ." = " .$mult ."<br>";
echo $numa ." / " .$numb ." = " .$div ."<br>";

echo "<br><br><hr><br><br>";

$numa = 4;
$numQuad = $numa ** 2;

echo $numa ." ** 2 = " .$numQuad ."<br>";

echo "<br><br><hr><br><br>";

$numa = 4;
$numCube = $numa ** 3;

echo $numa ." ** 3 = " .$numCube ."<br>";

echo "<br><br><hr><br><br>";

$numa = 8;
$numb = 4;
$div = $numa / $numb;
$numQuad = $numa ** 2;
$numCube = $numb ** 3;

echo $numa ." / " .$numb ." = " .$div ."<br>";
echo $numa ." ** 2 = " .$numQuad ."<br>";
echo $numb ." ** 3 = " .$numCube ."<br>";

echo "<br><br><hr><br><br>";

$numa = 5;
$divresto = 5 % 2;

echo $numa ." % 2 = " .$divresto ."<br>";

echo "<br><br><hr><br><br>";

$numa = 5;
$antecessor = $numa - 1;
$sucessor = $numa + 1;

echo "Número: " .$numa ."<br>Antecessor: " .$antecessor ."<br>Sucessor: " .$sucessor ."<br>";

echo "<br><br><hr><br><br>";

$dolar = 100;
$real = $dolar * 3.99;

echo "$ " .$dolar ."<br> R$ " .$real;

echo "<br><br><hr><br><br>";

$numa = 100;
$reajuste = $numa * 1.1;

echo "O valor sem reajuste é " .$numa ."<br>O valor com reajuste é " .$reajuste;

echo "<br><br><hr><br><br>";

$salario = 1700;
$reajuste = 13;
$salarioNovo = $salario + $salario * $reajuste/100;

echo "O salario sem reajuste é " .$salario ."<br>O salario com um reajuste de " .$reajuste ."% é" .$salarioNovo;

echo "<br><br><hr><br><br>";

$horas = 160;
$valorHora = 10;
$INSS = 15;
$salarioBruto = $horas * $valorHora;
$salarioLiquido = $salarioBruto  - ($salarioBruto  * $INSS/100);

echo "O salario bruto é : " .$salarioBruto ."<br>O salario liquido é " .$salarioLiquido;
