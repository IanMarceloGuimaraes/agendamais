<?php
require_once '../configuracao.php';

class LoginController {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function autenticar($email, $senha) {
        $query = "SELECT * FROM usuario WHERE usua_email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica a senha
        if ($usuario && password_verify($senha, $usuario['usua_senha'])) {
            session_start();
            $_SESSION['usuario_id'] = $usuario['usua_id'];
            $_SESSION['usuario_nome'] = $usuario['usua_nome'];
            return true;
        }

        return false;
    }
}
?>
