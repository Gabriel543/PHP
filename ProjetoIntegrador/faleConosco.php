<?php 

If($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = filter_input(INPUT_POST, "txtNome") ?? "";
    $email = filter_input(INPUT_POST, "txtEmail");
    $assunto = filter_input(INPUT_POST, "txtAssunto");
    $mensagem = filter_input(INPUT_POST, "txtMensagem");

    echo "Oi$nome <br> $email <br> $assunto <br> $mensagem";
}else{
    header("location: contato.php");
}
