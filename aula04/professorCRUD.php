<?php

    require('./conexao.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##

    # Função responsável por inserir os dados no banco
    function createProfessor($nome, $cpf, $telefone) {
        // recebe o retorno da função com a conexão aberta
        $link = abreConexao();
        // variavel responsável por definir a query SQL a ser disparada no banco
        $query = "insert into tb_professor(cpf, nome) values ('{$cpf}', '{$nome}')";
        try{ // Tenta executar
            if(mysqli_query($link, $query)) { // registra o professor
                $id = mysqli_insert_id($link); // resgata o ID gerado para o professor
                $query = "insert into tb_telefone(numero, professor_id) values ('{$telefone}', {$id})";
                if(mysqli_query($link, $query)) { // insere o telefone do professor
                    return true;
                }
            }
        } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao gravar no banco", 1);
            return false;
        } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }

    function getProfessor(){
        $link = abreConexao();

        $query = "select id_professor,nome,cpf,numero as 'telefone' from tb_professor inner join tb_telefone on tb_telefone.professor_id = tb_professor.id_professor;";
        try{ // Tenta executar
            $rs = mysqli_query($link,$query);
            $listaProfessor = Array();
            //mysql_fetch  -> assoc,row,array
            while($linha = mysqli_fetch_assoc($rs)){
                array_push($listaProfessor,$linha);
            }
            return $listaProfessor;
        } catch(\Throwable $th) { 
            throw new \Exception("Erro ao listar no banco", 1);
            return Array();
        } finally { 
            mysqli_close($link);
        }
    }

    function updateProfessor($id,$nome,$cpf,$telefone){
        // recebe o retorno da função com a conexão aberta
        $link = abreConexao();
        // variavel responsável por definir a query SQL a ser disparada no banco
        $query = "update tb_professor set cpf = '{$cpf}',nome = '{$nome}' where id_professor = '{$id}'";
        try{ // Tenta executar
            if(mysqli_query($link, $query)) { // registra o professor
                $query = "update  tb_telefone set numero = '{$telefone}' where professor_id = '{$id}'";
                if(mysqli_query($link, $query)) { // insere o telefone do professor
                    return true;
                }
            }
        } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao gravar no banco", 1);
            return false;
        } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }


    function deleteProfessor($id){
        $link = abreConexao();
        // variavel responsável por definir a query SQL a ser disparada no banco
        $query = "delete from tb_telefone where professor_id = '{$id}'";
        try{ // Tenta executar
            if(mysqli_query($link, $query)) { // registra o professor
                $query = "delete from tb_professor where id_professor = {$id}";
                if(mysqli_query($link, $query)) { // insere o telefone do professor
                    return true;
                }
            }
        } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao deletar no banco", 1);
            return false;
        } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }
    
