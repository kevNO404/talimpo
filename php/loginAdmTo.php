<?php
  session_start();
   
    include ("conexao.php");

    if(isset($_POST['logar'])){

	  $login = $_POST ['login'];
    $senha = $_POST ['senha'];
    $senha = md5($senha);
  
  $query = "SELECT * from adm where login='$login' and senha='$senha' limit 1 ";
	
        $resultado = mysqli_query($con,$query);
 
        if (mysqli_num_rows($resultado)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');
          window.location.href='../loginAdm.php';</script>";
          die();
        }else{
          while($linha = mysqli_fetch_array($resultado)){

            $_SESSION['logadoAdm'] = $linha['login'];
          }
           header("Location: ../admPage/index.php");
        }


      }