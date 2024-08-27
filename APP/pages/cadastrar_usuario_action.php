<?php

require "./../config/config.php";
require __DIR__ ."/partials/header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$usuario = filter_input(INPUT_POST,'usuario');
$cpf = filter_input(INPUT_POST,'cpf', FILTER_VALIDATE_INT);
$login = filter_input(INPUT_POST,'', FILTER_VALIDATE_EMAIL);
$pwd = filter_input(INPUT_POST,'pwd');

if ($usuario && $cpf && $login && $pwd) {
    $sql = $pdo->prepare("INSERT INTO usuario (idPerfil, nomeUsuario, cpf, loginUsuario, senhaUsuario) VALUES (:idPerfil, :nomeUsuario, :cpf, :loginUsuario, :senhaUsuario)");
    $sql->bindValue(":idPerfil",2);
    $sql->bindValue(":nomeUsuario",$usuario);
    $sql->bindValue(":cpf",$cpf);
    $sql->bindValue(":loginUsuario",$login);
    $pwdCript = password_hash($pwd, PASSWORD_DEFAULT); //criptografando a senha
    $sql->bindValue(":senhaUsuario",$pwdCript);
    $sql->execute();

    header("Location: login.php");
    exit;
} else {
    $mensagem = "Dados inválidos! Tente novamente.";
}
} else {
    header("Location: cadastrar_usuario.php");
}

?>

<form action="./cadastrar_usuario_action.php" method="POST" id="form">
    <div class="form-item">
        <label for="nome-usuario">Usuário:</label>
        <input type="text" name="usuario" id="nome-usuario">
    </div>
    <div class="form-item">
        <label for="cpf-usuario">CPF:</label>
        <input type="text" name="cpf" id="cpf-usuario">
    </div>
    <div class="form-item">
        <label for="login-usuario">Login:</label>
        <input type="text" name="login" id="login-usuario">
    </div>
    <div class="form-item">
        <label for="senha-usuario">Senha:</label>
        <input type="password" name="pwd" id="senha-usuario">
    </div>
    <div>
        <?php echo $mensagem ?>
    </div>    
    <div>
        <input type="submit" name="btn-action" value="Cadastrar" class="btn btn--verde">        
    </div>
</form>
<?php
require __DIR__ . "/partials/footer.php";
require __DIR__ . "/partials/modal.php";
?>
