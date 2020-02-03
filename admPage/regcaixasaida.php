<?php
include 'includes/header.php';
?>

<div class="pesquisalista">


<div class="pesquisalistaright">
<form action= regcaixasaida.php method="post">
    <input class="form-control" type="text" id="data" name="data" placeholder="Data da modificação">
    <button class="btn my-2 my-sm-0" name="pesquisa" type="submit">Pesquisar</button>
    </form>
</div>

</div>

<div class="lista">
<table class="table table-sm table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col">Motivo</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
       include 'php/conexao.php';

            if(isset($_POST['pesquisa'])){

          $data = $_POST['data'];
          $data = $data = implode("-",array_reverse(explode("/",$data)));

           $sqlconsulta = "SELECT * from detalhecaixa where tipo = 'saida' and data like '%$data%'";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $valor = $linha["valor"];
                  $motivo = $linha["motivo"];
                  $data = $linha["data"];
                ?> 
    <tr>
      <th scope="row"> <?= $id ?> </th>
      <td> R$ <?=$nombre_format_francais = number_format($valor, 2, ',', ' ')?> </td>
      <td> <?= $motivo ?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='php/delregcaixasaida.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
           <?php } 
           }else{

           $sqlconsulta = "SELECT * from detalhecaixa where tipo = 'saida' order by data desc";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $valor = $linha["valor"];
                  $motivo = $linha["motivo"];
                  $data = $linha["data"];
                ?> 
    <tr>
      <th scope="row"> <?= $id ?> </th>
      <td> R$ <?=$nombre_format_francais = number_format($valor, 2, ',', ' ')?> </td>
      <td> <?= $motivo ?> </td>
      <td> <?=date('d/m/Y', strtotime($data)); ?> </td>
      <td><a href='php/delregcaixasaida.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
           <?php }}?>
  </tbody>
</table>
</div>







<?php
include 'includes/footer.php';
?>