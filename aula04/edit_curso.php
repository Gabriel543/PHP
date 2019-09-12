<?php 

    require_once './cursoCRUD.php';

    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['HTTP_REFERER'] == "http://localhost/php/aula04/listar_curso.php"){
            $id = filter_input(INPUT_POST,'txtId');
            $curso = filter_input(INPUT_POST,'txtNome');
            atualizaCurso($id,$curso);
            exit;
        }
    }

    function atualizaCurso($id,$curso){
        if(updateCurso($id,$curso)){
            echo "Curso atualizado com sucesso!<br>";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        }else{
            echo "Falha ao atualizar o curso.<br>";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        }
    }