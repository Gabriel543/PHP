<?php
    require('./tipoComidaCRUD.php');
    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE CURSO
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['login'])) {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        
        if(createTipo($nome)) {
            header('Location: cadastrosCardapio.php');
        } else {
            echo "Falha ao gravar o tipo";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrosCardapio.php');
    }