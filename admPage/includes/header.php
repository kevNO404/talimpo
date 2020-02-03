<?php


require_once 'php/conexao.php';
require 'php/verificaLogin.php';


?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
		<link rel="icon" href="../img/logo.png" type="image/x-icon">
    <title>TudoLimpo</title>
</head>
<body onLoad="focoForm(0,0);">
<section class="container" >
    <div class="menu" >
<ul class="nav nav-tabs justify-content-center">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PRODUTOS</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="cadProduto.php">CADASTRAR</a>
      <a class="dropdown-item" href="listaProdutos.php">LISTAR</a>
    </div>
  </li>
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">VENDAS</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="regvenda.php">REGISTRAR VENDA</a>
      <a class="dropdown-item" href="vendas.php">EXTRATOS</a>
    </div>
</li>
  <li class="nav-item">
    <a class="nav-link active" href="index.php">CAIXA</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">COMPRAS</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="regcompra.php">REGISTRAR COMPRA</a>
      <a class="dropdown-item" href="compras.php">EXTRATOS</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PARCEIROS</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="listaFornecedores.php">FORNECEDORES</a>
      <a class="dropdown-item" href="listaFuncionarios.php">FUNCIONÁRIOS</a>
      <a class="dropdown-item" href="listaClientes.php">CLIENTES</a>
    </div>
  </li>
</ul>
</div>