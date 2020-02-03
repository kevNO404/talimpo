<?php
    include 'conexao.php';

    $valorpago = $_POST['valorpago'];
    $valortotal = $_POST['valortotal'];
    $troco = $_POST['troco'];
    $formapag = $_POST['formapag']; 

    $sql = "INSERT INTO detalhevenda (id,valorTotal,valorPago,valorTroco,formaPagamento,data) 
            VALUES (null,'$valortotal','$valorpago','$troco','$formapag',NOW())";

            
        $upCaixa = "UPDATE caixa SET renda = renda + $valortotal where id = 1";       
       
            
   
    if ($con->query($sql) === True){
        if($con->query($upCaixa) === true){
        echo"<script language='javascript' type='text/javascript'>alert('Venda Registrada!');window.location.href='../index.php';</script>";
    }
    } else{
        echo "Error";
    }



?>