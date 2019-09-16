<?php 
    include_once './header.php';
    include_once './consulta_usuario.php';
?>



    <div class="container mt-3" style="background-color:aliceblue;min-height:600px;margin-bottom:30px;border-radius:10px;">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estruturas de repetição -->
                <?php foreach (listaUsuarios() as $usuarios): ?>
                <tr>
                    <td><?= $usuarios['id_login'] ?></td>
                    <td><?= $usuarios['nomeLogin'] ?></td>
                    <td><?= $usuarios['email'] ?></td>
                    <!--
                        data-usuarios_id - propriedade responsavel por guardar o id do usuarios
                        data-usuarios_name -  propriedade responsavel por guardar o nome do usuarios
                        data-usuarios_email -  propriedade responsavel por guardar o email do usuarios
                        data-usuarios_telefone -  propriedade responsavel por guardar o telefone do usuarios
                     -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="usuariosModal" tabindex="-1" role="dialog" aria-labelledby="usuariosModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Editar usuarios</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3">
                        <fieldset>
                            <form id="edit_form" action="edit_usuarios.php" method="post">
                                <div class="form-group">
                                    <label for="id_" class="sr-only">Id</label>
                                    <input type="hidden" id="id_" name="txtId" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="idnome">Nome</label>
                                    <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="idemail">email</label>
                                    <input type="text" id="idemail" name="txtEmail" placeholder="Informe o email" class="form-control" required>
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
<?php include './footer.php' ?>

<script>
    // criação das variaveis
    var usuarios_id = '';
    var usuarios_name = '';
    var usuarios_email = '';
    jQuery('body').on('click', '[data-toggle="modal"]', function() {
        // Resgata os valores guardados em data-usuarios_id e data-usuarios_name
        usuarios_id = $(this).attr('data-usuarios_id');
        usuarios_name = $(this).attr('data-usuarios_name');
        usuarios_email = $(this).attr('data-usuarios_email');
        // Atribui os valores as campos do formulario do modal
        $("#id_").attr({'value':usuarios_id});
        $("#idnome").attr({'value':usuarios_name});
        $("#idemail").attr({'value':usuarios_email});
        
    });
</script>