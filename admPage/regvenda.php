<?php
include 'includes/header.php';
?>


<div class="pesquisa">
<div class="form-row">
    <div class="form-group col-md-12">
      <input type="text" class="form-control" placeholder="Nome do Produto">
    </div>
</div>
  <button type="button" class="btn btn-primary btn-sm">Adicionar</button>
</div>

<div class="itens" >

</div>

<div class="valor">
<form action= php/registroVenda.php method="post" >
<div class="pag">
    <h2>Valor Total</h2>
    <h1><input type="text" onfocus id="valortotal" name="valortotal" required ="calcular()" ></h1>
</div>
<div class="pag">
    <h2>Valor Recebido</h2>
    <h1><input type="text" id="valorpago" name="valorpago" required onblur="calcular()"></h1>
</div>
<script>  
          function calcular(){
            var valorpago = parseInt(document.getElementById('valorpago').value, 10);
            var valortotal = parseInt(document.getElementById('valortotal').value, 10);
            document.getElementById('troco').value = valorpago - valortotal;
          }
        </script>
<div class="pag">
    <h2>Troco</h2>
    <h1><input type="text" id="troco" name="troco" required></h1>
</div>

</div>
<p style="text-align: center; font-weight: 600;">Por favor, colocar apenas números, e usar .(ponto) em vez de ,(vírgula) !!!</p>
<div class="fimpag">

    <!-- <button type="button" class="formpag btn btn-primary btn-sm">Forma de Pagamento</button> -->
    <select class="form-control" name="formapag" required>
        <option selected disabled value="" >Forma de Pagamento</option>
        <option>Crédito</option>
        <option>Débito</option>
        <option>Dinheiro</option>
      </select>
    <button type="reset" class="btncancel btn btn-primary btn-sm">Cancelar</button>
    <button type="submit" class="btn btn-primary btn-sm">Registrar Venda</button>
    </form>

</div>





<?php
include 'includes/footer.php';
?>