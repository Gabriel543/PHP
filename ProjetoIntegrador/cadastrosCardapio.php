<?php include './header.php' ?>
<style>
    select:invalid { color: gray; }
</style>
    <div class="container mt-3" style="background-color:aliceblue;">
        <fieldset>
            <legend>Formulário de Cadastro tipoComida</legend>
            <form action="registrar_tipoComida.php" method="post">
                <div class="form-group">
                    <label for="idtiponome">Nome</label>
                    <input type="text" id="idtiponome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </fieldset>
        <fieldset>
            <legend>Formulário de Cadastro Prato</legend>
            <form action="registrar_prato.php" method="post">
                <div class="form-group">
                    <label for="idtipo">Tipo</label>
                    <select name="txtTipo" id="idtipo" class="form-control" required>
                            <option value="" default hidden disable >Informe o tipo</option>
                            <?php 
                                require('./conexao.php');
                                $query = "select * from tb_tipoComida";
                                $result = $con -> query($query);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                       echo "<option value=".$row['id_tipoComida'].'>' .$row['nome'] ."</option>";
                                    }
                                }
                            ?>
                        </select>
                </div>
                <div class="form-group">
                    <label for="idnome">Nome</label>
                    <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
                </div>                   
                <div class="form-group">
                    <label for="iddescricao">Descrição</label>
                    <input type="text" id="iddescricao" name="txtDescricao" placeholder="Escreva a descrição" class="form-control" required>
                </div>                       
                <div class="form-group">
                    <label for="idprecoP">Preço pequeno</label>
                    <input type="number" id="idprecoP" name="precoP" placeholder="Informe o preço" class="form-control" required>
                </div>           
                <div class="form-group">
                    <label for="idprecoM">Preço Médio</label>
                    <input type="number" id="idprecoM" name="precoM" placeholder="Informe o preço" class="form-control" required>
                </div>       
                <div class="form-group">
                    <label for="idprecoG">Preço Grande</label>
                    <input type="number" id="idprecoG" name="precoG" placeholder="Informe o preço" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-dark" style="margin-bottom:20px;">Cadastrar</button>
            </form>

        </fieldset>
    </div>
<div style="height:30px;"></div>
<?php include './footer.php' ?>