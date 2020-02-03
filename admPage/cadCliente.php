<?php
include 'includes/header.php';
?>
    <div class="voltar">
    <a href="listaClientes.php"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
    </div>

    <div class="cadastro">
        <form action= php/cadastrarcliente.php method="post">
            <div class="form-row">
            <div class="form-group col-md-6">
            <label>Nome</label>
            <input type="text" class="form-control form-control-sm" name="nomecliente" required>
            </div>      
            <div class="form-group col-md-6">
            <label>CPF</label>
            <input type="text" class="form-control form-control-sm" placeholder="***.***.***-**" id="cpf" name="cpfcliente">
            </div>   
            <div class="btn form-group col-md-12">
            <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
            </div>       
        </form>
    </div>

<?php
include 'includes/footer.php';
?>