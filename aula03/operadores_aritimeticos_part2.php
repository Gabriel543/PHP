<?php

/*
Operadores aritméticos de atribuiçãp

+= acumula o valor de uma variável somando-a de um novo valor.
-= acumula o valor de uma variável subtarindo-a de um valor.
*= acumula o valor de uma variável multiplicando-a de um valor.
/= acumula o valor de uma variável dividindo-a de um valor.
%= acumula o valor de uma variável somando com o resto de sua divisão por um outro valor dividindo-a de um valor.
++ incrementador (soma + 1 ao valor da variável).
-- decrementador (subtrai -1 ao valor da variável).
*/

#atribuição (multiplicar)
// exemplo x*= y

// declaração da variável
$x =10;

// forma normal
$x = $x * 5;

// forma simplificada (atribuição com multiplicar)
$x *= 5;

//impressão
echo $x;

echo "<br><br><hr><br><br>";

#atribuição (divisão)
// exemplo x/= y

// declaração da variável
$x =10;

// operação de atribuição com divisão
$x /= 5;

//impressão
echo $x;

echo "<br><br><hr><br><br>";

#atribuição (soma)
// exemplo x+= y

// declaração da variável
$x =10;

// operação de atribuição com soma
$x += 5;

//impressão
echo $x;

echo "<br><br><hr><br><br>";

#incrementador
// exemplo x++ ou ++x

//declaração da variável
$a = 18;

//operação de incrementação
$a++; // %a +=1; --> $a = $a +1;
++$a;

//impressão
echo $a;

echo "<br><br><hr><br><br>";

## 2º exemplo

$b = 3;
$c = $b++;
$d = ++$b;

echo $b;
echo "<br>$c";
echo "<br>$d";


echo "<br><br><hr><br><br>";

$x =32;
$y = 612;
$z;
$z = 27;
$x = ++$y + $z--; // x = 613 + 27 = 640 |y = 613| z = 26
$y = $x * ++$z; // y = 640 * 27| x = 640 | z = 27
$z += $x; // z = 640 + 27 = 667 | x = 640
$a = ++$z; // z = 668 | a = 668