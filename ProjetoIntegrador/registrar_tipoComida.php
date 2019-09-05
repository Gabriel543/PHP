<?php
    require('./tipoComidaCRUD.php');
    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE CURSO
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        
        if(createTipo($nome)) {
            echo "Tipo gravado com sucesso";
        } else {
            echo "Falha ao gravar o tipo";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrar_curso.php');
    }