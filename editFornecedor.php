<?php
include 'includes/header.php';
?>
    <div class="voltar">
    <a href="listaFornecedores.php"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
    </div>

    <?php
    $id = $_GET['id'];

    $query ="SELECT * FROM fornecedor WHERE id = $id";
    
    $result = mysqli_query($con,$query);
 
    if ($result->num_rows > 0) {
        while($linha = $result->fetch_assoc()) { ?>

<div class="cadastro">
        <form action= php/editFornecedorTo.php method="post">
            <div class="form-row">
            <div class="form-group col-md-2">
            <label>Código</label>
            <input type="text" class="form-control form-control-sm" name="id" readonly value=<?=$linha["id"]?> required >
            </div> 
            <div class="form-group col-md-5">
            <label>Nome</label>
            <input type="text" maxlength="50" class="form-control form-control-sm" name="nomefornecedor" value=<?=$linha["nome"]?> required>
            </div>      
            <div class="form-group col-md-3">
            <label>CNPJ</label>
            <input type="text" class="form-control form-control-sm" id="doc" name="docfornecedor" value=<?=$linha["documento"]?> required>
            </div>
            <div class="form-group col-md-3">
            <label>CEP</label>
            <input type="text" class="form-control form-control-sm" id="cep" name="cepfornecedor" value=<?=$linha["cep"]?> size="10" maxlength="9"
               onblur="pesquisacep(this.value);" required >
            </div>
            </div>
            <div class="form-row" >
            <div class="form-group col-md-5">
            <label>Endereço</label>
            <input type="text" id="rua" maxlength="50" class="form-control form-control-sm" name="enderecofornecedor" value=<?=$linha["endereco"]?> required>
            </div>
            <div class="form-group col-md-2">
            <label>Número</label>
            <input type="text" maxlength="8" class="form-control form-control-sm" name="numerofornecedor" value=<?=$linha["numero"]?> required>
            </div>
            <div class="form-group col-md-3">
            <label>Cidade</label>
            <input type="text" maxlength="30" id="cidade" class="form-control form-control-sm" name="cidadefornecedor" value=<?=$linha["cidade"]?> required>
            </div>            
            <div class="form-group col-md-3">
            <label>Bairro</label>
            <input type="text" maxlength="30" id="bairro" class="form-control form-control-sm" name="bairrofornecedor" value=<?=$linha["bairro"]?> required>
            </div>
            <div class="form-group col-md-4">
            <label>Complemento</label>
            <input type="text" maxlength="30" class="form-control form-control-sm" name="complementofornecedor" value=<?=$linha["complemento"]?>>
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