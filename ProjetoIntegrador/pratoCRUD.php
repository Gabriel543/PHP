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

    
