<?php
include 'includes/header.php';
?>

<div class="pesquisalista">

<div class="pesquisalistaleft">
    <a href="cadCliente.php"><button type="button" class="btn btn-primary btn-sm">Cadastrar Cliente</button></a>
</div>

<div class="pesquisalistaright">
<form action= listaClientes.php method="post">
    <input class="form-control" type="search" name="nomecliente" placeholder="Nome do Cliente">
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
      <th scope="col">Cpf</th>
      <th scope="col">Data de Adição</th>
      <th scope="col">Detalhes</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
<?php 
       if(isset($_POST['pesquisa'])){

        $nomecliente = $_POST['nomecliente'];

           $sqlconsulta = "SELECT * from cliente where nome like '%$nomecliente%' order by data desc";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $cpf = $linha["cpf"];
                  $data = $linha["data"]; 
                ?> 
    <tr>
      <th scope="row"><?= $id ?></th>
      <td> <?=$nome?> </td>
      <td> <?=$cpf?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='editCliente.php?id=<?=$id?>'>Editar</a</td>
      <td><a href='php/delCliente.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
           <?php } 
       }else{
        $sqlconsulta = "SELECT * from cliente order by data desc";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $nome = $linha["nome"];
                  $cpf = $linha["cpf"];
                  $data = $linha["data"]; 
          ?> 
    <tr>
     <th scope="row"><?= $id ?></th>
      <td> <?=$nome?> </td>
       <td> <?=$cpf?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
     <td><a href='editCliente.php?id=<?=$id?>'>Editar</a</td>
      <td><a href='php/delCliente.php?id=<?=$id?>'>Excluir</a></td>
   </tr>
           
           <?php }}?>
  </tbody>
</table>
</div>






<?php
include 'includes/footer.php';
?>