<?php

/* Estrutura de decisão. Na programação temos algumas formas de desenvolver uma estrutura de decisão:
    Tais como:
        - Estrutura Simples
        - Estrutura Composta
        - Estrutura Encadeada
        - Estrutura Compacta
        - Estrutura Ternária
        - Estrutura Multipla
*/

# Estrutura Simples: é dada por uma única ação.

$idade = 18;

# No português estruturado (portugol) SE
if($idade >= 18){
    echo "Pode ir a festa<br>";
}

echo "<br><br><hr><br><br>";
#Estrutura Composta: é dada por mais de uma ação.

# No português estruturado (portugol) SE, SENÃO
if($idade >= 18){
    echo "Pode ir a festa<br>";
}else{
    echo "Não tem idade apropriada<br>";
}

echo "<br><br><hr><br><br>";
#Estrutura Encadeada: é dada por mais de uma ação.

# No português estruturado (portugol) SE, SENÃO-SE, [SENÃO opcional]
$materia = "PHP com Banco de Dados";

if($materia == "Java"){
    echo "Linguaguem orientada a objestos<br>";
}else if($materia == "Linguagem de scripts"){
    echo "Linguagem web com aplicações<br>";
}elseif($materia == "PHP com Banco de Dados"){
    echo "Linguagem procedural web<br>";
}else{
    echo "Não é materia de programação<br>";
}

echo "<br><br><hr><br><br>";

#Estrutura Compacta: é dada pela ausencia das chaves;
# pode ser usada em estruras: simples, composta, encadeada e estruturas de repetição

if($idade >= 18)
    echo "Pode ir a festa<br>";
else
    "Não tem idade apropriada<br>";

// OBS: Essa estrutura só funciona QUANDO o contéudo de linha de bloco do if/else é somente 1 linha.

echo "<br><br><hr><br><br>";

#Estrutura Ternária: É dada por definir a estrutura composto em 1 única linha

echo($idade >= 18) ? "Pode ir a festa<br>": "Não tem idade apropriada<br>";

echo "<br><br><hr><br><br>";

#Decisão Múltipla: é dada definir casos de teste

$opção = 3;

switch($opção){
    case 1 :
        echo "A soma dos valores é" .(1+2) ;
        break;
    case 2 :
        echo "A multiplicação dos valores é" .(1*2);
        break;
    case 3 :
        echo "O modulo dos valores é" .(1%2);
        break;
    default:
        echo "Opção invalida";
        break;
}
echo "<br>";