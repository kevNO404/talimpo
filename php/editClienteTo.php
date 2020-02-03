<?php

    if (isset($_POST['salvar'])){

    include('conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nomecliente'];
    $cpf = $_POST['cpfcliente'];

    $up = "UPDATE cliente SET nome='$nome', cpf='$cpf' WHERE id='$id'"; 

    $update = mysqli_query($con,$up);

    if($update)
    {
        echo"<script language='javascript' type='text/javascript'>alert('Atualizado com sucesso!');window.location.href='../listaClientes.php';</script>";
    }
    
}