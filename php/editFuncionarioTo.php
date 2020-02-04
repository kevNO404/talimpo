<?php

    if (isset($_POST['salvar'])){

    include('conexao.php');

    $id = $_POST["id"];
    $nome = $_POST['nomefuncionario']; 
    $cpf = $_POST['cpffuncionario'];
    $cidade = $_POST['cidadefuncionario'];
    $bairro = $_POST['bairrofuncionario'];
    $endereco = $_POST['enderecofuncionario'];
    $numero = $_POST['numerofuncionario'];
    $cep = $_POST['cepfuncionario'];
    $senha = $_POST['senhafuncionario'];
    $senha = md5($senha);

    $up = "UPDATE funcionario SET nome='$nome', cpf='$cpf', cidade='$cidade', bairro='$bairro', endereco='$endereco', numero='$numero', cep='$cep', senha='$senha' WHERE id='$id'"; 

    $update = mysqli_query($con,$up);

    if($update)
    {
        echo"<script language='javascript' type='text/javascript'>alert('Atualizado com sucesso!');window.location.href='../listaFuncionarios.php';</script>";
    }else{
        echo 'erro';
    }
    
}