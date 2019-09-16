<?php 

    require_once './tipoComidaCRUD.php';

    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['HTTP_REFERER'] == "http://localhost/PHP/ProjetoIntegrador/listarCardapio.php"){
            $id = filter_input(INPUT_POST,'txtId');
            $nome = filter_input(INPUT_POST,'txtNome');
            atualizaTipo($nome,$id);
            exit;
        }
    }

    header('index.php');

    function atualizaTipo($nome,$id){
        if(updateTipo($nome,$id)){
            echo "Tipo atualizado com sucesso!<br>";
            echo "<a href='listarCardapio.php'>Voltar a lista</a>";
        }else{
            echo "Falha ao atualizar o tipo.<br>";
            echo "<a href='listarCardapio.php'>Voltar a lista</a>";
        }
    }