<?php
    require('./conexao.php');
    ## ARQUIVO RESPONSÁVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DEDOS ##

    # Função responsável por inserir os dados no banco
    function createCurso($nome){
        //recebe o retorno da função com a conexão aberta
        $link = abreConexao();

        // variavel responsável por definir a query SQL a ser disparada no banco
        $query = "insert into tb_curso(nome) values ('{$nome}')";

        // ideal é fazer um tratamento de erro e exceção

        try{
            if(mysqli_query($link,$query)){
                return TRUE;
            }
        
        }catch(\Throwable $th){ // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao gravar no banco",1);
            return FALSE;
        }finally{ // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }

    


