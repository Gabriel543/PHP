<?php 

If($_SERVER["REQUEST_METHOD"] === "POST"){
    $senha = filter_input(INPUT_POST, "txtSenha") ?? "";
    $email = filter_input(INPUT_POST, "txtEmail");

    echo "$senha <br> $email";
}else{
    header("location: index.php");
}
