<?php
    include 'conexao.php';

    $nome = $_POST['nomeproduto']; 
    $fornecedor = $_POST['fornecedor'];
    $descricao = $_POST['descricaoproduto'];
    $valor = preg_replace("/[^0-9,]+/i","",$_POST["valorproduto"]);
    $valor= str_replace(",",".",$valor);
    $quantidade = $_POST['quantidadeproduto'];
    $categoria = $_POST['categoriaproduto'];
    $marca = $_POST['marcaproduto'];

   
    $queryFornecedor = "select * from fornecedor where nome = '$fornecedor'"; 
    $queryBanco = mysqli_query($con, $queryFornecedor);
    $queryArray = mysqli_fetch_array($queryBanco);
    $idFornecedor = $queryArray['id'];

    $sql = "INSERT INTO produto (id,idFornecedor,nome,descricao,marca,categoria,valor,quantidade,situacao,data) VALUES (null,'$idFornecedor','$nome','$descricao','$marca','$categoria','$valor','$quantidade','ativo',NOW())";

    if ($con->query($sql) === True){
        echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com Sucesso!');window.location.href='../cadProduto.php';</script>";
    } else{
        echo "Error";
    }

    
 
?>

