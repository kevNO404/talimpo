<?php
include 'includes/header.php';
?>

<div class="pesquisalista">

<div class="pesquisalistaleft">
    <a href="cadProduto.php"><button type="button" class="btn btn-primary btn-sm">Cadastrar Produto</button></a>
</div>

<div class="pesquisalistaright">
<form action= listaProdutos.php method="post">
    <input class="form-control" type="text" name="nomeproduto" placeholder="Nome do Produto">
    <button class="btn my-2 my-sm-0" name="pesquisa" type="submit">Pesquisar</button>
    </form>
</div>

</div>

<div class="lista">
<table class="table table-sm table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor</th>
      <th scope="col">Data de Adição</th>
      <th scope="col">Detalhes</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
       include 'php/conexao.php';

        if(isset($_POST['pesquisa'])){
          $nomeproduto = $_POST['nomeproduto'];
           $sqlconsulta = "SELECT * from produto where nome like '%$nomeproduto%' and situacao = 'ativo' order by data desc ";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $quantidade = $linha["quantidade"];
                  $valor = $linha["valor"];
                  $data = $linha["data"]; 
                ?>
    <tr>
      <th scope="row"><?= $id ?></th>
      <td> <?= $nome ?> </td>
      <td> <?= $quantidade ?> </td>
      <td>R$ <?=$nombre_format_francais = number_format($valor, 2, ',', ' ')?></td>
      <td> <?= date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='editProduto.php?id=<?=$id?>'>Editar</a</td>
      <td><a href='php/delProduto.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
           <?php }

           }else{
           $sqlconsulta = "SELECT * from produto where situacao = 'ativo' order by data desc ";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $quantidade = $linha["quantidade"];
                  $valor = $linha["valor"];
                  $data = $linha["data"]; 
                ?>
    <tr>
      <th scope="row"><?= $id ?></th>
      <td> <?= $nome ?> </td>
      <td> <?= $quantidade ?> </td>
      <td> R$ <?=$nombre_format_francais = number_format($valor, 2, ',', ' ')?> </td>
      <td> <?= date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='editProduto.php?id=<?=$id?>'>Editar</a</td>
      <td><a href='php/delProduto.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
           <?php }}?>
  </tbody>
</table>
</div>







<?php
include 'includes/footer.php';
?>