<?php
include 'includes/header.php';
?>

<div class="pesquisalista">

<div class="pesquisalistaleft">
    <a href="regvenda.php"><button type="button" class="btn btn-primary btn-sm">Registar Venda</button></a>
</div>

<div class="pesquisalistaright">
    <form action= vendas.php method="post">
      <input class="form-control" type="text" id="data" placeholder="Data da Venda" name="pesquisavenda">
      <button class="btn my-2 my-sm-0" name="pesquisa" type="submit">Pesquisar</button>
    </form>
</div>

</div>

<div class="lista">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Total</th>
      <th scope="col">Pago</th>
      <th scope="col">Troco</th>
      <th scope="col">Pagamento</th>
      <th scope="col">Data</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
       include 'php/conexao.php';

          if(isset($_POST['pesquisa'])){

          $pesquisavenda = $_POST['pesquisavenda'];
          $pesquisavenda = $data = implode("-",array_reverse(explode("/",$pesquisavenda)));
  
           $sqlconsulta = "SELECT * from  detalhevenda where data like '%$pesquisavenda%' ";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $total = $linha["valorTotal"];
                  $pago = $linha["valorPago"];
                  $troco = $linha["valorTroco"];
                  $pagamento = $linha["formaPagamento"];
                  $data = $linha["data"] 
                ?> 
    <tr>
      <th scope="row"><?=$id?></th>
      <td>R$ <?=$nombre_format_francais = number_format($total, 2, ',', ' ')?></td>
      <td>R$ <?=$nombre_format_francais = number_format($pago, 2, ',', ' ')?></td>
      <td>R$ <?=$nombre_format_francais = number_format($troco, 2, ',', ' ')?></td>
      <td><?=$pagamento?></td>
      <td><?=date('d/m/Y', strtotime($data));?></td>
      <td><a href='php/delVenda.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
    <?php }
          }else{
           $sqlconsulta = "SELECT * from detalhevenda order by data desc";
           $consulta = mysqli_query($con, $sqlconsulta);
		       while ($linha = mysqli_fetch_array($consulta)) {
                  $id = $linha["id"]; 
                  $total = $linha["valorTotal"];
                  $pago = $linha["valorPago"];
                  $troco = $linha["valorTroco"];
                  $pagamento = $linha["formaPagamento"];
                  $data = $linha["data"] 
                ?> 
    <tr>
      <th scope="row"><?=$id?></th>
      <td>R$ <?=$nombre_format_francais = number_format($total, 2, ',', ' ')?></td>
      <td>R$ <?=$nombre_format_francais = number_format($pago, 2, ',', ' ')?></td>
      <td>R$ <?=$nombre_format_francais = number_format($troco, 2, ',', ' ')?></td>
      <td><?=$pagamento?></td>
      <td><?=date('d/m/Y', strtotime($data));?></td>
      <td><a href='php/delVenda.php?id=<?=$id?>'>Excluir</a></td>
    </tr>
    <?php }}?>

  </tbody>
</table>
</div>


<?php
include 'includes/footer.php';
?>