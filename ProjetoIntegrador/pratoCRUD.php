<?php
    require_once('./conexao.php');

    function createPrato($nome,$descricao,$precoP,$precoM,$precoG,$tipo){
        $link = abreConexao();

        $query = "insert into tb_prato values(null,'{$nome}','{$descricao}',{$precoP},{$precoM},{$precoG},{$tipo})";
        echo $query;

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
    function getPrato(){
        $link = abreConexao();
        $query = "select * from tb_prato ORDER BY id_prato ASC;";
        try{ // Tenta executar
            $rs = mysqli_query($link,$query);
            $listaPrato = Array();
            while($linha = mysqli_fetch_assoc($rs)){
                array_push($listaPrato,$linha);
            }
            return $listaPrato;
        } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao ler no banco", 1);
            return Array();
        } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }

    function getPratoByTipo($tipoComida_id){
        
        $link = abreConexao();
        $query = "select * from tb_prato where tipoComida_id = {$tipoComida_id} ORDER BY id_prato ASC;";
        try{ // Tenta executar
            $rs = mysqli_query($link,$query);
            $listaPrato = Array();
            while($linha = mysqli_fetch_assoc($rs)){
                array_push($listaPrato,$linha);
            }
            return $listaPrato;
        } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao ler no banco", 1);
            return Array();
        } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }

    function deletePrato($id){
        // recebe o retorno da função com a conexão aberta
        $link = abreConexao();
    
        // variavel responsável por definir a query SQL a ser disparada no banco
        $query = "delete from tb_prato where id_prato={$id}";
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
    
    function updatePrato($nome,$descricao,$precoP,$precoM,$precoG,$tipoComida_id,$id){
        
        $link = abreConexao();
    
        $query = "update tb_prato set nomePrato='{$nome}',descricaoPrato='{$descricao}',precoP = {$precoP},precoM = {$precoM},precoG={$precoG},tipoComida_id={$tipoComida_id} where id_prato = {$id};";
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

    
