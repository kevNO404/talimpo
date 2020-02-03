<?php
session_start();
if(isset($_SESSION['logadoAdm'])){
session_destroy();
header("Location: ../../loginAdm.php");
}
?>