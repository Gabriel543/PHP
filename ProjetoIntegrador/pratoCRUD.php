<?php
    require('./conexao.php');

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

    function getID(){

    }

    function getPrato(){
        $link = abreConexao();
        $query = "select * from tb_prato ORDER BY id_tipoComida ASC;";
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

    
