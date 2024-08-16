<?php
require "./config/config.php";
require "./pages/partials/header.php";

$sql = $pdo->query("SELECT * FROM PIZZA");
$sql->execute();

if ($sql->rowCount() > 0) {

    $dados = $sql->fetchAll(PDO::FETCH_ASSOC)
?>
    <section class="card-area">

        <?php foreach ($dados as $key => $value): ?>

            <div class="card-area__card">
                <img class="card-area__img" src="./img/img-produto01.png" alt="Imagem da Pizza Muçarela">
                <button class="card-area__button-add">
                    <i class="fa-solid fa-circle-plus"></i>
                </button>
                <span class="card-area__price"><?php echo $value['valor']; ?></span>
                <span class="card-area__title"> <?php echo $value['nomePizza']; ?></span>
                <p class="card-area__description"><?php echo $value['descricao']; ?></p>
            </div>
        <?php endforeach; ?>
    </section>
<?php
} else {
}

?>  

<?php
require "./pages/partials/carrinho.php";
require "./pages/partials/footer.php";
require "./pages/partials/modal.php";
?>