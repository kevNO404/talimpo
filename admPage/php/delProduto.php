<?php
include 'conexao.php';

$id = $_GET['id'];

$del = "UPDATE produto SET situacao = 'inativo' where id='$id'";

$delete = mysqli_query($con,$del);

if($delete)
    {
        echo"<script language='javascript' type='text/javascript'>
        window.location.href='../listaProdutos.php';
        </script>";
    }