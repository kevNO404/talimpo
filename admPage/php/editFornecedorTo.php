<?php

    if (isset($_POST['salvar'])){

    include('conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nomefornecedor']; 
    $doc = $_POST['docfornecedor'];
    $cidade = $_POST['cidadefornecedor'];
    $bairro = $_POST['bairrofornecedor'];
    $endereco = $_POST['enderecofornecedor'];
    $numero = $_POST['numerofornecedor'];
    $cep = $_POST['cepfornecedor'];
    $complemento = $_POST['complementofornecedor'];

    $up = "UPDATE fornecedor SET nome='$nome', documento='$doc', cidade='$cidade', bairro='$bairro', endereco='$endereco', numero='$numero', cep='$cep', complemento='$complemento' WHERE id='$id'"; 

    $update = mysqli_query($con,$up);

    if($update)
    {
        echo"<script language='javascript' type='text/javascript'>alert('Atualizado com sucesso!');window.location.href='../listaFornecedores.php';</script>";
    }
    
}