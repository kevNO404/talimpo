<?php

    if (isset($_POST['salvar'])){

    include('conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nomeproduto']; 
    $descricao = $_POST['descricaoproduto'];
    $valor = preg_replace("/[^0-9,]+/i","",$_POST["valorproduto"]);
    $valor= str_replace(",",".",$valor);
    $quantidade = $_POST['quantidadeproduto'];
    $categoria = $_POST['categoriaproduto'];
    $marca = $_POST['marcaproduto'];

    $up = "UPDATE produto SET nome='$nome', descricao='$descricao', valor='$valor', quantidade='$quantidade', categoria='$categoria', marca='$marca' WHERE id='$id'"; 

    $update = mysqli_query($con,$up);

    if($update)
    {
        echo"<script language='javascript' type='text/javascript'>alert('Atualizado com sucesso!');window.location.href='../listaProdutos.php';</script>";
    }else{
        echo 'erro';
    }
    
}