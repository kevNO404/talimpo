
</section>
<div class="footer">
    <div class="adm">
    <?php  if(isset($_SESSION['logadoAdm']))
    echo '<a href="editcaixareg.php" style="width: 20%"><p style="text-align: center;">Registrar alteração<br> do caixa</p></a>'
    ?>

    <a href="php/logoff.php" style="margin-top: 30px"><p>Sair da conta</p></a>

    <?php if(isset($_SESSION['logadoAdm']))
    echo '<a href="regcaixa.php" style="width: 20%"><p style="text-align: center;">Registros de alteração<br> do caixa</p></a>'
    ?>
    </div>
    
    <div class="copy">
    <p>TudoLimpo &copy; 2020</p>
    </div>
</div>




<script>
function focoForm(formInst, elementInst){
					if (document.forms.length > 0){
					document.forms[formInst].elements[elementInst].focus();
					}
				}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/mascara.js"></script>
<script src="js/script.js"></script>
</body>
</html>