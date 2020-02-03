<?php
include 'includes/header.php';
?>

<div class="voltar">
<a href="listaProdutos.php"><button type="button" class="btn btn-primary btn-sm" required>Voltar</button></a>
</div>

<?php
    $id = $_GET['id'];

    $query ="SELECT * FROM produto WHERE id = $id";
    
    $result = mysqli_query($con,$query);
 
    if ($result->num_rows > 0) {
        while($linha = $result->fetch_assoc()) { ?>

<div class="cadastro">
<form action="php/editProdutoTo.php" method="post" >
    <div class="form-row">
    <div class="form-group col-md-2">
        <label>Código</label>
        <input type="text" class="form-control form-control-sm" name="id" readonly value=<?=$linha["id"]?> required>
      </div>
      <div class="form-group col-md-5">
        <label>Nome</label>
        <input type="text" class="form-control form-control-sm" name="nomeproduto" value=<?=$linha["nome"]?> required>
      </div>
      <div class="form-group col-md-5">
      <label>Fornecedor</label>
      <select name="fornecedor" class="form-control form-control-sm">
        <option selected>
        
        <?php 
        
        $fornquery = "SELECT f.nome from fornecedor f, produto p where f.id = '".$linha["id"]."'";
          $fornqueryx = mysqli_query($con, $fornquery);
          while($fornqueryz = mysqli_fetch_array($fornqueryx)){
            $nome = $fornqueryz['nome'];
            echo $nome;
          }


        ?>

        </option>
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
          <textarea class="form-control form-control-sm" name="descricaoproduto" required rows="3"><?=$linha["descricao"]?></textarea>
        </div>
        <div class="form-group col-md-3">
          <label>Valor</label>
          <input type="text" class="form-control form-control-sm" id="valor" onKeyup="mascaraValor()" name="valorproduto" required value=<?=$linha["valor"]?>>
        </div>
        <div class="form-group col-md-2">
            <label>Quantidade</label>
            <input type="number" class="form-control form-control-sm" name="quantidadeproduto" value=<?=$linha["quantidade"]?> required>
        </div>
      </div>

      <div class="form-row" style="justify-content: space-between;">
      <div class="form-group col-md-4">
          <label>Categoria</label>
          <select type="text" class="form-control form-control-sm" name="categoriaproduto" required>
          <option  selected ><?=$linha["categoria"]?></option>
          <option value="cozinha">Cozinha</option>
          <option value="sala">Sala</option>
          <option value="quarto">Quarto</option>
          <option value="banheiro">Banheiro</option>
          <option value="quintal">Quintal</option>
          </select>
         </div>
      <div class="form-group col-md-3">
          <label>Marca</label>
          <input type="text" class="form-control form-control-sm" name="marcaproduto" value=<?=$linha["marca"]?> required>
         </div>
         <div class="btn form-group col-md-12">
         <button type="reset" class="btn btn-primary btn-sm" style="margin-right: 10px !important;">Resetar</button>

            <button type="submit" name="salvar" class="btn btn-primary btn-sm">Salvar Alterações</button>
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