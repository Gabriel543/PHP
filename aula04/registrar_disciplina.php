<?php
    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE PRODUTO

    /*$nome = $_POST['txtNome'];
    $quantidade = $_POST['txtQtd'];
    $preco = $_POST['txtPreco'];
    $imagem = $_POST['flImg'];*/

    include_once('./disciplinaCRUD.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome= filter_input(INPUT_POST, "txtNome") ?? "";
        $descricão = filter_input(INPUT_POST, "txtDescricao");
        if(createDisciplina($nome,$descricão)){
            echo "Disciplina cadastrada com sucesso";
        }else{
            echo "Erro ao cadastrar .";
        }

    } else {
        # redirecionamento de página
        header('Location: cadastrar_disciplina.php');
    }