<?php
require_once '../configuracao.php'; // Inclui a configuração e conexão com o banco

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

    // Instancia a conexão com o banco
    $database = new Database();
    $conn = $database->getConnection();

    // Prepara e executa a inserção
    $query = "INSERT INTO usuario (usua_nome, usua_email, usua_senha) VALUES (:nome, :email, :senha)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar. Tente novamente.";
    }
}
?>
