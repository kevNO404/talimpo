<?php
include 'conexao.php';

$id = $_GET['id'];

$del = "DELETE from detalhecaixa where id='$id'";

$delete = mysqli_query($con,$del);

if($delete)
    {
        echo"<script language='javascript' type='text/javascript'>
        window.location.href='../regcaixasaida.php';
        </script>";
    }