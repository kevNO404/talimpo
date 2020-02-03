<?php
    include 'conexao.php';
    
    $pesquisacompra = $_POST['pesquisacompra']
    
    
    $query = "SELECT * from  detalhecompra where data = '$pesquisacompra' "; 
    $queryx = mysqli_query($con, $query);
    while($queryz = mysqli_fetch_array($queryx)){ 
      $valor = $queryz['valorTotal'];
      $forma = $queryz['formaPagamento'];
      $data = $queryz['data'];
      echo '<option>'.$nome.'</option>';
    } 
?>