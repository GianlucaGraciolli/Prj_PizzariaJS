<?php

require './../config/config.php';

$nomePizza = filter_input(INPUT_POST,'nomePizza',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$tamanhoPizza = filter_input(INPUT_POST,'tamanhoPizza',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$valorPizza = filter_input(INPUT_POST,'valorPizza', FILTER_VALIDATE_FLOAT);
$descricaoPizza = filter_input(INPUT_POST,'descricaoPizza',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($nomePizza && $tamanhoPizza && $valorPizza) {
    
    $sql=$pdo -> prepare ("INSERT INTO pizza (idUsuario, nomePizza, pathFoto, valor, tamanho, descricao) VALUES (:idUsuario,:nomePizza,:pathFoto,:valor,:tamanho,:descricao);");

    $sql->bindValue(":idUsuario", 1);
    $sql->bindValue(":nomePizza", $nomePizza);
    $sql->bindValue(":pathFoto", "images/foto1.png");
    $sql->bindValue(":valorPizza", $valorPizza);
    $sql->bindValue(":tamanhoPizza", $tamanhoPizza);
    $sql->bindValue(":descricaoPizza", $descricaoPizza);
    $sql->execute();

    header("Location:   index.php");
    exit;

} else {
    header("Location: cadastrar.php");
    exit;
}














// $nomePizza = $_POST['nomePizza'];
// $valorPizza = $_POST['valorPizza'];
// $tamanhoPizza = $_POST['tamanhoPizza'];
// $descPizza = $_POST['descricaoPizza'];

// echo "Dados enviados de cadastrar.php: Nome da pizza: {$nomePizza}, Valor da pizza: {$valorPizza} Tamanho da pizza: {$tamanhoPizza} e Descrição da pizza: {$descPizza}";

// var_dump($_POST);

