<?php
    include 'conexao.php';

    $nome = $_POST['nomecliente']; 
    $cpf = $_POST['cpfcliente'];

    $sql = "INSERT INTO cliente (id,nome,cpf,data) VALUES (null,'$nome','$cpf',now())";
    
    if ($con->query($sql) === True){
        echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com Sucesso!');window.location.href='../listaClientes.php';</script>";
    } else{
        echo "Error";
    }

  
?>