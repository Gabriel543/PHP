<?php include './header.php'?>
    <style>
        input.elemento{
            margin-bottom: 20px;
            width: 100%;
            border-radius: 5px;
            
            
        }
        textarea{
            border-radius: 5px;
            width: 100%;
            resize: none;
            height: 8em;
            
            
        }
        
        input.sub{
            font-size: 40px;
            font-weight: bold;
            color: white;
            background-color: black;
        }
        div.divmain{
            background-color: aliceblue;
            border-radius: 10px;
            
        }
        form div p{
            margin-bottom: 0;
        }
        
        
    </style>
    
                
            </div>
            <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1 class="jumbotron">Fale Conosco</h1>
             </div> 
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="divmain">
                        <div class="col-lg-10 col-sm-12 container">
                            <form action="contatoFormulario.php" method="post">
                                <div class="col-12" class="form-group">
                                    <p>Nome (Obrigatório)</p>
                                    <input class="elemento form-control" name="txtNome" type="text" required>
                                </div>
                                <div class="col-12" class="form-group">
                                    <p>E-mail (Obrigatório)</p>
                                    <input class="elemento form-control" name="txtEmail" type="email" required>
                                </div>
                                <div class="col-12" class="form-group">
                                    <p>Assunto</p>
                                    <input class="elemento form-control" name="txtAssunto" type="text"required>
                                </div>
                                <div class="col-12" class="form-group">
                                    <p>Mensagem (Obrigatório)</p>
                                    <textarea name="txtMensagem" cols="40" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="col-12">
                                    <input  type="submit" class="sub elemento" value="Enviar" style="margin-top: 10px;">
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
            
            <div style="height: 30px;"></div>
            
<?php include './footer.php'?>