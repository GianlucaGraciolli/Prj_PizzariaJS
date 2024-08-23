<?php
require __DIR__ . "/../config/config.php";
$dado = [];

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id');

    if ($id) {
        $sql = $pdo->prepare("SELECT * FROM pizza WHERE idPizza=:idPizza");
        $sql->bindValue(":idPizza", $id);
        $sql->execute();
        $dado = $sql->fetch(PDO::FETCH_ASSOC);
        var_dump($dado);
    } else {
        header("Location: gerenciaralt.php");
    }
}
?>
<main>
    <form action="./editar_action.php" method="get">

        <div class="form-item">
            <label for="nome-pizza">Nome da Pizza:</label>
            <input type="text" name="nomePizza" id="nome-pizza" value=<?php $dado['nomePizza']; ?>>
        </div>
        <div class="form-item">
            <label for="valor-pizza">Valor R$:</label>
            <input type="text" name="valorPizza" id="valor-pizza" value=<?php isset($dado['valor']) ? $dado['valor'] : ""; ?>>
        </div>
        <div class="form-item">
            <label for="tamanho-pizza">Tamanho:</label>
            <input type="text" name="tamanhoPizza" id="tamanho-pizza" value=<?php isset($dado['tamanho']) ? $dado['tamanho'] : ""; ?>>
        </div>
        <div class="form-item">
            <label for="descricao-pizza">Descrição:</label>
            <textarea name="descricaoPizza" id="descricao" cols="50" rows="10" value=<?php isset($dado['descricao']) ? $dado['descricao'] : ""; ?>></textarea>
        </div>
        <div>
            <input type="submit" name="btn=action" value="Alterar">
            <input type="button" name="btn-action" value="Voltar">
        </div>
    </form>
</main>


<?php
require "./partials/footer.php";
require "./partials/modal.php";
?>