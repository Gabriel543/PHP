<?php 

    require './cursoCRUD.php';
    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['HTTP_REFERER'] == "http://localhost/php/aula04/listar_curso.php"){
            $id = filter_input(INPUT_GET,'id');
            excluirCurso($id);
            exit;
        }
    }
    
    
    header('index.php');

    function excluirCurso($id){
        if(deleteCurso($id)){
            echo "Excluído com sucesso<br>";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        }else{
            echo "Erro ao excluir<br>";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        }
    }