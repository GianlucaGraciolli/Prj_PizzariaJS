<?php
session_start();
require __DIR__ . "/partials/header.php";
require __DIR__ ."/../config/config.php";

if (empty($_SESSION["usuariologado"])) {
    header( "location: login.php" );
    exit;  
}
 
$sql = $pdo->query("SELECT * FROM pizza");
$sql->execute();
if ($sql->rowCount() > 0) {
    # trazer todas as pizzas
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}    
?>

<form action="./logout_action.php" method="POST" id="form-adm">
    <label> Usuário Logado: <?php echo $_SESSION['usuarioLogado']; ?></label>
    <input type="submit" value="Sair" class="btn btn--vermelho">
</form>
 
<table id="tabela-gerenciar">
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Tamanho</th>
        <th>Descricao</th>
        <th>Ações</th>
    </tr>
 
    <?php foreach ($dados as $key => $value): ?>
 
    <tr>
        <td><?php echo $value["nomePizza"]; ?></td>
        <td><?php echo $value["valor"]; ?></td>
        <td><?php echo $value["tamanho"]; ?></td>
        <td><?php echo $value["descricao"]; ?></td>
        <td>
            <a href="./editar.php?id=<?php echo $value["idPizza"]; ?>">Editar</a>
            <span>|</span>
            <a href="./excluir_action.php?id=<?php echo $value["idPizza"]; ?>">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
   
</table>
<?php
require "./partials/footer.php";
require "./partials/modal.php";
?>