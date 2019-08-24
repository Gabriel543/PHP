<?php include './header.php' ?>
    <div class="container mt-3">
        <table class="table table-striped table-hover text-centerr">
            <thead>
                <tr>
                    <th>#<th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estrutura de array-->
                <?php
                    $lista = array(
                        array(
                            "id" => 1,
                            "nome" => "Caneta",
                            "quantidade" => "100 un",
                            "preço" => 10.90,
                            "Imagem" => "prod1"
                        ),
                        array(
                            "id" => 2,
                            "nome" => "Lapis",
                            "quantidade" => "250 un",
                            "preço" => 3.50,
                            "Imagem" => "prod2"
                        ),
                        array(
                            "id" => 3,
                            "nome" => "Borracha",
                            "quantidade" => "132 un",
                            "preço" => 0.45,
                            "Imagem" => "prod3"
                        )
                    );
                    
                    $array = array(
                        "id" => 3,
                            "nome" => "Apagador",
                            "quantidade" => "62 un",
                            "preço" => 10.45,
                            "Imagem" => "prod4"
                    );
                    
                    # insere um elemento em uma posição do array
                    array_push($lista, $array);
                ?>
                <!-- Estrutura de repetição -->
                <?php for($i=0;$i < sizeof($lista) ;$i++) : ?>
                    <tr>
                        <th><?= $i + 1  ?><th>
                        <th><?= $lista[$i]["nome"]?></th>
                        <th><?= $lista[$i]["quantidade"]?></th>
                        <th href="#"><?= $lista[$i]["preço"]?></th>
                        <th><a href="<?= $lista[$i]["imagem"]?>"><i class="fas fa-images"></i></a></th>
                        <th><a href="#"><i class="fas fa-edit"></i></a></th>
                        <th><a href="#"><i class="fas fa-trash-alt"></i></a></th>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
<?php include './footer.php' ?>
