<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Site em PHP</title>

    <!-- CDN CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
        <div class="container d-flex justify-content-center">
            <div class="wrapper">
                <h2 class="mb-5 mt-3">Desenvolvimento de site em PHP</h2>
                <div class="row">
                    <div class="jumbotron">
                        <h3>Vantagens de desenvolvedor com o PHP</h3>
                        <ul>
                            <li>Praticidade</li>
                            <li>Flexibilidade</li>
                            <li>Reutilização de código</li>
                            <li>Sites dinânimicos</li>
                            <li>Facilidade de integração com outras tecnologias</li>
                        </ul>
                    </div>
                </div>

                <div class="row bg-secondary p-2 text-white">
                    <fieldset>
                        <form action="#" method="get">

                            <div class="form-group">
                                <label for="id_nome">Nome</label>
                                <input type="text" class="form-control" placeholder="Informe o nome" required id="id_nome" name="txtNome">
                            </div>

                            <div class="form-group">
                                <label for="id_email">E-mail</label>
                                <input type="email" class="form-control" placeholder="Informe o nome" required id="id_email" name="txtEmail">
                            </div>

                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <div class="row bg-secondary p-2 text-white">
                    <fieldset>
                        <form action="#" method="post">

                            <div class="form-group">
                                <label for="id_nome">Nome</label>
                                <input type="text" class="form-control" placeholder="Informe o nome" required id="id_nome" name="txtNome">
                            </div>

                            <div class="form-group">
                                <label for="id_email">E-mail</label>
                                <input type="email" class="form-control" placeholder="Informe o nome" required id="id_email" name="txtEmail">
                            </div>

                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <!-- 
                    document.getElementBy("id_nome").value
                    querySelector("#id_nome")

                    # Resgatar valores de um formulário
                    Array Global $_POST e $_GET
                 -->

                <p>Nome: <?= empty($_GET['txtNome'])? "" : $_GET['txtNome'];?></p>
                <p>Email: <?= isset($_GET['txtEmail'])? $_GET['txtEmail'] : "";?></p>
                <p>Nome: <?= empty($_POST['txtNome'])? "" : $_GET['txtNome'];?></p>
                <p>Email: <?= isset($_POST['txtEmail'])? $_GET['txtEmail'] : "";?></p>
            </div>
        </div>


    </body>

</html>