<?php
include 'includes/header.php';
if (empty($_SESSION['logadoAdm'])) {
    echo"<script language='javascript' type='text/javascript'>alert('Você não possui acesso a essa página');window.location.href='index.php';</script>";
}
?>

<div class="editcaixareg">
<a href="regcaixaentrada.php"><button type="button" class="btn btn-primary btn-lg">Registros de entrada<br>de dinheiro<br>no caixa</button></a>
<a href="regcaixasaida.php"><button type="button" class="btn btn-primary btn-lg">Registros de saída<br>de dinheiro<br>no caixa</button></a>
</div>

<?php
include 'includes/footer.php';
?>