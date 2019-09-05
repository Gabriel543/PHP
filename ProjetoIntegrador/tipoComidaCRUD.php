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

    
