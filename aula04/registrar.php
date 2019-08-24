<?php

/*$nome = $_POST['txtNome'];
$preco = $_POST['txtQtd'];
$quantidade = $_POST['txtPreco'];
$imagem = $_POST['flImg'];*/

$nome = filter_input(INPUT_POST, "txtNome");
$preco = filter_input(INPUT_POST, "txtQtd");
$quantidade = filter_input(INPUT_POST, "txtPreco");
$imagem = filter_input(INPUT_POST, "flImg");


echo "$nome <br> $quantidade <br> $preco <br> $imagem";