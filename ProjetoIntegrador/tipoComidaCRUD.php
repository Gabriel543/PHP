<?php
    require('./conexao.php');

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

    
