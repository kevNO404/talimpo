<?php

include 'includes/header.php';
?>

<div class="linha"></div>

<div class="grana">
<?php          
           	$sqlconsulta = "SELECT renda from caixa where id = 1 ";
           	$consulta = mysqli_query($con, $sqlconsulta);
				while ($linha = mysqli_fetch_array($consulta)) {
                	$renda = $linha["renda"];  
					?> 
<h1>R$ <?= $nombre_format_francais = number_format($renda, 2, ',', ' ') ?></h1>

<?php }
                ?>

</div>

<div class="linha2"></div>

<div class="finalhome">

<div class="box">

<?php          
           	$sqlconsulta = "SELECT * from detalhevenda order by data desc limit 5";
           	$consulta = mysqli_query($con, $sqlconsulta);
				while ($linha = mysqli_fetch_array($consulta)) {
					$valor = $linha["valorTotal"];
					$data = $linha["data"]; 
					?> 
	<h5>Venda feita com valor de R$ <?=$nombre_format_francais = number_format($valor, 2, ',', ' ')?> na data de <?=date('d/m/Y', strtotime($data)); ?>.</h5>
<?php }?>

</div>

<div class="box">
<?php          
           	$sqlconsulta = "SELECT * from detalhecompra order by data desc limit 5";
           	$consulta = mysqli_query($con, $sqlconsulta);
				while ($linha = mysqli_fetch_array($consulta)) {
					$valor = $linha["valorTotal"];
					$data = $linha["data"]; 
					?> 
	<h5>Compra feita com valor de R$ <?=$nombre_format_francais = number_format($valor, 2, ',', ' ')?> na data de <?=date('d/m/Y', strtotime($data)); ?>.</h5>
<?php }?>

</div>

</div>

<div class="finalhomebtn">

    <a href="regVenda.php"><button type="button" class="btn btn-primary btn-sm">Vender</button></a>
    <a href="regCompra.php"><button type="button" class="btn btn-primary btn-sm">Comprar</button></a>

</div>

<?php
include 'includes/footer.php';
?>