<?php
include 'includes/header.php';
?>
    <div class="voltar">
    <a href="listaFuncionarios.php"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
    </div>

    <div class="cadastro">
        <form action= php/cadastrarfuncionario.php method="post">
        <div class="form-row">
            <div class="form-group col-md-5">
            <label>Nome</label>
            <input type="text" class="form-control form-control-sm" name="nomefuncionario" required>
            </div> 
            <div class="form-group col-md-3">
            <label>Senha</label>
            <input type="password" class="form-control form-control-sm" name="senhafuncionario" required>
            </div>     
            <div class="form-group col-md-4">
            <label>CPF</label>
            <input type="text" class="form-control form-control-sm" id="cpf" name="cpffuncionario" required>
            </div>
            <div class="form-group col-md-3">
            <label>CEP</label>
            <input type="text" class="form-control form-control-sm" id="cep" name="cepfuncionario" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" required>
            </div>
            </div>
            <div class="form-row" style="justify-content: space-between;">
            <div class="form-group col-md-5">
            <label>Endereço</label>
            <input type="text" id="rua" size="60" class="form-control form-control-sm" name="enderecofuncionario" required>
            </div>
            <div class="form-group col-md-2">
            <label>Número</label>
            <input type="text" class="form-control form-control-sm" name="numerofuncionario" required>
            </div>
            <div class="form-group col-md-3">
            <label>Cidade</label>
            <input type="text" id="cidade" size="40" class="form-control form-control-sm" name="cidadefuncionario" required>
            </div>            
            <div class="form-group col-md-3">
            <label>Bairro</label>
            <input type="text" id="bairro" size="40" class="form-control form-control-sm" name="bairrofuncionario" required>
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