<?php
include 'conexao.php';

$id = $_GET['id'];

$del = "DELETE from detalhecompra where id='$id'";

$delete = mysqli_query($con,$del);

if($delete)
    {
        echo"<script language='javascript' type='text/javascript'>
        window.location.href='../compras.php';
        </script>";
    }