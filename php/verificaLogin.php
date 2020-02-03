<?php
    session_start();
    if(empty($_SESSION['logado'])){
        header ("location: ../login.php");
    }
