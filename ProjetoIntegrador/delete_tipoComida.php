<?php 

    require './tipoComidaCRUD.php';
        IF(isset($_SERVER['HTTP_REFERER'])){
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['HTTP_REFERER'] == "http://localhost/PHP/ProjetoIntegrador/listarCardapio.php"){
                $id = filter_input(INPUT_GET,'id');
                excluirTipo($id);
                exit;
            }
        }

        header('index.php');

    function excluirTipo($id){
        if(deleteTipo($id)){
            echo "Excluído com sucesso<br>";
            echo "<a href='listarCardapio.php'>Voltar a lista</a>";
        }else{
            echo "Erro ao excluir<br>";
            echo "<a href='listarCardapio.php'>Voltar a lista</a>";
        }
    }