<?php
include 'includes/header.php';
?>

<div class="editCaixa" > 
<form action="editcaixaregentrada.php" method="post">

        <?php
            include 'php/conexao.php';

            $renda = "SELECT * from caixa where id = 1";
            $resultRenda = mysqli_query($con, $renda);
            while ($valor = mysqli_fetch_array($resultRenda)){
                $renda = $valor['renda']; 
            }
        ?>  
        <div class="editCaixaValor">
    <h3>Digite o valor adicionado ao caixa</h3>
    <h1><input name="novaRenda" required type="text" id="valor" onKeyup="mascaraValor()" placeholder="R$ <?=$renda?>"></h1>
    <h6><input name="motivo" required type="text" placeholder="Insira uma descrição rapida para essa transação"></h6>
</div>
<div class="editCaixabtn">
<button type="submit" name="atualizar">Atualizar</button>
</div>

<?php
    if (isset($_POST['atualizar'])){
    $novaRenda = preg_replace("/[^0-9,]+/i","",$_POST["novaRenda"]);
    $novaRenda= str_replace(",",".",$novaRenda);
    $motivo = $_POST['motivo'];

    $detalhe = "INSERT into detalhecaixa (id, valor, tipo, motivo, data) VALUES (null,'$novaRenda','entrada', '$motivo',NOW())";

    $renovar = "UPDATE caixa SET renda = renda + $novaRenda where id = 1";   

    if($con->query($detalhe) === True){
        if ($con->query($renovar) === True){
        echo"<script language='javascript' type='text/javascript'>alert('Valor do Caixa alterado!');window.location.href='index.php';</script>";
    }
    }else{
        echo '<h5 style="text-align: center; margin-top: 15px;">Inválido <br>Por favor, coloque .(ponto) em vez de ,(vírgula).</h5>';    
    }
}

?>

</form>
</div>




<?php
include 'includes/footer.php';
?>