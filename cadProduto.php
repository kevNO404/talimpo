<?php
include 'includes/header.php';
?>

<div class="voltar">
<a href="listaProdutos.php"><button type="button" class="btn btn-primary btn-sm" required>Voltar</button></a>
</div>

<div class="cadastro">
<form action="php/cadastrarproduto.php" method="post" >
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Nome</label>
        <input type="text" class="form-control form-control-sm" name="nomeproduto" required>
      </div>
      <div class="form-group col-md-6">
      <label>Fornecedor</label>
      <select name="fornecedor" required class="form-control form-control-sm">
        <option value = "" disabled selected>Escolha seu fornecedor</option>
        <?php  
         $query = "SELECT * from  fornecedor where situacao = 'ativo' "; 
         $queryx = mysqli_query($con, $query);
         while($queryz = mysqli_fetch_array($queryx)){ 
           $nome = $queryz['nome'];
           echo '<option>'.$nome.'</option>';
         } 
        ?> 
      </select>
        <?php 
          $query = "SELECT * from  fornecedor where situacao = 'ativo' "; 
          $queryx = mysqli_query($con, $query);
          $queryz = mysqli_fetch_array($queryx);                                   
        ?>
      </div>   
      </div>
      

    <div class="form-row">
        <div class="form-group col-md-7">
          <label >Descrição</label>
          <textarea class="form-control form-control-sm" name="descricaoproduto" required rows="3" required></textarea>
        </div>
        <div class="form-group col-md-3">
          <label>Valor</label>
          <input type="text" class="form-control form-control-sm" id="valor" placeholder="R$0.000,00" onKeyup="mascaraValor()" name="valorproduto" required>
        </div>
        <div class="form-group col-md-2">
            <label>Quantidade</label>
            <input type="number" class="form-control form-control-sm" name="quantidadeproduto" required>
        </div>
      </div>

      <div class="form-row" style="justify-content: space-between;">
      <div class="form-group col-md-4">
          <label>Categoria</label>
          <select type="text" class="form-control form-control-sm" name="categoriaproduto" required>
          <option disabled selected value="0">Escolher...</option>
          <option value="cozinha">Cozinha</option>
          <option value="sala">Sala</option>
          <option value="quarto">Quarto</option>
          <option value="banheiro">Banheiro</option>
          <option value="quintal">Quintal</option>
          </select>
         </div>
      <div class="form-group col-md-4">
          <label>Marca</label>
          <input type="text" class="form-control form-control-sm" name="marcaproduto" required>
         </div>
         <div class="btn form-group col-md-4">
         <button type="submit" class="btn btn-primary">Cadastrar</button>
         </div>
      </div>

  </form>

  </div>
  <?php
include 'includes/footer.php';
?>