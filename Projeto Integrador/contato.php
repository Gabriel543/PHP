<?php include './header.php'?>
    <style>
        input{
            margin-bottom: 20px;
            width: 100%;
            border-radius: 5px;
            border: solid 1px black;
            
        }
        textarea{
            border-radius: 5px;
            width: 100%;
            resize: none;
            height: 8em;
            border: solid 1px black;
            
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
                            <form method="post">
                                <div class="col-12">
                                    <p>Nome (Obrigatório)</p>
                                    <input name="nome" type="text" required>
                                </div>
                                <div class="col-12">
                                    <p>E-mail (Obrigatório)</p>
                                    <input name="email" type="email" required>
                                </div>
                                <div class="col-12">
                                    <p>Assunto</p>
                                    <input name="assunto" type="text">
                                </div>
                                <div class="col-12">
                                    <p>Mensagem (Obrigatório)</p>
                                    <textarea name="mensagem" cols="40" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <input  type="submit" class="sub" value="Enviar">
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
            
            <div style="height: 30px;"></div>
            
<?php include './footer.php'?>