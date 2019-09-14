<?php 

    require_once './disciplinaCRUD.php';

    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['HTTP_REFERER'] == "http://localhost/php/aula04/listar_disciplina.php"){
            $id = filter_input(INPUT_POST,'txtId');
            $nome = filter_input(INPUT_POST,'txtNome');
            $descricao = filter_input(INPUT_POST,'txtDescricao');
            atualizaDisciplina($id,$nome,$descricao);
            exit;
        }
    }

    function atualizaDisciplina($id,$nome,$descricao){
        if(updateDisciplina($id,$nome,$descricao)){
            echo "Disciplina atualizado com sucesso!<br>";
            echo "<a href='listar_disciplina.php'>Voltar a lista</a>";
        }else{
            echo "Falha ao atualizar o disciplina.<br>";
            echo "<a href='listar_disciplina.php'>Voltar a lista</a>";
        }
    }