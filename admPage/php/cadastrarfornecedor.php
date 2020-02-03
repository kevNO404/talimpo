<?php
    include 'conexao.php';

    $nome = $_POST['nomefornecedor']; 
    $doc = $_POST['docfornecedor'];
    $cidade = $_POST['cidadefornecedor'];
    $bairro = $_POST['bairrofornecedor'];
    $endereco = $_POST['enderecofornecedor'];
    $numero = $_POST['numerofornecedor'];
    $cep = $_POST['cepfornecedor'];
    $complemento = $_POST['complementofornecedor'];

   

    $sql = "INSERT INTO fornecedor (id,nome,documento,cidade,bairro,endereco,numero,cep,complemento,data, situacao) VALUES (null,'$nome','$doc','$cidade','$bairro','$endereco','$numero','$cep','$complemento',NOW(), 'ativo')";
    
    if ($con->query($sql) === True){
        echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com Sucesso!');window.location.href='../listaFornecedores.php';</script>";
    } else{
        echo "Error";
    }

  
?>