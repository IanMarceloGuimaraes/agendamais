<?php
require_once 'LoginController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $login = new LoginController();

    if ($login->autenticar($email, $senha)) {
        header("Location: ../Views/dashboard.php"); // Redireciona para o painel do usuário
    } else {
        echo "Login ou senha incorretos. Tente novamente.";
    }
}
?>
