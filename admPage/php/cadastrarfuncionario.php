<?php
    include 'conexao.php';

    $nome = $_POST['nomefuncionario']; 
    $cpf = $_POST['cpffuncionario'];
    $cidade = $_POST['cidadefuncionario'];
    $bairro = $_POST['bairrofuncionario'];
    $endereco = $_POST['enderecofuncionario'];
    $numero = $_POST['numerofuncionario'];
    $cep = $_POST['cepfuncionario'];
    $senha = $_POST['senhafuncionario'];
    $senha = md5($senha);
   

    $sql = "INSERT INTO funcionario (id,nome,cpf,cidade,bairro,endereco,numero,cep,senha,data) VALUES (null,'$nome','$cpf','$cidade','$bairro','$endereco','$numero','$cep','$senha',NOW())";
    
    if ($con->query($sql) === True){
        echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com Sucesso!');window.location.href='../listaFuncionarios.php';</script>";
    } else{
        echo "Error";
    }

  
?>