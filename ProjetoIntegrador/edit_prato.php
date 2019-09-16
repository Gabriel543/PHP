<?php 

    require_once './pratoCRUD.php';

    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['HTTP_REFERER'] == "http://localhost/PHP/ProjetoIntegrador/listarCardapio.php"){
            $id = filter_input(INPUT_POST,'txtIdPrato');
            $nome = filter_input(INPUT_POST,'txtPratoNome');
            $descricao = filter_input(INPUT_POST,'txtDescricao');
            $precoP = filter_input(INPUT_POST,'txtPrecoP');
            $precoM = filter_input(INPUT_POST,'txtPrecoM');
            $precoG = filter_input(INPUT_POST,'txtPrecoG');
            $tipoComida_id = filter_input(INPUT_POST,'txtTipoComida_id');

            atualizaPrato($nome,$descricao,$precoP,$precoM,$precoG,$tipoComida_id,$id);
            exit;
        }
    }

    header('index.php');

    function atualizaPrato($nome,$descricao,$precoP,$precoM,$precoG,$tipoComida_id,$id){
        if(updatePrato($nome,$descricao,$precoP,$precoM,$precoG,$tipoComida_id,$id)){
            echo "Prato atualizado com sucesso!<br>";
            echo "<a href='listarCardapio.php'>Voltar a lista</a>";
        }else{
            echo "Falha ao atualizar o prato.<br>";
            echo "<a href='listarCardapio.php'>Voltar a lista</a>";
        }
    }