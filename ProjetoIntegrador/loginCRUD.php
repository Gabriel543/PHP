<?php

    require_once('./conexao.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##


# Função responsável por inserir os dados no banco
function createLogin($nomeLogin,$email,$senha) {
    // recebe o retorno da função com a conexão aberta
    $link = abreConexao();

    // variavel responsável por definir a query SQL a ser disparada no banco
    $query = "insert into tb_login values(null,'{$email}','{$nomeLogin}','{$senha}',null)";

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

function getUsuarios(){
    $link = abreConexao();
    $query = "select id_login,nomeLogin,email from tb_curso";
    try{ // Tenta executar
        $rs = mysqli_query($link,$query);
        $listaCursos = Array();
        //mysql_fetch  -> assoc,row,array
        while($linha = mysqli_fetch_assoc($rs)){
            array_push($listaCursos,$linha);
        }

        return $listaCursos;
    } catch(\Throwable $th) { 
        throw new \Exception("Erro ao listar no banco", 1);
        return Array();
    } finally { 
        mysqli_close($link);
    }
}

function checkLogin(){
    $link = abreConexao();
    $query = "select id_login,nomeLogin,email from tb_curso";
    try{ // Tenta executar
        $rs = mysqli_query($link,$query);
        $listaCursos = Array();
        //mysql_fetch  -> assoc,row,array
        while($linha = mysqli_fetch_assoc($rs)){
            array_push($listaCursos,$linha);
        }

        return $listaCursos;
    } catch(\Throwable $th) { 
        throw new \Exception("Erro ao listar no banco", 1);
        return Array();
    } finally { 
        mysqli_close($link);
    }
}
}

function deleteLogin($id){
    // recebe o retorno da função com a conexão aberta
    $link = abreConexao();

    // variavel responsável por definir a query SQL a ser disparada no banco
    $query = "delete from tb_curso where id_curso={$id}";
    try{ // Tenta executar
        if(mysqli_query($link, $query)) {
            return true;
        }
    } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
        throw new \Exception("Erro ao deletar no banco", 1);
        return false;
    } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
        mysqli_close($link);
    }
}

function updateLogin($email,$senha){
    
    $link = abreConexao();

    $query = "update tb_login set senha='{$senha}' where email = {$email}";
    try{ // Tenta executar
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