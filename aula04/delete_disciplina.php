<?php 

    require './disciplinaCRUD.php';
    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['HTTP_REFERER'] == "http://localhost/php/aula04/listar_disciplina.php"){
            $id = filter_input(INPUT_GET,'id');
            excluirDisciplina($id);
            exit;
        }
    }
    
    
    header('index.php');

    function excluirDisciplina($id){
        if(deleteDisciplina($id)){
            echo "Excluído com sucesso<br>";
            echo "<a href='listar_disciplina.php'>Voltar a lista</a>";
        }else{
            echo "Erro ao excluir<br>";
            echo "<a href='listar_disciplina.php'>Voltar a lista</a>";
        }
    }