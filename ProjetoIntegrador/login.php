<?php 
    require_once './loginCRUD.php';
    session_start();
    $target = $_SERVER['HTTP_REFERER'];
    

    $email = filter_input(INPUT_POST, "txtEmail",FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "txtSenha", FILTER_SANITIZE_SPECIAL_CHARS);

    if($_SESSION['login'] = checkLogin($email,$senha)){
        $_SESSION['status'] = 'notice'; // Tem o valor do tipo da notificação
        $_SESSION['msg'] = 'Bem Vindo ao Sistema'; // valor da msg a ser notificada
        header('Location:' .$target);
    }else{
        unset($_SESSION['login']); // deleta o valor da variavel
        session_unset(); // remove toda a sessão
        $_SESSION['status'] = 'error';
        $_SESSION['msg'] = 'Falha ao efetuar login';
        header('Location:' .$target);
    }