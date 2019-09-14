<?php

    require_once('./conexao.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##


# Função responsável por inserir os dados no banco
function createDisciplina($nome,$descricao) {
    // recebe o retorno da função com a conexão aberta
    $link = abreConexao();

    // variavel responsável por definir a query SQL a ser disparada no banco
    $query = "insert into tb_disciplina(nome,descricao) values('{$nome}','{$descricao}')";
    try{ // Tenta executar
        if(mysqli_query($link, $query)) {
            return true;
        }
    } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
        throw new \Exception("Erro ao gravar no banco", 1);
        return false;
    } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
        mysqli_close($link);
    }
}

function getDisciplina(){
    $link = abreConexao();
    $query = "select * from tb_disciplina";
    try{ // Tenta executar
        $rs = mysqli_query($link,$query);
        $listaDisciplina = Array();
        //mysql_fetch  -> assoc,row,array
        while($linha = mysqli_fetch_assoc($rs)){
            array_push($listaDisciplina,$linha);
        }

        return $listaDisciplina;
    } catch(\Throwable $th) { 
        throw new \Exception("Erro ao listar no banco", 1);
        return Array();
    } finally { 
        mysqli_close($link);
    }
}

function deleteDisciplina($id) {
    $link = abreConexao();
    $query = "delete from tb_disciplina where id_disciplina = {$id}";
    try{
        if(mysqli_query($link, $query)) {
            return true;
        }
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao deletar no banco", 1);
        return false;
    } finally {
        mysqli_close($link);
    }
}
# Função responsável por atualizar o Disciplina
function updateDisciplina($id_disciplina, $nome, $descricao) {
   $link = abreConexao();
   $query = "update tb_disciplina set nome = '{$nome}', descricao = '{$descricao}' where id_disciplina = {$id_disciplina}";
   try{
       if(mysqli_query($link, $query)) {
           return true;
       }
   } catch(\Throwable $th) {
       throw new \Exception("Erro ao atualizar no banco", 1);
       return false;
   } finally {
       mysqli_close($link);
   }
}