<?php
    require_once('./conexao.php');

    function createTipo($nome){
        $link = abreConexao();

        $query = "insert into tb_tipoComida(nome) values ('{$nome}')";

        try{
            if(mysqli_query($link,$query)){
                return TRUE;
            }
        
        }catch(\Throwable $th){ 
            throw new \Exception("Erro ao gravar no banco",1);
            return FALSE;
        }finally{ 
            mysqli_close($link);
        }
    }

    function getTipo(){
        $link = abreConexao();
        $query = "select * from tb_tipoComida ORDER BY id_tipoComida ASC;";
        try{ // Tenta executar
            $rs = mysqli_query($link,$query);
            $listaTipos = Array();
            while($linha = mysqli_fetch_assoc($rs)){
                array_push($listaTipos,$linha);
            }
            return $listaTipos;
        } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao ler no banco", 1);
            return Array();
        } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }


    function deleteTipo($id){
        $link = abreConexao();
        // variavel responsável por definir a query SQL a ser disparada no banco
        $query = "delete from tb_prato where tipoComida_id = '{$id}'";
        try{ // Tenta executar
            if(mysqli_query($link, $query)) { // registra o professor
                $query = "delete from tb_tipoComida where id_tipoComida = {$id}";
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
    
    function updateTipo($nome,$id){
        
        $link = abreConexao();
    
        $query = "update tb_tipoComida set nome='{$nome}' where id_tipoComida = {$id};";
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