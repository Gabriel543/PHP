<?php
    session_start();
    require_once('./loginCRUD.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nomeLogin = filter_input(INPUT_POST, "txtNome") ?? "";
        $email = filter_input(INPUT_POST, "txtEmail");
        $senhaOriginal = filter_input(INPUT_POST, "txtSenhaOriginal");
        $senhaCopia = filter_input(INPUT_POST, "txtSenhaCopia");
        if($senhaOriginal == $senhaCopia){
            if(createLogin($nomeLogin,$email,$senhaOriginal)){
                $_SESSION['msg'] =  "Login gravado com sucesso.";
            }else{
                $_SESSION['msg'] = "Erro ao gravar Login.";
            }
        }else{
            echo 'Coloque a mesma senha das duas caixas de texto.';
        }
    
    } else {
        # redirecionamento de página
        header('Location: index.php');
    }