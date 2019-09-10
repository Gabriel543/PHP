<?php 
    include './header.php'; 
    include './consulta_curso.php'; 
?>
    <div class="container mt-3">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    
                    <th>ID</th>
                    <th>Nome</th>
                    
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach (listaCursos() as $curso) : ?>
                <tr>
                    <td><?= $curso['id_curso'] ?></td>
                    <td><?= $curso['nome'] ?></td>


                    <td><a href="edit_curso.php?id=<?= $curso['id_curso'] ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete_curso.php?id=<?= $curso['id_curso'] ?>" onclick="return confirm('Você tem certeza')"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php include './footer.php' ?>
