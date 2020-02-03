<?php
include 'includes/header.php';
?>
    <div class="voltar">
    <a href="listaFuncionarios.php"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
    </div>

    <?php
    $id = $_GET['id'];

    $query ="SELECT * FROM funcionario WHERE id = $id";
    
    $result = mysqli_query($con,$query);
 
    if ($result->num_rows > 0) {
        while($linha = $result->fetch_assoc()) { ?>

    <div class="cadastro">
        <form action= php/editFuncionarioTo.php method="post">
        <div class="form-row">
            <div class="form-group col-md-2">
            <label>Código</label>
            <input type="text" readonly value=<?=$linha["id"]?> class="form-control form-control-sm" name="id" required>
            </div> 
            <div class="form-group col-md-4">
            <label>Nome</label>
            <input type="text" disabled class="form-control form-control-sm" name="nomefuncionario" value=<?=$linha["nome"]?> required>
            </div> 
            <div class="form-group col-md-3">
            <label>Senha</label>
            <input type="password" disabled class="form-control form-control-sm" name="senhafuncionario" value=<?=$linha["senha"]?> required>
            </div>     
            <div class="form-group col-md-3">
            <label>CPF</label>
            <input type="text" disabled class="form-control form-control-sm" id="cpf" name="cpffuncionario" value=<?=$linha["cpf"]?> required>
            </div>
            <div class="form-group col-md-3">
            <label>CEP</label>
            <input type="text" disabled class="form-control form-control-sm" name="cepfuncionario" value=<?=$linha["cep"]?> size="10" maxlength="9"
               onblur="pesquisacep(this.value);" id="cep" required>
            </div>
            </div>
            <div class="form-row" style="justify-content: space-between;">
            <div class="form-group col-md-5">
            <label>Endereço</label>
            <input type="text" disabled id="rua" class="form-control form-control-sm" name="enderecofuncionario" value=<?=$linha["endereco"]?> required>
            </div>
            <div class="form-group col-md-2">
            <label>Número</label>
            <input type="text" disabled class="form-control form-control-sm" name="numerofuncionario" value=<?=$linha["numero"]?> required>
            </div>
            <div class="form-group col-md-3">
            <label>Cidade</label>
            <input type="text" disabled id="cidade" class="form-control form-control-sm" name="cidadefuncionario" value=<?=$linha["cidade"]?> required>
            </div>            
            <div class="form-group col-md-3">
            <label>Bairro</label>
            <input type="text" disabled id="bairro" class="form-control form-control-sm" name="bairrofuncionario" value=<?=$linha["bairro"]?> required>
            </div>
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