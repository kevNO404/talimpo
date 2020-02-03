<?php
include 'includes/header.php';
?>
    <div class="voltar">
    <a href="listaClientes.php"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
    </div>

    <?php
    $id = $_GET['id'];

    $query ="SELECT * FROM cliente WHERE id = $id";
    
    $result = mysqli_query($con,$query);
 
    if ($result->num_rows > 0) {
        while($linha = $result->fetch_assoc()) { ?>

    <div class="cadastro">
        <form action= php/editClienteTo.php method="post">
            <div class="form-row">
            <div class="form-group col-md-2">
            <label>Código</label>
            <input type="text" readonly value=<?=$linha["id"]?> class="form-control form-control-sm" name="id" required>
            </div> 
            <div class="form-group col-md-6">
            <label>Nome</label>
            <input type="text" value=<?=$linha["nome"]?> class="form-control form-control-sm" name="nomecliente" required>
            </div>      
            <div class="form-group col-md-4">
            <label>CPF</label>
            <input type="text" value=<?=$linha["cpf"]?> id="cpf" class="form-control form-control-sm" name="cpfcliente">
            </div>   
            <div class="btn form-group col-md-12">
            <button type="reset" class="btn btn-primary btn-sm" style="margin-right: 10px !important;">Resetar</button>

            <button type="submit" name="salvar" class="btn btn-primary btn-sm">Salvar Alterações</button>
            </div>       
        </form>
    </div>

        <?php } 
        } else {
            echo "<h2>Sem resultados para mostrar</h2>";
        }
        ?>

<?php
include 'includes/footer.php';
?>