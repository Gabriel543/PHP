<footer>
                    <div class="line">

                        <div class="s-12 m-6 l-4">			 
                        <p class="aligcen">
                Rua Francisco da Cruz Nunes - Itaipu<br>
                Nitéroi - Rj<br>
                (21) 0000 0000 / 0000 0000<br>
                (21) 90000-0000 / 90000 0000</p>		 
                        </div>	

                <div class="s-12 hide-m hide-l">
                <div class="pula20"></div>
                </div>

                        <div class="s-12 m-6 l-4">			 
                        <p class="aligcen">
                Horário de funcionamento<br>
                domingo à quinta das 17:00H as 24:00H<br>
                sexta à sábado das 17:00H as 1:00H.</p>		 
                        </div>			

                    <div class="s-12 m-12 hide-l">
                <div class="pula30"></div>
                </div>

                        <div class="s-12 m-12 l-4">			 

                        <div style="display: table; margin: 0 auto;">	

                <a href="" target=""><i class="fab fa-facebook-square fa-5x"></i></a>
                            
                <a href="" target=""><i class="fab fa-instagram fa-5x"></i></a>
                
                <a href="" target=""><i class="fab fa-twitter fa-5x"></i></a>
                </div>
                        </div>				

                    <div class="pula40"></div>					 

                        <div class="s-12 l-6 aliright">
                        <p class="aliright">© 2019, Pizzaria Gourmet</p>
                        </div>

                        <div class="s-12 l-6">
                        </div>

                    </div>	
                </footer>
            
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      
                    <form  method="post" action="loginFormulario.php">
                      <div class="form-group" action="loginFormulario.php">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="txtEmail" required>
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" placeholder="Senha" name="txtSenha" required>
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Logar</button>
                    </form>
                      
                  </div>
                  <div class="modal-footer">
                      
                        <button type="button" class="btn btn-secondary" data-toggle="modal" href="#esqueciasenha" data-dismiss="modal">Esqueci a senha</button>
                        <button type="button" href="#cadastre-se" data-toggle="modal" data-dismiss="modal" class="btn btn-primary">Cadastre-se</button>
                      
                  </div>
                </div>
              </div>
            </div>
        
            <div class="modal fade" id="cadastre-se" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form  method="post" action="cadastroFormulario.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="txtEmail" required>
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" placeholder="Senha" name="txtSenhaOriginal" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Repita a Senha</label>
                        <input type="password" class="form-control" placeholder="Senha" name="txtSenhaCopia" required>
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="modal fade" id="esqueciasenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Esqueci a Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="EsqueciSenha.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="txtEmail" required>
                        <small id="emailHelp" class="form-text text-muted">Enviaremos o link para o seu e-mail.</small>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
            
            
        </main> 
        <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>