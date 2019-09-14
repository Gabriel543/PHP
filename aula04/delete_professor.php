<?php 

    require './professorCRUD.php';
    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['HTTP_REFERER'] == "http://localhost/php/aula04/listar_professor.php"){
            $id = filter_input(INPUT_GET,'id');
            excluirProfessor($id);
            exit;
        }
    }
    
    
    header('index.php');

    function excluirProfessor($id){
        if(deleteProfessor($id)){
            echo "Excluído com sucesso<br>";
            echo "<a href='listar_professor.php'>Voltar a lista</a>";
        }else{
            echo "Erro ao excluir<br>";
            echo "<a href='listar_professor.php'>Voltar a lista</a>";
        }
    }