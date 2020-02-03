<?php
include 'includes/header.php';
?>
    <div class="voltar">
    <a href="listaFornecedores.php"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
    </div>

    <div class="cadastro">
        <form action= php/cadastrarfornecedor.php method="post">
            <div class="form-row">
            <div class="form-group col-md-5">
            <label>Nome</label>
            <input type="text" class="form-control form-control-sm" name="nomefornecedor" required>
            </div>      
            <div class="form-group col-md-4">
            <label>CPF/CNPJ</label>
            <input type="text" class="form-control form-control-sm"  name="docfornecedor" required>
            </div>
            <div class="form-group col-md-3">
            <label>CEP</label>
            <input type="text" class="form-control form-control-sm" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" name="cepfornecedor" required>
            </div>
            </div>
            <div class="form-row" >
            <div class="form-group col-md-5">
            <label>Endereço</label>
            <input type="text" id="rua" size="60" class="form-control form-control-sm" name="enderecofornecedor" required>
            </div>
            <div class="form-group col-md-2">
            <label>Número</label>
            <input type="text" class="form-control form-control-sm" name="numerofornecedor" required>
            </div>
            <div class="form-group col-md-4">
            <label>Cidade</label>
            <input type="text" id="cidade" size="40" class="form-control form-control-sm" name="cidadefornecedor" required>
            </div>            
            <div class="form-group col-md-3">
            <label>Bairro</label>
            <input type="text" id="bairro" size="40" class="form-control form-control-sm" name="bairrofornecedor" required>
            </div>
            <div class="form-group col-md-4">
            <label>Complemento</label>
            <input type="text" class="form-control form-control-sm" name="complementofornecedor">
            </div>
            <div class="btn form-group col-md-4">
            <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
            </div>
            </div>        
            
        </form>
    </div>

<?php
include 'includes/footer.php';
?>