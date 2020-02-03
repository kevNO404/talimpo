<?php
include 'includes/header.php';
?>

<div class="pesquisalista">

<div class="pesquisalistaleft">
    <a href="cadFornecedor.php"><button type="button" class="btn btn-primary btn-sm">Cadastrar Fornecedor</button></a>
</div>

<div class="pesquisalistaright">
<form action= listaFornecedores.php method="post">
    <input class="form-control" type="search" name="nomefornecedor" placeholder="Nome do Fornecedor">
    <button class="btn my-2 my-sm-0" type="submit" name="pesquisa">Pesquisar</button>
  </form>
</div>

</div>

<div class="lista">
<table class="table table-sm table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF/CNPJ</th>
      <th scope="col">Data de Adição</th>
      <th scope="col">Detalhes</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  <?php 
       include 'php/conexao.php';

       if(isset($_POST['pesquisa'])){

        $nomefornecedor = $_POST['nomefornecedor']; 

           $sqlconsulta = "SELECT * from fornecedor where situacao = 'ativo' and nome like '%$nomefornecedor%' order by data desc";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $documento = $linha["documento"];
                  $data = $linha["data"] 
                ?> 
    <tr>
      <th scope="row"> <?= $id ?> </th>
      <td> <?= $nome ?> </td>
      <td> <?= $documento ?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='editFornecedor.php?id=<?=$id?>'>Editar</a</td>
      <td><a href='php/delFornecedor.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
           <?php }
          
           }else{
           $sqlconsulta = "SELECT * from fornecedor where situacao = 'ativo' order by data desc";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $documento = $linha["documento"];
                  $data = $linha["data"] 
                ?> 
    <tr>
      <th scope="row"> <?= $id ?> </th>
      <td> <?= $nome ?> </td>
      <td> <?= $documento ?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='editFornecedor.php?id=<?=$id?>'>Editar</a</td>
      <td><a href='php/delFornecedor.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
           <?php }}?>
  </tbody>
</table>
</div>







<?php
include 'includes/footer.php';
?>