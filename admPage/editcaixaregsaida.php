<?php
include 'includes/header.php';
?>

<div class="editCaixa" > 
<form action="editcaixaregsaida.php" method="post">

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
    <h1><input name="novaRenda" required type="text" placeholder="R$ <?=$renda?>"></h1>
    <h6><input name="motivo" required type="text" placeholder="Insira uma descrição rapida para essa transação"></h6>
</div>
<p style="text-align: center; font-weight: 600;">Por favor, colocar apenas números, e usar .(ponto) em vez de ,(vírgula) !!!</p>
<div class="editCaixabtn">
<button type="submit" name="atualizar">Atualizar</button>
</div>

<?php

    if (isset($_POST['atualizar'])){
    $novaRenda = $_POST['novaRenda'];
    $motivo = $_POST['motivo'];

    if($novaRenda > $renda){
        echo"<script language='javascript' type='text/javascript'>alert('Inválido \\n O valor inserido é maior que o total do caixa.');window.location.href='editcaixaregsaida.php';</script>";
    }else{
        $detalhe = "INSERT into detalhecaixa (id, valor, tipo, motivo, data) VALUES (null,'$novaRenda','saida', '$motivo',NOW())";

    $renovar = "UPDATE caixa SET renda = renda - $novaRenda where id = 1";   

    if($con->query($detalhe) === True){
        if ($con->query($renovar) === True){
        echo"<script language='javascript' type='text/javascript'>alert('Valor do Caixa alterado!');window.location.href='index.php';</script>";
    }
}
    else{
        echo"<script language='javascript' type='text/javascript'>alert('Inválido \\n Por favor, coloque .(ponto) em vez de ,(vírgula).</h5>');window.location.href='editcaixaregsaida.php';</script>"; 
    }
    }
    }

?>

</form>
</div>




<?php
include 'includes/footer.php';
?>