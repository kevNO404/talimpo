<?php
include 'conexao.php';

$id = $_GET['id'];

$del = "UPDATE fornecedor SET situacao='inativo' where id='$id'";

$delete = mysqli_query($con,$del);

if($delete)
    {
        echo"<script language='javascript' type='text/javascript'>
        window.location.href='../listaFornecedores.php';
        </script>";
    }