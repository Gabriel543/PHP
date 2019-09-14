<?php 

    require_once './professorCRUD.php';

    IF(isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['HTTP_REFERER'] == "http://localhost/php/aula04/listar_professor.php"){
            $id = filter_input(INPUT_POST,'txtId');
            $nome = filter_input(INPUT_POST,'txtNome');
            $cpf = filter_input(INPUT_POST,'txtCpf');
            $telefone = filter_input(INPUT_POST,'txtTelefone');
            atualizaProfessor($id,$nome,$cpf,$telefone);
            exit;
        }
    }

    function atualizaProfessor($id,$nome,$cpf,$telefone){
        if(updateProfessor($id,$nome,$cpf,$telefone)){
            echo "professor atualizado com sucesso!<br>";
            echo "<a href='listar_professor.php'>Voltar a lista</a>";
        }else{
            echo "Falha ao atualizar o professor.<br>";
            echo "<a href='listar_professor.php'>Voltar a lista</a>";
        }
    }