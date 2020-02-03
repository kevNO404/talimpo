
<?php
include 'php/loginAdmTo.php';

?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
		<link rel="icon" href="img/logo.png" type="image/x-icon">
  </head>

  <body class="text-center">
    <form class="form-signin" action="loginAdm.php" name='login' method="post">
      <img width="100%" src="img/logo.png" alt="logo">
      <h1 class="h3 mb-3 font-weight-normal">Efetuando Login como Administrador</h1>
      <label class="sr-only">Login</label>
      <input type="text" name="login" class="form-control" placeholder="Login como Funcionário" required autofocus>
      <label class="sr-only" required >Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="******" required>
      <button class="btn btn-lg btn-primary btn-block" name="logar" type="submit" value="logar">Login</button>

      <p style="margin-top: 10px;">Não é um administrador? <a href="login.php">Efetuar Login</a></p>
      <p class="mt-5 mb-3 text-muted">TudoLimpo &copy; 2020</p>
    </form>
  </body>
</html>
