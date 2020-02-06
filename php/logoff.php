<?php
session_start();
if(isset($_SESSION['logado']) || isset($_SESSION['logadoAdm'])){

session_destroy();

}
header("Location: ../login.php");
?>