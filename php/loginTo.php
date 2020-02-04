<?php
  session_start();
   
    include ("conexao.php");

    if(isset($_POST['logar'])){

	  $nome = $_POST ['nome'];
    $senha = $_POST ['senha'];
    $senha = md5($senha);
  
    $query = "SELECT * from funcionario where nome='$nome' and senha='$senha' limit 1 ";
    $queryadm = "SELECT * from adm where login='$nome' and senha='$senha' limit 1 ";
	
        $resultado = mysqli_query($con,$query);
        $resultadoadm = mysqli_query($con,$queryadm);
 
        if (mysqli_num_rows($resultado)==1){
          while($linha = mysqli_fetch_array($resultado)){

            $_SESSION['logado'] = $linha['nome'];
          }
           header("Location: ../index.php");
          
        }else if(mysqli_num_rows($resultadoadm)==1){
          while($linha = mysqli_fetch_array($resultadoadm)){

            $_SESSION['logadoAdm'] = $linha['nome'];
          }
           header("Location: ../index.php");
          
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Nome e/ou senha incorretos');
          window.location.href='../login.php';</script>";
          die();
        }

      }