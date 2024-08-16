<?php
require './config/config.php';
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria JS</title>
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/vars.css">
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/style.css">
    <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
    <script src="<?php echo $base?>/assets/JavaScript/main.js" defer></script>
    <script src="https://kit.fontawesome.com/3586bb7bd2.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="topo">
        <h1 class="topo__marca">JS Pizzas <span class="topo__titulo">Menu</span> </h1>
        <button class="topo__titulo topo__cart-icon">CART</button>
    </header>

    <main>