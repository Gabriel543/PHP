<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nomeLogin = filter_input(INPUT_POST, "txtNome") ?? "";
        $email = filter_input(INPUT_POST, "txtEmail");
        $senha = filter_input(INPUT_POST, "txtSenha");
        
    
    } else {
        # redirecionamento de página
        header('Location: index.php');
    }