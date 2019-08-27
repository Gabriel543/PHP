<?php 

If($_SERVER["REQUEST_METHOD"] === "POST"){
    $senha = filter_input(INPUT_POST, "txtSenhaOriginal") ?? "";
    $senhaCopia = filter_input(INPUT_POST, "txtSenhaCopia") ?? "";
    $email = filter_input(INPUT_POST, "txtEmail");

    echo "$senha<br>$senhaCopia<br>$email";
}else{
    header("location: index.php");
}
