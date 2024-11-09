<?php
require_once 'RegistroController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $registro = new RegistroController();

    if ($registro->registrar($nome, $email, $senha)) {
        header("Location: ../Views/login.php"); // Redireciona para a tela de login
    } else {
        echo "Erro ao criar conta. Tente novamente.";
    }
}
?>
