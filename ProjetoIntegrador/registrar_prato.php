<?php
    require('./pratoCRUD.php');
    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE CURSO
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        $descricao = filter_input(INPUT_POST, "txtDescricao") ?? "";
        $precoP = filter_input(INPUT_POST, "precoP") ?? "";
        $precoM = filter_input(INPUT_POST, "precoM") ?? "";
        $precoG = filter_input(INPUT_POST, "precoG") ?? "";
        $tipo= filter_input(INPUT_POST, "txtTipo") ?? "";
        
        if(createPrato($nome,$descricao,$precoP,$precoM,$precoG,$tipo)) {
            header('Location: cadastrosCardapio.php');
        } else {
            echo "Falha ao gravar o Prato";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrosCardapio.php');
    }