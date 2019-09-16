<?php 
    include_once './header.php';
    include_once './consulta_tipoComida.php';
    include_once './consulta_prato.php';
?>



    <div class="container mt-3" style="background-color:aliceblue;min-height:600px;margin-bottom:30px;border-radius:10px;">
        
         <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                   <th>Id</th>
                    <th>Nome</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estruturas de repetição -->
            <?php foreach (listaTipo() as $tipo): ?>
                <tr>
                    <td><?= $tipo['id_tipoComida'] ?></td>
                    <td><?= $tipo['nome'] ?></td>
                    <td><span data-toggle="modal" data-target="#tipoModal" data-tipo_id="<?= $tipo['id_tipoComida'] ?>" data-tipo_name="<?= $tipo['nome'] ?>"><i class="fas fa-edit text-primary"></i></span></td>
                    <td><a href="delete_tipoComida.php?id=<?= $tipo['id_tipoComida'] ?>" onclick="return confirm('Você tem certeza?')"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>                   
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>PreçoP</th>
                    <th>PreçoM</th>
                    <th>PreçoG</th>
                    <th>TipoComida_id</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estruturas de repetição -->
            <?php foreach (listaPrato() as $prato): ?>
                <tr>
                    <td><?= $prato['id_prato'] ?></td>
                    <td><?= $prato['nomePrato'] ?></td>
                    <td><?= $prato['descricaoPrato'] ?></td>
                    <td><?= $prato['precoP'] ?></td>
                    <td><?= $prato['precoM'] ?></td>
                    <td><?= $prato['precoG'] ?></td>
                    <td><?= $prato['tipoComida_id'] ?></td>
                    <td><span data-toggle="modal" data-target="#pratoModal" data-prato_id="<?= $prato['id_prato'] ?>" data-prato_name="<?= $prato['nomePrato'] ?>" data-prato_description="<?= $prato['descricaoPrato'] ?>" data-prato_precoP="<?=$prato['precoP'] ?>" data-prato_precoM="<?= $prato['precoM']?>" data-prato_precoG="<?= $prato['precoG']?>" data-prato_tipoComida_id="<?= $prato['tipoComida_id']?>"><i class="fas fa-edit text-primary"></i></span></td>
                    <td><a href="delete_prato.php?id=<?= $prato['id_prato'] ?>" onclick="return confirm('Você tem certeza?')"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="tipoModal" tabindex="-1" role="dialog" aria-labelledby="tipoModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Editar Tipo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3">
                        <fieldset>
                            <form id="edit_form" action="edit_tipo.php" method="post">
                                <div class="form-group">
                                    <label for="id_" class="sr-only">Id</label>
                                    <input type="hidden" id="id_" name="txtId" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="idnome">Nome</label>
                                    <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" form="edit_form" class="pull-left btn btn-default">Editar</button>
                    <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pratoModal" tabindex="-1" role="dialog" aria-labelledby="pratoModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Editar Prato</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3">
                        <fieldset>
                            <form id="edit_form2" action="edit_prato.php" method="post">
                                <div class="form-group">
                                    <label for="id_Prato" class="sr-only">Id</label>
                                    <input type="hidden" id="id_Prato" name="txtIdPrato" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="idnomePrato">Nome</label>
                                    <input type="text" id="idnomePrato" name="txtPratoNome" placeholder="Informe o nome" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="iddescricao">Descrição</label>
                                    <input type="text" id="iddescricao" name="txtDescricao" placeholder="Informe a Descrição" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="idprecoP">PreçoP</label>
                                    <input type="text" id="idprecoP" name="txtPrecoP" placeholder="Informe o Preço" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="idprecoM">PreçoM</label>
                                    <input type="text" id="idprecoM" name="txtPrecoM" placeholder="Informe o Preço" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="idprecoG">PreçoG</label>
                                    <input type="text" id="idprecoG" name="txtPrecoG" placeholder="Informe o Preço" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tipoComida_id">tipoComida_id</label>
                                    <input type="text" id="tipoComida_id" name="txtTipoComida_id" placeholder="Informe o tipoComida_id" class="form-control" required>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" form="edit_form2" class="pull-left btn btn-default">Editar</button>
                    <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php' ?>

<script>
    // criação das variaveis
    var tipo_id = '';
    var tipo_name = '';

    var prato_id = '';
    var prato_name = '';
    var prato_descricao = '';
    var prato_preco_p = '';
    var prato_preco_m = '';
    var prato_preco_g = '';
    var prato_tipoComida_id = '';

    jQuery('body').on('click', '[data-toggle="modal"]', function() {
        // Resgata os valores guardados em data-tipo_id e data-tipo_name
        tipo_id = $(this).attr('data-tipo_id');
        tipo_name = $(this).attr('data-tipo_name');

        prato_id = $(this).attr('data-prato_id');
        prato_name = $(this).attr('data-prato_name');
        prato_descricao = $(this).attr('data-prato_description');
        prato_preco_p = $(this).attr('data-prato_precoP');
        prato_preco_m = $(this).attr('data-prato_precoM');
        prato_preco_g = $(this).attr('data-prato_precoG');
        prato_tipoComida_id = $(this).attr('data-prato_tipoComida_id');

        // Atribui os valores as campos do formulario do modal
        $("#id_").attr({'value':tipo_id});
        $("#idnome").attr({'value':tipo_name});

        $("#id_Prato").attr({'value':prato_id});
        $("#idnomePrato").attr({'value':prato_name});
        $("#iddescricao").attr({'value':prato_descricao});
        $("#idprecoP").attr({'value':prato_preco_p});
        $("#idprecoM").attr({'value':prato_preco_m});  
        $("#idprecoG").attr({'value':prato_preco_g}); 
        $("#tipoComida_id").attr({'value':prato_tipoComida_id});                     
        


    });
</script>