<?php
include 'includes/header.php';
?>

<div class="pesquisalista">

<?php if(isset($_SESSION['logadoAdm']))
echo '<div class="pesquisalistaleft">
    <a href="cadFuncionario.php"><button type="button" class="btn btn-primary btn-sm">Cadastrar Funcionário</button></a>
</div>'
?>

<div class="pesquisalistaright">
<form action= listaFuncionarios.php method="post">
    <input class="form-control" type="text" name="nomefuncionario" placeholder="Nome do Funcionário">
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
      <th scope="col">CPF</th>
      <th scope="col">Data de Adição</th>
      <th scope="col">Detalhes</th>
      <?php if(isset($_SESSION['logadoAdm']))
      echo '<th scope="col">Deletar</th>'
      ?>
    </tr>
  </thead>
  <tbody>
  <?php 

        if(isset($_POST['pesquisa'])){

           $nomefuncionario = $_POST['nomefuncionario']; 

           $sqlconsulta = "SELECT * from funcionario where nome like '%$nomefuncionario%'";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $cpf = $linha["cpf"];
                  $data = $linha["data"] 
                ?> 
    <tr>
      <th scope="row"> <?= $id ?> </th>
      <td> <?= $nome ?> </td>
      <td> <?= $cpf ?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='editFuncionario.php?id=<?=$id?>'>Detalhe</a</td>
      <?php if(isset($_SESSION['logadoAdm']))?>
      <td><a href='php/delFuncionario.php?id=<?=$id?>'>Excluir</a></td>
      <?php?>
    </tr>
           <?php }
          }else{
           $sqlconsulta = "SELECT * from funcionario order by data desc";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $cpf = $linha["cpf"];
                  $data = $linha["data"] 
                ?> 
    <tr>
      <th scope="row"> <?= $id ?> </th>
      <td> <?= $nome ?> </td>
      <td> <?= $cpf ?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='editFuncionario.php?id=<?=$id?>'>Detalhe</a</td>
      <?php if(isset($_SESSION['logadoAdm']))?>
      <td><a href='php/delFuncionario.php?id=<?=$id?>'>Excluir</a></td>
      <?php?>
    </tr>
           <?php }}?>
           
  </tbody>
</table>
</div>







<?php
include 'includes/footer.php';
?>