<?php
    session_start();
    if(empty($_SESSION['logadoAdm'])){
        header ("location: ../login.php");
    }
