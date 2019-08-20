<?php

$numa = -1;

echo ($numa >= 0) ? $numa ." é positivo.": $numa ." é negativo.";

echo "<br><br><hr><br><br>";

$numa = 16;

echo ($numa % 2 == 0) ? $numa ." é par.": $numa ." é impar.";

echo "<br><br><hr><br><br>";

$numa = 8;
$numb = 4;

echo($numa % $numb == 0) ? $numa ." é multiplo de " .$numb : $numa ." não  é multiplo de " .$numb;

echo "<br><br><hr><br><br>";

$numa = 0;

echo ($numa > 0) ? $numa ." é positivo.": (($numa == 0) ? "O número é zero." : $numa ." é negativo.");

echo "<br><br><hr><br><br>";

$numa = 17;

echo ($numa > 5 and $numa < 20)? $numa ." está no intervalo entre 5 e 20." : $numa ." não está no intervalo entre 5 e 20.";

echo "<br><br><hr><br><br>";

$numa = 2;
$numb = 13;

echo ($numa > $numb)? $numa ." + " .$numb ." = " .($numa + $numb) : $numa ." * " .$numb ." = " .($numa * $numb);

echo "<br><br><hr><br><br>";

$numa = 7;
$numb = 5;

echo ($numa > $numb) ? $numa ." > " .$numb : (($numa == $numb) ?  $numa ." = " .$numb :  $numa ." < " .$numb);

echo "<br><br><hr><br><br>";

$numa = 2004;

echo($numa % 400 == 0) ? $numa ." é bissexto.": (($numa % 4 == 0 and $numa % 100 != 0) ? $numa ." é bissexto." : $numa ." não é bissexto.");

echo "<br><br><hr><br><br>";

$numerador = 5;
$denominador  = 2;

echo($denominador != 0)? $numerador ." / " .$denominador ." = " .($numerador/$denominador) : $numerador ." / " .$denominador ." não é uma operação valida.";

echo "<br><br><hr><br><br>";

$salario = 2000;
$prestação = 401;

echo ($prestação > $salario * 0.2) ? "Empréstimo não pode ser concedido." : (($prestação == $salario * 0.2)? "Empréstimo em analise." : "Empréstimo pode ser concedido.");